<?php 
	namespace App\Controller;
	require 'app/core/control_admin.php';
	use App\Core\control_Admin;
	class Dashboard extends control_Admin
	{
		function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			// $id = $_SESSION['id'] ?? '';
			// $user = $_SESSION['username'] ?? '';
			// $email = $_SESSION['email'] ?? '';
			// $role = $_SESSION['role'] ?? '';
			// echo $id."<br />".$user."<br />".$email."<br />".$role;
			$data = [];
			//load header
			$header = [];
			$header['title']   ='This is dashboard';
			$header['content'] ="This is content dashboard";
			$this->loadSidebarAdmin();
			$this->loadHeaderAdmin();
			// load side bar
			// //load content view
			// $this->loadView('app/view/dashboard/index_view.php',$data); 
			// //load footer
			 $this->loadFooterAdmin();
			// require 'app/view/dashboard/dashboard.php';
		}
	}
	$dashboard = new Dashboard();
	$method= $_GET['m'] ?? 'index';
	$dashboard->$method();
?>