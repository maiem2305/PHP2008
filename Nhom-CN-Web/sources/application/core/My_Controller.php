<?php 
	namespace Application\Core;
	/**
	* 
	*/
	class My_Controller
	{
		protected $module;
		function __construct()
		{
			$module = $_GET['c'] ?? '';
			if((strtolower($module)!=='details') && !isset($_SESSION['detail']))
		    {
		   		$_SESSION['detail']='updateView_'.$_SERVER['REMOTE_ADDR'];
		   		// echo "<pre />"; print_r($_SESSION['detail']);die();
		    }

		}
		function loadHeader($header = [])
		{
			$title = $header['title'] ?? '';
			$content = $header['content'] ?? '';
			$countCart = (isset($_SESSION['fav']) && !empty($_SESSION['fav'])) ? count($_SESSION['fav']) : 0;//kiem tra xem co bnieu sp trong gio hang neu khong co thi tra ve 0 sp
			require 'application/view/partials/header_view.php' ;
		}
		function loadFooter(){
			require 'application/view/partials/footer_view.php';
		}
		function loadContent($data = []){
			$content = $data;
			require 'application/view/home/content_home_view.php';
		}
		function loadContentDetail($data=[],$idManga)
		{
			require 'application/view/detail/content_detail_view.php';
		}
		function loadSideBarDetails($sidebar=[]){
			require 'application/view/detail/sidebar_detail_view.php';
		}
		function loadSideBarHome($data=[])
		{
			$content = $data;
			require 'application/view/home/sidebar_home_view.php';
		}
		function loadContentManga($value=[])
		{
			$content = $value;
			require 'application/view/readManga/content-manga.php';
		}
		function loadActionPage($data=[]){
			require 'application/view/pageProduct/details-product.php';
		}
		function loadSidebarPage($sidebar=[]){
			require 'application/view/pageProduct/sidebar_pageProduct_view.php';
		}
		function loadFav($data=[]){
			require 'application/view/fav/index_view.php';
		}
	}
?>