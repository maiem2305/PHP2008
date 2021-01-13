<?php 
	namespace App\Model;
	require 'application/libs/PDODriver.php';
	use Application\Libs\PDODriver;
	use \PDO;
	class Action_Model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getAllDataByUpdate_time(){// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
			$data = [];
			$sql  = "SELECT a.* , b.name_author FROM comics as a INNER JOIN author as b WHERE b.id=a.id_author ORDER BY update_time desc
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
		public function getDataByUpdate_time($start=0,$limmit=6){// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
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
		public function getAllDataMangaByKeyword($keyword = '')// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,
                   b.name AS name_editor,
                   c.name_author 
				   FROM comics AS a 
                   INNER JOIN author AS c on a.id_author = c.id
				   INNER JOIN editor AS b ON a.id_editor = b.id
				   WHERE a.name_comic LIKE :keyword
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
		function create_link_manga($data)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$stringUri = '';
			$uri= '';
			foreach($data as $key => $val)
			{
				$uri .= "&{$key}={$val}";

			}
			// $stringUri = BASE_URL . "?" . (!empty($uri) ? ltrim($uri,"&"): '');
			$stringUri = "?" . (!empty($uri) ? ltrim($uri,"&"): '');
			// echo "<pre />";print_r($stringUri);die();
				return $stringUri;
		}
		function panigation($totalRecord, $currentPage, $rowLimit, $keyword,$links)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
		//di xac dinh lai currentPage
		//can tinh dc totalPage
			$totalPage = ceil($totalRecord/$rowLimit);
		//echo $totalPage;die();
			if ($currentPage <= 0) {
				$currentPage =1;
			}elseif($currentPage > $totalPage)
			{
				$currentPage = $totalPage;
			}

			$start = ($currentPage -1) * $rowLimit;

		//tao template bootstrap phan trang.
			$html = '';
			$html .= "<nav aria-label='Page navigation'>";
			$html .= "<ul class='pagination'>";
			$html .= "";
		//xu ly cho nut preview pageWWx`
			if($currentPage > 1 && $currentPage <= $totalPage)
			{
				$html .= "<li><a href='".str_replace('{page}', ($currentPage-1), $links)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	        // echo str_replace('{page}', ($currentPage-1), $links);die();
			}
		//het xu ly cho preview page
	    // echo $totalPage;die();
		//xu ly cho cac trang con lai
			for($i=1;$i<=$totalPage;$i++)
			{
		    //kiem tra xem ng dung dang dung o trang hien tai hay ko neu dung active hieu ung cho ng dung bt
				if($i==$currentPage)
				{
					$html .= "<li class='active'><a>".$currentPage."<span class='sr-only'></span></a></li>";
				}
				else
				{
					$html .= "<li><a href='".str_replace('{page}', $i, $links)."'>".$i."</a></li>";
				}
			}
		//het xu ly cho cac trang con lai
		//xu ly cho nut nextpage
			if($currentPage < $totalPage && $currentPage >= 1){
				$html .= "<li><a href='".str_replace('{page}', ($currentPage+1), $links)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
			}
		//het xu ly cho nut next page 

			$html .= "</ul>";
			$html .= "</nav>";
			return array(
				'page' => $currentPage,
				'start' => $start,
				'limit' => $rowLimit,
				'panigationHtml' => $html,
				'keyword' => $keyword
			);

		}
		public function getDataMangaByPage($keyword ='',$start,$limit)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,
                   b.name AS name_editor,
                   c.name_author 
				   FROM comics AS a 
                   INNER JOIN author AS c on a.id_author = c.id
				   INNER JOIN editor AS b ON a.id_editor = b.id
				   WHERE a.name_comic LIKE :keyword
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

		public function getMaxChapter($idManga=2)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql  = "SELECT * from comics as a
					INNER JOIN chapters as b
					WHERE a.id=:idManga and b.id_comic=a.id
					order by b.chapter desc limit 1 offset 1
					";
					//echo $id;die();
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				$stmt->bindParam(':idManga',$idManga,PDO::PARAM_INT);
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


		public function getAllDataMangaByKeywordCategory($keyword = '')// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*
				   FROM comics AS a 
				   WHERE a.category LIKE :keyword
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
		public function getDataMangaByCategory($keyword ='',$start,$limit)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			//echo $start;die();
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*
				   FROM comics AS a 
				   WHERE a.category LIKE :keyword
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

		// model tac gia\
		public function getAllDataMangaByKeywordAuthor($keyword = '')// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,
                   c.name_author 
				   FROM comics AS a 
                   INNER JOIN author AS c on a.id_author = c.id
				   WHERE a.id_author=c.id and c.name_author LIKE :keyword
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

		public function getDataMangaByAuthor($keyword = '',$start,$limit)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT a.*,
                   c.name_author 
				   FROM comics AS a 
                   INNER JOIN author AS c on a.id_author = c.id
				   WHERE a.id_author=c.id and c.name_author LIKE :keyword
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

		public function getAllDataMangaByWoman()// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql = "SELECT a.*
				   FROM comics AS a 
				   WHERE a.category LIKE '%Anime%'
                   OR a.category LIKE '%Manga%'
                   OR a.category LIKE '%Fantasy%'
                   OR a.category LIKE '%School_Life%'
				   ORDER BY a.create_time DESC
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}
		public function getDataMangaByWoman($start,$limit)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql = "SELECT a.*
				   FROM comics AS a 
				   WHERE a.category LIKE '%Anime%'
                   OR a.category LIKE '%Manga%'
                   OR a.category LIKE '%Fantasy%'
                   OR a.category LIKE '%School_Life%'
				   ORDER BY a.create_time DESC
				   LIMIT :start,:limmit
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
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
		// End model tac gia
		//hand MANGA BY MAN
		public function getAllDataMangaByMan()// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql = "SELECT a.*
			FROM comics AS a 
			WHERE a.category LIKE '%Action%'
			OR a.category LIKE '%Anime%'
			OR a.category LIKE '%Comedy%'
			OR a.category LIKE '%Mystery%'
			OR a.category LIKE '%Fantasy%'
			ORDER BY a.create_time DESC
			";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}
		public function getDataMangaByMan($start,$limit)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql = "SELECT a.*
			FROM comics AS a 
			WHERE a.category LIKE '%Action%'
			OR a.category LIKE '%Anime%'
			OR a.category LIKE '%Comedy%'
			OR a.category LIKE '%Mystery%'
			OR a.category LIKE '%Fantasy%'
			ORDER BY a.create_time DESC
			LIMIT :start,:limmit
			";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
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
		//END HANDLE BY MAN
		//manga full
				public function getAllMangaFinish()// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql  = "SELECT a.*
					FROM comics as a 
					WHERE a.status=1
                    ORDER BY a.create_time DESC
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
		public function getMangaFinish($start,$limit)// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
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
		//end manga full
		//manga view
				public function getAllTopManga()// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
		{
			$data = [];
			$sql  = "SELECT a.*
					FROM comics as a 
                    ORDER BY a.view DESC
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
		public function getTopManga($start,$limit)
		{// nhieu ham qua thay hoi ham nao thi e tra loi ham day chu chu thich tren tung dong khong het dc
			$data = [];
			$sql  = "SELECT a.*
					FROM comics as a 
                    ORDER BY a.view DESC
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
		//end manga view
	}
?>