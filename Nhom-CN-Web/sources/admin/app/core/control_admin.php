<?php 

	namespace App\Core;
	/**
	* 
	*/
	class control_Admin
	{
		protected $module;
		function __construct()
		{
			$this->checkLoginIsAdmin();
		}
		protected function getUserAdmin()
		{
			$username=$_SESSION['username'] ?? '';
			return $username;
		}
		protected function getIdAdmin()
		{
			$id = $_SESSION['id'] ?? '';
			$id = is_numeric($id) ? $id : 0;
			return $id;
		}
		protected function getEmailAdmin()
		{
			$email = $_SESSION['email'] ?? '';
			return $email;
		}
		protected function checkLoginIsAdmin()
		{
			$id=$this->getIdAdmin();
			$username = $this->getUserAdmin();
			if (empty($username) || $id<=0) {
				header("Location:?c=login");
				die();
			}
		}
		function loadFooterAdmin(){
			require 'app/view/partials/footer_view_admin.php';
		}
		function loadHeaderAdmin(){
			require 'app/view/partials/header_view_admin.php';
		}
		function loadSidebarAdmin(){
			require 'app/view/partials/sidebar_view_admin.php';
		}
		//comics
		function addComic($data){
			require 'app/view/comics/add_comic.php';
		}
		function updateComic($data){
			require 'app/view/comics/update_comic.php';
		}
		function indexComic($data){
			require 'app/view/comics/index_view_comic.php';
		}
		//end comics
		//admin
		function addAdmin($data){
			require 'app/view/admins/add_admin.php';
		}
		function updateAdmin($data){
			require 'app/view/admins/update_admin.php';
		}
		function indexAdmin($data){
			require 'app/view/admins/index_view_admin.php';
		}
		
		//ennd admin
		//admin
		function addChapter($data){
			require 'app/view/chapter/add_chapter.php';
		}
		function updateChapter($data){
			require 'app/view/chapter/update_chapter.php';
		}
		function indexChapter($data){
			require 'app/view/chapter/index_view_chapter.php';
		}
		
		//ennd admin
		function addAuthor($data){
			require 'app/view/author/add_author.php';
		}
		function updateAuthor($data){
			require 'app/view/author/update_author.php';
		}
		function indexAuthor($data){
			require 'app/view/author/index_view_author.php';
		}
  //end author

  //editor
		function addEditor($data){
			require 'app/view/editor/add_editor.php';
		}
		function updateEditor($data){
			require 'app/view/editor/update_editor.php';
		}
		function indexEditor($data){
			require 'app/view/editor/index_view_editor.php';
		}
  //end editor
	}

?>