<?php 
	namespace App\Model;
	require 'app/libs/PDODriver.php';
	use App\Libs\PDODriver;
	use \PDO;
	/**
	*
	*/
	class Author_model extends PDODriver
	{
		public function getAuthorByKeyword($keyword ='',$start,$limit)
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT f.* 
                   FROM author as f 
                   WHERE f.name_author LIKE :keyword
                   ORDER BY f.create_time DESC
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

		public function getAllAuthorByKeyword($keyword = '')
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT f.* 
                   FROM author as f 
                   WHERE f.name_author LIKE :keyword 
				   ORDER BY f.create_time DESC
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
		public function getDataAuthorById($table,$id)
		{
			return $this->findDatabyId($table,$id);
		}
		
		function myValidateAddAuthor($name_author)
		{
			$error 			   = [];
			$error['name_author'] = (!empty($name_author) ? '' :'Enter name name_author');
			return $error;
		}
		public function updateDataAuthor($data,$table,$nameId)
		{
			//echo "<pre/>";print_r($data);die();
			return $this->update($table, $data, $nameId);
		}
		public function addDataAuthor($data,$table)
		{
			//print_r($data);
			return $this->insert($table,$data);
		}
	}
	

?>
