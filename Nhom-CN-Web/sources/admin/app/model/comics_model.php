<?php 
	namespace App\Model;
	require 'app/libs/PDODriver.php';
	use App\Libs\PDODriver;
	use \PDO;
	/**
	*
	*/
	class Comics_Model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getDataMangaByPage($keyword ='',$start,$limit)
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,b.name_author,c.name AS name_editor
				   FROM comics AS a INNER JOIN author AS b on a.id_author = b.id
				   INNER JOIN editor AS c ON a.id_editor = c.id
				   WHERE a.`name_comic` LIKE :keyword
				   OR b.name_author LIKE :keyword
				   OR c.name LIKE :keyword 
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

		public function getAllDataMangaKeyword($keyword = '')
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,b.name_author,c.name AS name_editor
				   FROM comics AS a INNER JOIN author AS b on a.id_author = b.id
				   INNER JOIN editor AS c ON a.id_editor = c.id
				   WHERE a.`name_comic` LIKE :keyword
				   OR b.name_author LIKE :keyword
				   OR c.name LIKE :keyword 
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
		 public function deleteComic($table,$id)
		 {
		  return $this->delete($table,$id);
		 }

	}

?>