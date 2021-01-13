<?php 
	namespace App\Libs;
	require 'app/config/database.php';
	use App\Config\Database;
	use \PDO;
	/**
	* author: Huyvq
	* date:19/03/2018
	* description: thu vien tien ich PDO
	*/
	class PDODriver extends Database
	{
		private  $data=array();
		function __construct()
		{
			parent::__construct();
		}
		//LAY RA TEN truong la khoa chinh cua 1 bang nao do
		private function getPrimaryKey($table){
			$myData = [];
			$sql = "SHOW KEYS FROM {$table} WHERE Key_name = 'PRIMARY'";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				if ($stmt->execute()){
					if ($stmt->rowCount()>0) {
						$myData = $stmt->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			return $myData['Column_name']?? '';
		}
		//thuc hanh lay tat ca du lieu cua cac bang khac nhau.
		public function getAllData($table)
		{
			//$sql = 'SELECT * FROM '.$table;
			$sql = "SELECT * FROM {$table}";
			$stmt = $this->db->prepare($sql);
			if($stmt)
			{
				if($stmt->execute())
				{
					if($stmt->rowCount()>0)
					{
						$this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			return $this->data;
		}
		//viet ham lay du lieu theo id
		public function findDatabyId($table, $ids)
		{
			$nameId = $this->getPrimaryKey($table);
			//die($nameId.$ids);
			$sql = "SELECT * FROM {$table} where {$nameId}=:id";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindParam(':id',$ids,PDO::PARAM_INT);
				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$this->data = $stmt->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			return $this->data;
		}
		//viet ham insert data
		public function insert($table,$data  = [])
		{
			$filedTable = '';//tao bien rong
			$filedParam = '';
			foreach ($data as $key => $value) {
				$filedTable .= ($filedTable == '') ? $key : ',' . $key;//kiem tra rong va khong duoc de dau phay o dau
				$filedParam .= ($filedParam == '') ? ":{$key}" : ", :$key";
			}
			//echo $filedParam;
			//die;
			$sql = "INSERT INTO {$table}({$filedTable}) VALUES ({$filedParam})";//cau lenh sql
			$stmt = $this->db->prepare($sql);//kiem tra cau lenh xem co dung khong
			if ($stmt) {
				//bindParam();
				//sau moi vong lap for gtri of $val dc phep thay d0^?i.
				foreach ($data as $k => &$val) {
					$stmt->bindParam(":{$k}",$val,PDO::PARAM_STR);
				}
				if ($stmt->execute()) {
					return TRUE;
				}
				$stmt->closeCursor();
			}
			return FALSE;
		}

		public function update($table,$data,$nameId)
		{	
			$primaryKey = $this->getPrimaryKey($table);//lay id
			$fieldData='';
			// SQL = UPDATE admins set username = :user,email = :email..... where id = :id
			foreach ($data as $key => $value) {
				$fieldData .= ($fieldData == '')? "{$key} = :{$key}" : ", {$key} = :{$key}";
			}// foreach
			//echo $fieldData;
			//die;
			$sql = "UPDATE {$table} SET {$fieldData} WHERE {$primaryKey} = :id";//update theo parameter
			$stmt = $this->db->prepare($sql);//kiem tra cau lenh sql
			//echo $sql."<br>";

			 //echo $primaryKey;
			 //die;
			if ($stmt) {//kiem tra
				foreach ($data as $k => &$val){
					$stmt->bindParam(":{$k}",$val,PDO::PARAM_STR);
				}//chay vong for gan du lieu cho parameter
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
		public function delete($table,$id)
		{
			$primaryKey = $this->getPrimaryKey($table);//get primarykey
			$sql = "DELETE FROM {$table} WHERE {$primaryKey} = :id";//xoa table theo id
			
			$stmt = $this->db->prepare($sql);// kiem tra xem cau lenh sql dung chua
			if ($stmt) {//kiem tra no
				$stmt->bindParam(":id",$id,PDO::PARAM_INT);// truyen bien id 
				/// tu kiem tra xem delete co ton tai id hay khong
				if ($stmt->execute()) {
					return TRUE;
				}
				$stmt->closeCursor();
			}
			return FALSE;
		}
	}
?>