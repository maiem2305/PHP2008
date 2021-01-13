<?php 
	session_start();
	require 'app/config/constant.php';
	require 'app/helper/common_helper.php';
	class Route
	{
		public function login()
		{
			// echo "string";die();
			require 'app/controller/login.php';
		}
		function __call($r,$q)
		{
			echo "NOT FOUND PAGE";
		}
		public function dashboard()
		{
			require 'app/controller/dashboard.php';
		}
		public function comics()
		{
			require 'app/controller/comics_control.php';
		}
		public function details()
		{
			require 'app/controller/details.php';
		}
		public function admin()
		{
			require 'app/controller/admin_control.php';
		}
		public function author()
		{
			require 'app/controller/author_control.php';
		}
		public function editor()
		{
			require 'app/controller/editor_control.php';
		}
		public function Chapter()
		{
			require 'app/controller/chapter_control.php';
		}
	}
	$route = new Route();
	$controller = $_GET['c'] ?? 'login';
	$route->$controller();
?>