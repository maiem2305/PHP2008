<?php 
	namespace App\Model;
	require 'app/libs/PDODriver.php';
	use App\Libs\PDODriver;
	use \PDO;
	/**
	*
	*/
	class Editor_model extends PDODriver
	{
		public function getEditorByKeyword($keyword ='',$start,$limit)
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT f.* 
                   FROM editor as f 
                   WHERE f.name LIKE :keyword
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

		public function getAllEditorByKeyword($keyword = '')
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT f.* 
                   FROM editor as f 
                   WHERE f.name LIKE :keyword 
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
		public function getDataEditorById($table,$id)
		{
			return $this->findDatabyId($table,$id);
		}
		
		function myValidateAddEditor($name,$phone,$address,$note)
		{
			$error 			   = [];
			$error['name'] = (!empty($name) ? '' :'Enter name editor');
			$error['phone'] = (!empty($phone) ? '' :'Enter phone editor');
			$error['address'] = (!empty($address) ? '' :'Enter address editor');
			$error['note'] = (!empty($note) ? '' :'Enter note editor');
			return $error;
		}
		public function updateDataEditor($data,$table,$nameId)
		{
			//echo "<pre/>";print_r($data);die();
			return $this->update($table, $data, $nameId);
		}
		public function addDataEditor($data,$table)
		{
			//print_r($data);
			return $this->insert($table,$data);
		}
	}
	

?>
