<?php 
	namespace App\Controller\Home;//dinh danh ten rieng cho trang home.
	require 'application/model/home_model.php';// goi den phuong thuc xu ly home model
	require 'application/core/My_Controller.php';//xu ly controller
	use Application\Core\My_Controller;//su dung namespace cua MY_CONTROLLER
	//use App\Libs\PDODriver;
	use App\Model\Home_model;//su dung home_model = use name space
	class Home extends My_Controller//tao class home
	{
		private $_homeModel;//khoi tao bien truy xuat 
		function __construct()
		{
			parent::__construct();
			$this->_homeModel = new Home_model();//khoi tao class bang bjen vua tao o tren
		}
		function index()//tao functon
		{
			$header = [];//tao bien
			$header['title'] = "This is Home Page";//gan title ch0 trang web
			$header['content'] = "This is Content Home Page";//tao bien luu noi dung cua trang web
			$content['allDataBooks'] = $this->_homeModel->getAllData("comics");
			$content['topComic'] = $this->_homeModel->getTopComic();
			$content['topComicSix'] = $this->_homeModel->getTopComicSix();

			$content['updateMG'] = $this->_homeModel->getHomeDataByUpdate_time();
			$content['fullManga'] = $this->_homeModel->getMangaHomeFinish();
			$content['getViewLastWeek'] = $this->_homeModel->getViewLastWeek(6);
			$content['getViewLastMonth'] = $this->_homeModel->getViewLastMonth(10);

			foreach ($content['updateMG'] as $key => $value) {
				//die($value['id']);
				$content['countChapNew'][$value['id']] = $this->_homeModel->getAllChapterBookById($value['id']);
			}
			foreach ($content['fullManga'] as $key => $value) {
				//die($value['id']);
				$content['countFullManga'][$value['id']] = $this->_homeModel->getAllChapterBookById($value['id']);
			}
			//echo "<pre />"; print_r($content['topComic']); die();
			// foreach ($content['allDataBooks'] as $key => $manga) {
			// 	$split['cut'][$key] = explode(',', $manga['category']);
			// 	//echo "<pre />"; print_r($split['cut']);
			// }
			// echo "<pre />"; print_r($split['cut']); die();
			 $this->loadHeader($header);
			 $this->loadContent($content);
			 $this->loadSideBarHome($content);
			 $this->loadFooter();
			 // require 'application/view/bantest/home_view.php';
		}
	}
	$m    =	$_GET['m'] ?? 'index';//kiem tra xem co m tren trinh duyet hay ko ko co lay index
	$home = new Home();//khoi tao class
	$home->$m();//goi den phuong thuc (mac dinh la index)
?>