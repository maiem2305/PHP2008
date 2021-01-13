<?php 
	namespace App\Controller\Home;
	require 'application/model/manga_model.php';
	require 'application/core/My_Controller.php';
	use Application\Core\My_Controller;
	//use App\Libs\PDODriver;
	use App\Model\Manga_model;
	class Home extends My_Controller
	{
		private $_mangaModel;
		function __construct()
		{
			parent::__construct();
			$this->_mangaModel = new Manga_model();
		}
		function index()
		{
			$header = [];

			$idManga = $_GET['id'] ?? '';

			$keyword = $_GET['k'] ?? '';

			$chapter = $_GET['chapter'] ?? '';
			$chapter = is_numeric($chapter) && $chapter >1 ? $chapter :1;
			
			$content['allDataBooks'] = $this->_mangaModel->getDataBookById($idManga);
			$content['dataChap'] = $this->_mangaModel->getDataByChapter($idManga,$chapter);
			$content["images"] = $this->_mangaModel->cutImages($content['dataChap']);
			$content['images2'] = $this->_mangaModel->cutImagesEN($content['dataChap']);
			$content['allChap'] = $this->_mangaModel->getAllChapterBookById($idManga);
			$content['chapter'] = $chapter;
			foreach ($content["images2"] as $key => $img) {
				$content['images1'][$key] = IMG_PATH_UPLOAD.$content['allDataBooks']['name_less']."/chap".$chapter."/".$img;
			}
			// for ($i=1; $i <=8 ; $i++) { 
			// 	echo "doraemon_3_".$i.".jpg/";
			// }die();
			//echo "<pre />";print_r($content['images2']);
			//die();
			$bien1=count($content["images1"]);
			//echo "<pre />";print_r($content['allChap']);
			//die($content['chapter'].count($content['allChap']));
			$header['title'] = $content['allDataBooks']["name_comic"];
			$header['content'] = "This is Content Manga Page";
			// echo "<pre />"; print_r($content['topMaga']); die();
			// foreach ($content['allDataBooks'] as $key => $manga) {
			// 	$split['cut'][$key] = explode(',', $manga['category']);
			// 	//echo "<pre />"; print_r($split['cut']);
			// }
			//echo "<pre />"; print_r($content['dataChap']); die();
			 $this->loadHeader($header);
			 $this->loadContentManga($content);
			 $this->loadFooter();
			 //require 'application/view/bantest/loadimages_view.php';
		}
	}
	$m    =	$_GET['m'] ?? 'index';
	$home = new Home();
	$home->$m();
?>
?>