<?php 
	namespace App\Model;
	require 'app/libs/PDODriver.php';
	use App\Libs\PDODriver;
	use \PDO;
	/**
	*
	*/
	class Chapter_Model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getDataChapterByPage($keyword ='',$start,$limit)
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,b.name_comic,b.name_less,c.name AS name_editor
				   FROM chapters AS a INNER JOIN comics AS b on a.id_comic = b.id
				   INNER JOIN editor AS c ON a.id_edit = c.id
				   WHERE a.name_chapter LIKE :keyword
				   OR b.name_comic LIKE :keyword
				   OR c.name LIKE :keyword
                   OR a.chapter LIKE :keyword
				   ORDER BY a.create_time DESC
				   LIMIT :start,:limmit
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
				$stmt->bindParam(':start',$start,PDO::PARAM_INT);
				$stmt->bindParam(':limmit',$limit,PDO::PARAM_INT);

				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}
		
		public function getAllDataChapterKeyword($keyword = '')
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,b.name_comic,b.name_less,c.name AS name_editor
				   FROM chapters AS a INNER JOIN comics AS b on a.id_comic = b.id
				   INNER JOIN editor AS c ON a.id_edit = c.id
				   WHERE a.name_chapter LIKE :keyword
				   OR b.name_comic LIKE :keyword
				   OR c.name LIKE :keyword
                   OR a.chapter LIKE :keyword
				   ORDER BY a.create_time DESC
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);

				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}
		public function getAllDataAuthor($table)
		{
			return $this->getAllData($table);
		}
		public function getAlldataEditor($table)
		{
			return $this->getAllData($table);
		}
		public function updateStatusOrder($table,$data,$id)
		 {
		  return $this->update($table,$data,$id);
		 }
		 public function getDataComicsById($table,$id)
		{
			//print_r($this->findDatabyId("comics",7));die();
			return $this->findDatabyId($table,$id);
		}
		public function addDataBook($data,$table)
		{
			//print_r($data);
			return $this->insert($table,$data);
		}
		public function updateDataBook($data,$table,$nameId)
		{
			//print_r($data);
			return $this->update($table, $data, $nameId);
		}
		 public function deleteChap($table,$id)
		 {
		  return $this->delete($table,$id);
		}
		public function DeleteChapter()
		{
			if($_POST["action"] == "Delete")  
			{  
				$procedure = "  
				CREATE PROCEDURE deleteUser(IN user_id int(11))  
				BEGIN   
				DELETE FROM users WHERE id = user_id;  
				END;  
				";  
				if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS deleteUser"))  
				{  
					if(mysqli_query($connect, $procedure))  
					{  
						$query = "CALL deleteUser('".$_POST["id"]."')";  
						mysqli_query($connect, $query);  
						echo 'Data Deleted';  
					}  
				}  
			}    
		}
	}

?>