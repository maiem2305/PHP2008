<?php 
	namespace App\Controller;
	require 'app/model/login_comic_model.php';
	use App\Model\Login_comic_model;
	class Login
	{
		private $loginComicModel;
		function __construct()
		{
			$this->loginComicModel = new Login_comic_model();
		}
		public function index()
		{
			require 'app/view/login/index_view.php';
		}
		function __call($r,$q)
		{
			echo "NOT FOUND PAGE";
		}
		public function LogOut()
		{
			//die("Hello");
			if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email']) ){
				unset($_SESSION['id']);
				unset($_SESSION['username']);
				unset($_SESSION['email']);
				//unset($_SESSION['role']);
			}
			//print_r($_SESSION);die();
			header("Location:?c=login");
		}
		public function handle()
		{
			if (isset($_POST['btnSubmit'])) 
			{
				//echo "<pre>";
				//print_r($_POST);
				$username = $_POST['user'] ?? '';
				$username = strip_tags($username);
				$username = strtolower($username);

				$password = $_POST['pass'] ?? '';
				$password = strip_tags($password);
				$password = strtolower($password);
				// echo $username.$password;
				// die;
				if (empty($username) or empty($password)) {
					header('Location:?c=login&m=index&state=err');
				}
				else
				{
					//kiem tra xem tai khoan co ton tai trong database khong ? 
					$checkLogin = $this->loginComicModel->checkLoginAdmin($username,md5($password));
					// echo "<pre />";
					// print_r($checkLogin);
					// die;

					if(!empty($checkLogin) && isset($checkLogin['id']))
					{
						//dang nhap thanh cong di vao trang Dashboard
						$_SESSION['id'] = $checkLogin['id'];
						$_SESSION['username'] = $checkLogin['username'];

						$_SESSION['email'] = $checkLogin['email'];
						//$_SESSION['role'] = $checkLogin['role'];
						//print_r($_SESSION);die();
						header("Location:?c=dashboard");
					}
					else
					{
						header('Location:?c=login&m=index&state=fail');
					}
				}
			}

		}
	}
	$login = new login();
	$method = $_GET['m'] ?? 'index';
	$login->$method();

?>