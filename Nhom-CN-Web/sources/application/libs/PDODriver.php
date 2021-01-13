<?php 
	//require '../config/database.php';
	namespace Application\Libs;// dinh danh ten rieng cho file
	require 'application/config/database.php';//ket noi toi db
	use \PDO;
	use App\Config\Database;
	class PDODriver extends Database//khoi tao db
	{
		private $data=array();//tao bien $data la 1 mang
		function __construct()//ham khoi tao chay vao dau tien khi chay trinh duyet
		{
				parent::__construct();//ket noi db.
		}
		public function getAllData($table)//lay tat ca du lieu cua 1 bang nao do.
		{
			$sql = "SELECT * FROM {$table}";
			$stmt = $this->db->prepare($sql);//kiem tra cau lenh SQL nay co dung co phap mysql ko?
			if ($stmt) {//kiem tra xem co dung cu phap ko
				if ($stmt->execute()) {//thuc thi cau lenh select * form
					if ($stmt->rowCount()>0) {
							//lay dc du lieu moi dc phep chay vao day
						$this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
						//echo "huydz";die();
					}
				}
				$stmt->closeCursor();//dong con tro
			}
			return $this->data;// tra ve du lieu
		}
		private function getPrimaryKey($table){//tao function
			$myData = [];
			$sql = "SHOW KEYS FROM {$table} WHERE Key_name = 'PRIMARY'";
			$stmt = $this->db->prepare($sql);//kiem tra cau lenh SQL nay co dung co phap mysql ko?
			if ($stmt) {//kiem tra xem co dung cu phap ko
				if ($stmt->execute()){//thuc thi cau lenh select * form
					if ($stmt->rowCount()>0) {//lay dc du lieu moi dc phep chay vao day
						$myData = $stmt->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			// echo "<pre />" ;print_r($myData);die;
			return $myData['Column_name']?? '';//lay dc primaryKey
		}
		public function update($table,$data,$nameId)//update
		{
			$primaryKey = $this->getPrimaryKey($table);//lay id of table
			// echo $primaryKey;die();
			$fieldData='';
			// SQL = UPDATE admins set username = :user,email = :email..... where id = :id
			foreach ($data as $key => $value) {
				$fieldData .= ($fieldData == '')? "{$key} = :{$key}" : ", {$key} = :{$key}";
			}
			// echo $fieldData;
			// die;
			$sql = "UPDATE {$table} SET {$fieldData} WHERE {$primaryKey} = :id";
			$stmt = $this->db->prepare($sql);
			// echo $fieldData."<br>";

			 //echo $primaryKey;
			 //die;
			if ($stmt) {
				foreach ($data as $k => &$val){
					// echo $val;die();
					$stmt->bindParam(":{$k}",$val,PDO::PARAM_STR);
				}
				$stmt->bindParam(":id",$nameId,PDO::PARAM_INT);
				//kiem tra xem co ton tai id hay khong
				//if (!empty($this->findDatabyId($table,$nameId))) {
					if ($stmt->execute()) {
					return TRUE;
				//}
				}
				
				$stmt->closeCursor();
			}
			return FALSE;
		}
		public function insert($table,$data  = [])
		{

			$filedTable = '';
			$filedParam = '';
			foreach ($data as $key => $value) {
				$filedTable .= ($filedTable == '') ? $key : ',' . $key;
				$filedParam .= ($filedParam == '') ? ":{$key}" : ", :$key";
			}
			$sql = "INSERT INTO {$table}({$filedTable}) VALUES ({$filedParam})";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				//bindParam();
				//sau moi vong lap for gtri of $val dc phep thay d0^?i.
				foreach ($data as $k => &$val) {
					$stmt->bindParam(":{$k}",$val,PDO::PARAM_STR);
				}

				if ($stmt->execute()) {
					//die($sql);
					return TRUE;
				}
				$stmt->closeCursor();
			}
			return FALSE;
		}
		public function getDataBookById($id)
		{
			$data = [];
			$sql  = "SELECT a.*,
					b.name_author,
					c.name AS name_editor
					FROM comics as a 
					INNER JOIN author AS b ON a.id_author = b.id 
					INNER JOIN editor AS c ON a.id_editor = c.id 
					WHERE a.id = :id
					LIMIT 1
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die();
				$stmt->bindParam(':id',$id,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			return $data;
		}
		public function getFullmanga()
		{
			$data = [];
			$sql  = "SELECT a.* FROM comics as a WHERE a.status = 1
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die()
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			return $data;
		}
		public function getNewsmanga()
		{
			$data = [];
			$sql  = "SELECT a.*,
                    b.update_time as update_time_chap
					FROM comics as a 
                    INNER JOIN chapters as b
					WHERE a.id=b.id_comic 
                    ORDER BY b.update_time DESC
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die()
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			return $data;
		}

	}
	// $m = new PDODriver();
	// $conga = $m->getAllData('comics');
	// echo "<pre />"; print_r($conga); die('hello');
?>