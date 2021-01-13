<?php 
	namespace App\Controller;
	require 'app/core/control_admin.php';
	require 'app/model/admin_model.php';
	use App\Model\Admin_model;
	use App\Core\control_Admin;
	/**
	* 
	*/
	class Admin_Control extends control_Admin
	{
		private $cmModel;
		function __construct()
		{
			//parent::__construct();
			$this->cmModel = new Admin_model();
		}
		function __call($r,$q)
		{
			echo "NOT FOUND PAGE";
		}
		public function index()// load dau tjen khi chay vao
		{
			//load data and handle data
						//load data and handle data
			$data = [];
			$keyword = $_GET['s'] ?? '';
			$page = $_GET['page'] ?? '';

			$admin = $this->cmModel->getAllAdminByKeyword($keyword);
			$data['keyword'] = $keyword;
			//$l=1;
			//$e=8;
			//$e=$l;

			//echo "<pre/>";print_r($admin);die();
			//bat dau su dung ham phan trang
			$page = (is_numeric($page) && $page >0) ? $page : 1;
			$dataLink =[
				'c' => 'admin',
				'm' => 'index',
				'page'=> '{page}',
				's' => $keyword
			];
			$links = create_link($dataLink);
			// echo "<pre />"; print_r($links);die();
			$panigate = panigation(count($admin), $page, 3,$keyword,$links);
			// echo "<pre />"; print_r($panigate);die();
			$data['admins'] = $this->cmModel->getAdminByKeyword($panigate['keyword'],$panigate['start'],$panigate['limit']);
			//echo "<pre />"; print_r($data['admin']);die();
			// echo "<pre />";
			// print_r($data['books']);
			// die;
			// echo "<pre />";
			// print_r($panigate);
			// die;
			// echo "<pre />";
			// print_r($data['books']);
			// die;

			$data['panigation'] = $panigate['panigationHtml'];


			$header = [];
			$header['title'] =  "This is Comics";
			$header['content'] = "This is content Comics";
			if (isset($_GET['id'])) {//die($_GET['id']); xem thu id =.=
				$id = trim($_GET['id']);

				$deleteFollowID= $this->cmModel->delete('admins',$_GET['id']);
				header('Location:?c=admin&state=success');
			}
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->indexAdmin($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function add()
		{
			//load data and handle data
			$header = [];
			$header['title'] =  "This is Comics";
			$header['content'] = "This is content Comics";
			
			$data=[];
			if (isset($_GET['state']) && $_GET['state']==='err') {
				$data['errAdd'] = $_SESSION['errAdd'] ?? [];
			}

			//lay toan bo du lieu cua tac gia
			//$data['admins']= $this->cmModel->getDataAdminById('admins',);
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->addAdmin($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function update()
		{
			//load data and handle data
			$header = [];
			$header['title'] =  "This is Comics";
			$header['content'] = "This is content Comics";
			
			$data=[];
			if (isset($_GET['state']) && $_GET['state']==='err') {
				$data['errAdd'] = $_SESSION['errAdd'] ?? [];
			}
			$idManga = $_GET['id'] ?? '';
			//die($idManga);
			//lay all du lieu  comics
			$data['admins']= $this->cmModel->getDataAdminById('admins',(int)$idManga);
			//echo "<pre/>";print_r($data['admins']);die();
			//lay toan bo du lieu cua tac gia
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->updateAdmin($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function handleadd()//HAM XU LY
		{
			if (isset($_POST['btnSubmit'])) {
				/*echo "<pre/>";
				print_r($_POST);*/

				$username = $_POST['UsernameAD'] ?? '';
				$PassWord  = $_POST['PassAD'] ?? '';
				$email  = $_POST['EmailAD'] ?? '';
				$fullName= $_POST['fullNameAD'] ?? '';
				$phone = $_POST['PhoneAD'] ?? '';
				$address   = $_POST['addressAD'] ?? '';
				$status    = $_POST['slcStatusAD'] ?? '';
				$note    = $_POST['noteAD'] ?? '';
				$filename = null;
				//echo $username."    ".$PassWord."    ".$phone."    ".$email."    ".$fullName."    ".$address."    ".$status;print_r($_FILES);die("<br/>");
				if (isset($_FILES['imagebook'])) {
					$filename = myUploadData($_FILES);
				}
				//echo "string";

				$checkAdd = $this->cmModel->myValidateAddAdmin($username,$PassWord,$email,$fullName,$phone,$address,$status,$note);

				$flag= TRUE;
				//flag- ki thuat linh canh co loi or rong thi tra ve false ngay.
				foreach($checkAdd as $key =>$val)
				{
					if (!empty($val)) {
						$flag=FALSE;
						break;
					}
				}
				//die("ádf". $flag);
				if ($flag==TRUE) {
					if (isset($_SESSION['errAdd'])) {
						unset($_SESSION['errAdd']);
					}
					$dataAdmin=array(
						'username'	  =>$username,
						'password'	  =>md5($PassWord),
						'email'=>$email,
						'fullname'	  =>$fullName,
						'phone' =>$phone,
						'address'		  =>$address,
						'status'		  =>$status,
						'note'		  =>$note,
						'avatar'	  =>$filename,
						'create_time' =>date('Y-m-d H:i:s'),
						'update_time' =>null
					);
					
					$add = $this->cmModel->addDataAdmin($dataAdmin,'admins');
					if ($add) {
						header('Location:?c=admin&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=admin&m=add&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=admin&m=add&state=err');
				}
			}
		}
		public function handleupdate()//xu ly chuc nang update
		{
			if (isset($_POST['btnSubmit'])) {
				/*echo "<pre/>";
				print_r($_POST);*/
				$nameID=$_GET['id']??'';
				$nameID = trim($nameID);
				//$nameID = is_numeric($nameID);
				//die($nameID);
				//die($nameID);
				$username = $_POST['UsernameAD'] ?? '';
				$PassWord  = $_POST['PassAD'] ?? '';
				$email  = $_POST['EmailAD'] ?? '';
				$fullName= $_POST['fullNameAD'] ?? '';
				$phone = $_POST['PhoneAD'] ?? '';
				$address   = $_POST['addressAD'] ?? '';
				$status    = $_POST['slcStatusAD'] ?? '';
				$note    = $_POST['noteAD'] ?? '';
				$filename = null;
				//echo $namecomis."    ".$authors."    ".$Editor."    ".$category."    ".$detail."    ".$status."    ".$filename;print_r($_FILES);die("<br/>");
				if (isset($_FILES['imagebook'])) {
					$filename = myUploadData($_FILES);
				}
				//echo "string";

				$checkAdd = $this->cmModel->myValidateAddAdmin($username,$PassWord,$email,$fullName,$phone,$address,$status,$note);

				$flag= TRUE;
				//flag- ki thuat linh canh co loi or rong thi tra ve false ngay.
				foreach($checkAdd as $key =>$val)
				{
					if (!empty($val)) {
						$flag=FALSE;
						break;
					}
				}
				//die("ádf". $flag);
				if ($flag==TRUE) {
					if (isset($_SESSION['errAdd'])) {
						unset($_SESSION['errAdd']);
					}
					$dataAdmin=array(
						'username'	  =>$username,
						'password'	  =>md5($PassWord),
						'email'			=>		$email,
						'fullname'	  =>$fullName,
						'phone' 		=>		$phone,
						'address'		  =>$address,
						'status'		  =>$status,
						'note'		  =>$note,
						'avatar'	  =>$filename,
						'update_time' =>date('Y-m-d H:i:s')
					);
					
					$update = $this->cmModel->updateDataAdmin($dataAdmin,'admins',$nameID);
					if ($update) {
						header('Location:?c=admin&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=admin&m=update&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=admin&m=update&state=err');
				}
			}
		}
	}
	$product = new Admin_Control();
	$method = $_GET['m'] ?? 'index';
	$product ->$method();
?>