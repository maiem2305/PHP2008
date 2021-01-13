<?php 
	namespace App\Model;
	require 'application/libs/PDODriver.php';
	use Application\Libs\PDODriver;
	use \PDO;
	class Manga_model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getDataByChapter($idManga = '',$chapter){
			$data = [];
			$sql  = "SELECT a.*,
			        b.name_comic
			        FROM chapters as a 
			        INNER JOIN comics AS b ON a.id_comic = b.id
			        WHERE b.id = :idManga AND a.chapter = :chapter
			        LIMIT 1
			";
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				// echo $stmt;die();
				$stmt->bindParam(':idManga',$idManga,PDO::PARAM_INT);
				$stmt->bindParam(':chapter',$chapter,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			// echo "<pre />".$chapter;print_r($data);die();
			return $data;
		}
		public function cutImages($data){
			$content= [];
			//$data['content'] = str_replace("1600","?imgmax=2000",$data['content']);die($data['content']);
			//$data['content'] = str_replace(".jpg",".jpg?imgmax=2000",$data['content']);die($data['content']);
			$content = explode("?imgmax=2000",$data['content']);
			//echo "<pre />";print_r($content);die();
			return $content;
		}
		public function addImagesEN($data){

		}
		public function cutImagesEN($data){
			$content= [];

			$content = explode("/",$data['langen']);
			
			//echo "<pre />";print_r($content);die();
			return $content;
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