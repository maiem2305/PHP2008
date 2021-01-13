<?php 
	namespace App\Model;
	require 'application/libs/PDODriver.php';
	use Application\Libs\PDODriver;
	use \PDO;
	class Product_model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function updateViewBook($idManga,$view,$table){
			$data = [
				'view' =>($view + 1)
			];
			$dataSaveLog=[
				"IpClient" =>"::1",
				//"CreatedTime"=> date("Y/m/d H:i:s"),
				"ID_Comic" =>$idManga
			];
			//die("huy");
			$this->insert("viewlogwebs", $dataSaveLog);
			// echo "<pre />";print_r($data);die();
			return $this->update($table,$data,$idManga);
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
		public function getChapterTop($idManga = ''){
			$data = [];
			$sql  = "SELECT a.*,
				    b.name_author,
				    c.name AS name_editor,
				    d.chapter AS chapters_fix,
				    d.view_chap
				    FROM comics as a 
				    INNER JOIN author AS b ON a.id_author = b.id 
				    INNER JOIN editor AS c ON a.id_editor = c.id 
				    INNER JOIN chapters AS d ON a.id = d.id_comic
				    WHERE a.id = :idManga
				    ORDER BY d.chapter DESC
				    LIMIT 5
			";
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die();
				$stmt->bindParam(':idManga',$idManga,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			// echo "<pre />";print_r($data);die();
			return $data;
		}
		public function getAllDataMangaByKeyword($keyword = '')
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,
					b.name_author ,
					c.name AS name_editor
				   FROM comics AS a INNER JOIN author AS b on a.id_author = b.id
				   INNER JOIN editor AS c ON a.id_editor = c.id
				   WHERE a.name_comic LIKE :keyword 
				   OR b.name_author LIKE :keyword 
				   OR c.name LIKE :keyword 
				   ORDER BY a.create_time DESC
				 ";
				 // echo $key;die();
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
			// echo "<pre />";print_r($data);die();
			return $data;
		}
		public function getChapterMangaByPage($keyword ='',$start,$limit,$idManga)
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,
					b.name_author ,
					c.name AS name_editor,
					d.chapter AS chapters_fix
				   FROM comics AS a INNER JOIN author AS b on a.id_author = b.id
				   INNER JOIN editor AS c ON a.id_editor = c.id
				   INNER JOIN chapters AS d ON a.id = d.id_comic
				   WHERE a.id = :idManga 
				   ORDER BY d.chapter ASC
				   LIMIT :start,:limmit
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				// $stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
				$stmt->bindParam(':start',$start,PDO::PARAM_INT);
				$stmt->bindParam(':limmit',$limit,PDO::PARAM_INT);
				$stmt->bindParam(':idManga',$idManga,PDO::PARAM_INT);

				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}
		public function getAllChapterById($id)
		{
			$data = [];
			$sql  = "SELECT a.*,
					d.chapter AS chapters_fix
					FROM comics as a 
					INNER JOIN chapters AS d ON a.id = d.id_comic
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
			// echo "<pre/>";print_r($data);die();
			return $data;
		}
		public function getDataByUpdate_time(){
			$data = [];
			$sql  = "SELECT a.* , b.name_author FROM comics as a INNER JOIN author as b WHERE b.id=a.id_author ORDER BY update_time desc LIMIT 0,6
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
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
	}
?>