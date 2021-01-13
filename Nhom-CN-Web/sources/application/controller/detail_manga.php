<?php 
	namespace App\Controler;
	require 'application/model/product_model.php';
	require 'application/core/My_Controller.php';
	use Application\Core\My_Controller;
	use App\Model\Product_model;
	/**
	* 
	*/
	class Details extends My_Controller
	{
		private $_productModel;
		function __construct()
		{
			parent::__construct();
			$this->_productModel = new Product_model();
		}
		function details()
		{
			$header = [];
			$header['title'] = "Detail Manga";
			$header['content'] = "This is content detals";

			$idManga = $_GET['id'] ?? '';

			$keyword = $_GET['k'] ?? '';

			$page = $_GET['page'] ?? '';


			$idManga = is_numeric($idManga) && $idManga >0 ? $idManga :0;
			$data = [];
			$data['dataMangaById'] = $this->_productModel->getDataBookById($idManga);
			$mangas = $this->_productModel->getAllChapterById($idManga);

			// echo "<pre /> sấ ".count($mangas);print_r($mangas);die();

			//bat dau su dung ham phan trang
			$page = (is_numeric($page) && $page >0) ? $page : 1;
			$dataLink =[
				'c' => 'details',
				'id' =>$idManga,
				'page'=> '{page}',
				's' => $keyword
			];
			$links = create_link($dataLink);
			// echo "<pre />"; print_r($links);die();
			//het ham phan trang
			//Start Panigate
			$panigate = panigation(count($mangas), $page, 3,$keyword,$links);
			// echo "<pre />"; print_r($panigate);die();
			// echo $idManga;die;
			$data['mangas'] = $this->_productModel->getChapterMangaByPage($panigate['keyword'],$panigate['start'],$panigate['limit'],$idManga);

			// echo "<pre />";print_r($data['mangas']);die();
			$data['panigation'] = $panigate['panigationHtml'];
			/*End Panigate*/
			// echo "<pre />";print_r($panigate['panigationHtml']);die();
			$data['cut'] = explode(", ",$data['dataMangaById']['category']);
			$sidebar['cut']=explode(", ",$data['dataMangaById']['category']);
			if (isset($_SESSION['detail'])) {
			// update luoi xem
			$up = $this->_productModel->updateViewBook($idManga,$data['dataMangaById']['view'],'comics');
			// echo $up; die();
			if ($up) {
				 // echo "<pre />"; print_r($_SESSION['detail']);die();
				unset($_SESSION['detail']);
				// $convit = $_SESSION['detail'] ?? "I'm Huy";
				// echo $convit;die();
				}
			}
			// lay top truyen ra
			$data['topMaga'] = $this->_productModel->getChapterTop($idManga);
			// end ham top-manga
			//echo "<pre />";print_r($cut);die();
			$sidebar['getUpdate'] = $this->_productModel->getDataByUpdate_time();
			//print_r($sidebar);die();
			$this->loadHeader($header);
			$this->loadContentDetail($data,$idManga);
			$this->loadSideBarDetails($sidebar);
			$this->loadFooter();
			//require 'application/view/bantest/product_view.php';
		}
	}
	$m = isset($_GET['m'])? $_GET['m'] : "details";
	$details = new Details();
	$details->$m();

?>