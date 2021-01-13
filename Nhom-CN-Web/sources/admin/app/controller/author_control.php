<?php 
	namespace App\Controller;
	require 'app/model/author_model.php';
	require 'app/core/control_admin.php';
	use App\Model\Author_model;
	use App\Core\control_Admin;

	class Author_Control extends control_Admin
	{
		private $Model;
		function __construct()
		{
			//parent::__construct();
			$this->Model = new Author_model();
		}
		function __call($r,$q)
		{
			echo "NOT FOUND PAGE";
		}
		public function index()
		{
			//load data and handle data
			//load data and handle data
			$data = [];
			$keyword = $_GET['s'] ?? '';
			$page = $_GET['page'] ?? '';

			$author = $this->Model->getAllAuthorByKeyword($keyword);
			$data['keyword'] = $keyword;
			$page = (is_numeric($page) && $page >0) ? $page : 1;
			$dataLink =[
				'c' => 'author',
				'm' => 'index',
				'page'=> '{page}',
				's' => $keyword
			];
			$links = create_link($dataLink);
			$panigate = panigation(count($author), $page, 3,$keyword,$links);
			$data['author'] = $this->Model->getAuthorByKeyword($panigate['keyword'],$panigate['start'],$panigate['limit']);
			$data['panigation'] = $panigate['panigationHtml'];
			$header = [];
			$header['title'] =  "This is author";
			$header['content'] = "This is content author";
			if (isset($_GET['id'])) 
			{
				$id = trim($_GET['id']);
				$deleteFollowID= $this->Model->delete('author',$_GET['id']);
				header('Location:?c=author&state=success');
			}
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->indexAuthor($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function add()
		{
			//load data and handle data
			$header = [];
			$header['title'] =  "This is author";
			$header['content'] = "This is content author";
			
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
			$this->addAuthor($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function update()
		{
			//load data and handle data
			$header = [];
			$header['title'] =  "This is author";
			$header['content'] = "This is content author";
			
			$data=[];
			if (isset($_GET['state']) && $_GET['state']==='err') {
				$data['errAdd'] = $_SESSION['errAdd'] ?? [];
			}
			$idManga = $_GET['id'] ?? '';
			//die($idManga);
			//lay all du lieu  comics
			$data['author']= $this->Model->getDataAuthorById('author',(int)$idManga);
			//echo "<pre/>";print_r($data['admins']);die();
			//lay toan bo du lieu cua tac gia
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->updateAuthor($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function handleadd()
		{
			if (isset($_POST['btnSubmit'])) {
				/*echo "<pre/>";
				print_r($_POST);*/

				$nameauthor = $_POST['name_author'] ?? '';

				$checkAdd = $this->Model->myValidateAddAuthor($nameauthor);

				$flag= TRUE;
				foreach($checkAdd as $key =>$val)
				{
					if (!empty($val)) {
						$flag=FALSE;
						break;
					}
				}
				if ($flag==TRUE) {
					if (isset($_SESSION['errAdd'])) {
						unset($_SESSION['errAdd']);
					}
					$dataAdmin=array(
						'name_author'	  =>$nameauthor,
					);
					
					$add = $this->Model->addDataAuthor($dataAdmin,'author');
					if ($add) {
						header('Location:?c=author&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=author&m=add&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=author&m=add&state=err');
				}
			}
		}
		public function handleupdate()
		{
			if (isset($_POST['btnSubmit'])) {
				/*echo "<pre/>";
				print_r($_POST);*/
				$nameID=$_GET['id']??'';
				$nameID = trim($nameID);
				$username = $_POST['name_author'] ?? '';

				$checkAdd = $this->Model->myValidateAddAuthor($username);

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
					$dataAuthors=array(
						'name_author'	  =>$username,

					);
					
					$update = $this->Model->updateDataAuthor($dataAuthors,'author',$nameID);
					if ($update) {
						header('Location:?c=author&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=author&m=update&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=author&m=update&state=err');
				}
			}
		}
	}
	$product = new Author_Control();
	$method = $_GET['m'] ?? 'index';
	$product ->$method();
?>