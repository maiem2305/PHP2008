<?php 
	namespace App\Model;
	require 'application/libs/PDODriver.php';
	use Application\Libs\PDODriver;
	use \PDO;
	class Home_model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function updateViewBook($idManga,$view,$table){
			$data = [
				'view' =>($view + 1)
			];
			// echo "<pre />";print_r($data);die();
			return $this->update($table,$data,$idManga);
		}
		public function getTopComic(){
			$data = [];
			$sql  = "SELECT * FROM `comics` ORDER BY `view` DESC LIMIT 5
			";
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die();
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			//echo "<pre />";print_r($data);die();
			return $data;
		}
		public function getTopComicSix(){
			$data = [];
			$sql  = "SELECT * FROM `comics` ORDER BY `view` DESC LIMIT 5,1
			";
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die();
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			//echo "<pre />";print_r($data);die();
			return $data;
		}
		public function getViewLastWeek($limmit){
			$data = [];
			$sql  = "SELECT A.id, A.name_comic, A.images,COUNT(B.LogID) AS LogID
					FROM comics A inner join viewlogwebs B
					  ON A.id = B.ID_Comic
					WHERE DATEDIFF(CURRENT_DATE(),B.CreatedTime) <= 7
					GROUP BY A.id, A.name_comic, A.images
					ORDER BY COUNT(B.LogID) DESC
					LIMIT :limmit

					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				$stmt->bindParam(':limmit',$limmit,PDO::PARAM_INT);
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
		public function getViewLastMonth($limmit){
			$data = [];
			$sql  = "SELECT A.id, A.name_comic, A.images,COUNT(B.LogID) AS LogID
					FROM comics A inner join viewlogwebs B
					  ON A.id = B.ID_Comic
					WHERE DATEDIFF(CURRENT_DATE(),B.CreatedTime) <= 30
					GROUP BY A.id, A.name_comic, A.images
					ORDER BY COUNT(B.LogID) DESC
					LIMIT :limmit

					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				$stmt->bindParam(':limmit',$limmit,PDO::PARAM_INT);
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
		public function getMangaHomeFinish($start=0,$limit=6)
		{
			$data = [];
			$sql  = "SELECT a.*
					FROM comics as a 
					WHERE a.status=1
                    ORDER BY a.create_time DESC
                    limit :start,:limmit
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				$stmt->bindParam(':start',$start,PDO::PARAM_INT);
				$stmt->bindParam(':limmit',$limit,PDO::PARAM_INT);
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
		public function getHomeDataByUpdate_time($start=0,$limmit=6){
			$data = [];
			$sql  = "SELECT a.* , b.name_author FROM comics as a INNER JOIN author as b WHERE b.id=a.id_author ORDER BY update_time desc
					limit :start,:limmit
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				$stmt->bindParam(':start',$start,PDO::PARAM_INT);
				$stmt->bindParam(':limmit',$limmit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			// echo "<pre/>";print_r($data);die();
			return $data;
		}
		public function getAllChapterBookById($id)
		{
			$data = [];
			$sql  = "SELECT b.chapter
					FROM comics as a 
					INNER JOIN chapters AS b ON a.id = b.id_comic 
					WHERE a.id = :id
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die();
				$stmt->bindParam(':id',$id,PDO::PARAM_INT);
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
?>