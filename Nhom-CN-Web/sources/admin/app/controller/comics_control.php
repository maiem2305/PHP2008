<?php 
	namespace App\Controller;
	require 'app/core/control_admin.php';
	require 'app/model/comics_model.php';
	use App\Model\Comics_Model;
	use App\Core\control_Admin;
	/**
	* 
	*/
	class Product extends control_Admin
	{
		private $cmModel;
		function __construct()
		{
			//parent::__construct();
			$this->cmModel = new Comics_Model();
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

			$books = $this->cmModel->getAllDataMangaKeyword($keyword);
			$data['keyword'] = $keyword;
			//$l=1;
			//$e=8;
			//$e=$l;

			//echo $e;die();
			//bat dau su dung ham phan trang
			$page = (is_numeric($page) && $page >0) ? $page : 1;
			$dataLink =[
				'c' => 'comics',
				'm' => 'index',
				'page'=> '{page}',
				's' => $keyword
			];
			$links = create_link($dataLink);
			// echo "<pre />"; print_r($links);die();
			$panigate = panigation(count($books), $page, 3,$keyword,$links);
			// echo "<pre />"; print_r($panigate);die();
			$data['comics'] = $this->cmModel->getDataMangaByPage($panigate['keyword'],$panigate['start'],$panigate['limit']);
			//echo "<pre />"; print_r($data['books']);die();
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
			if (isset($_GET['id'])) {
				$id = trim($_GET['id']);
				$deleteFollowID= $this->cmModel->delete('comics',$_GET['id']);
				header('Location:?c=comics&state=success');
			}
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->indexComic($data);
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
			$data['author']= $this->cmModel->getAlldataAuthor('author');
			//lay toan bo du lieu tu NXB
			$data['editor']= $this->cmModel->getAlldataEditor('editor');
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->addComic($data);
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
			$data['comics']= $this->cmModel->getDataComicsById('comics',(int)$idManga);
			//echo "<pre/>";print_r($data['comics']);die();
			//lay toan bo du lieu cua tac gia
			$data['author']= $this->cmModel->getAlldataAuthor('author');
			//lay toan bo du lieu tu NXB
			$data['editor']= $this->cmModel->getAlldataEditor('editor');
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->updateComic($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function handleadd()
		{
			if (isset($_POST['btnSubmit'])) {
				/*echo "<pre/>";
				print_r($_POST);*/

				$namecomis = $_POST['namebook'] ?? '';
				$authors  = $_POST['slcAuthor'] ?? '';
				$Editor= $_POST['slcEditor'] ?? '';
				$category = $_POST['slcCategory'] ?? '';
				$detail   = $_POST['desBook'] ?? '';
				$status    = $_POST['slcStatus'] ?? '';
				$filename = null;
				//echo $namecomis."    ".$authors."    ".$Editor."    ".$category."    ".$detail."    ".$status."    ".$filename;print_r($_FILES);die("<br/>");
				if (isset($_FILES['imagebook'])) {
					$filename = myUploadData($_FILES);
				}
				//echo "string";

				$checkAdd = myValidateAddBook($namecomis,$authors,$Editor,$category,$detail,$status);

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
					$dataBook=array(
						'name_comic'	  =>$namecomis,
						'id_author'	  =>$authors,
						'id_editor'=>$Editor,
						'category'	  =>$category,
						'description' =>$detail,
						'status'		  =>$status,
						'images'	  =>$filename,
						'view'		  =>0,
						'create_time' =>date('Y-m-d H:i:s'),
						'update_time' =>null
					);
					
					$add = $this->cmModel->addDataBook($dataBook,'comics');
					if ($add) {
						header('Location:?c=comics&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=comics&m=add&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=comics&m=add&state=err');
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
				//$nameID = is_numeric($nameID);
				//die($nameID);

				$namecomis = $_POST['namebook'] ?? '';
				$authors  = $_POST['slcAuthor'] ?? '';
				$Editor= $_POST['slcEditor'] ?? '';
				$category = $_POST['slcCategory'] ?? '';
				$detail   = $_POST['desBook'] ?? '';
				$status    = $_POST['slcStatus'] ?? '';
				$filename = null;
				//echo $namecomis."    ".$authors."    ".$Editor."    ".$category."    ".$detail."    ".$status."    ".$filename;print_r($_FILES);die("<br/>");
				if (isset($_FILES['imagebook'])) {
					$filename = myUploadData($_FILES);
				}
				//echo "string";
				$checkAdd = myValidateAddBook($namecomis,$authors,$Editor,$category,$detail,$status);
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
					$dataBook=array(
						'name_comic'	  =>$namecomis,
						'id_author'	  =>$authors,
						'id_editor'=>$Editor,
						'category'	  =>$category,
						'description' =>$detail,
						'status'		  =>$status,
						'images'	  =>$filename,
						'view'		  =>0,
						'create_time' =>date('Y-m-d H:i:s'),
						'update_time' =>null
					);
					
					$update = $this->cmModel->updateDataBook($dataBook,'comics',$nameID);
					if ($update){
						header('Location:?c=comics&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=comics&m=update&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=comics&m=update&state=err');
				}
			}
		}
	}
	$product = new Product();
	$method = $_GET['m'] ?? 'index';
	$product ->$method();
?>