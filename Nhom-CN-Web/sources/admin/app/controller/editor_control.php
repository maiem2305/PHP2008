<?php 
	namespace App\Controller;
	require 'app/model/editor_model.php';
	require 'app/core/control_admin.php';
	use App\Model\Editor_model;
	use App\Core\control_Admin;

	class Editor_Control extends control_Admin
	{
		private $Model;
		function __construct()
		{
			//parent::__construct();
			$this->Model = new Editor_model();
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

			$editor = $this->Model->getAllEditorByKeyword($keyword);
			$data['keyword'] = $keyword;
			$page = (is_numeric($page) && $page >0) ? $page : 1;
			$dataLink =[
				'c' => 'editor',
				'm' => 'index',
				'page'=> '{page}',
				's' => $keyword
			];
			$links = create_link($dataLink);
			$panigate = panigation(count($editor), $page, 3,$keyword,$links);
			$data['editor'] = $this->Model->getEditorByKeyword($panigate['keyword'],$panigate['start'],$panigate['limit']);
			$data['panigation'] = $panigate['panigationHtml'];
			$header = [];
			$header['title'] =  "This is editor";
			$header['content'] = "This is content editor";
			if (isset($_GET['id'])) 
			{
				$id = trim($_GET['id']);
				$deleteFollowID= $this->Model->delete('editor',$_GET['id']);
				header('Location:?c=editor&state=success');
			}
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->indexEditor($data);
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

			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->addEditor($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function update()
		{
			//load data and handle data
			$header = [];
			$header['title'] =  "This is editor";
			$header['content'] = "This is content editor";
			
			$data=[];
			if (isset($_GET['state']) && $_GET['state']==='err') {
				$data['errAdd'] = $_SESSION['errAdd'] ?? [];
			}
			$id= $_GET['id'] ?? '';
			$data['editor']= $this->Model->getDataEditorById('editor',(int)$id);
			//lay toan bo du lieu cua tac gia
			//load sidebar
			$this->loadSidebarAdmin();
			//loadheader
			$this->loadHeaderAdmin();
			//load content view
			$this->updateEditor($data);
			//load footer
			$this->loadFooterAdmin();
		}
		public function handleadd()
		{
			if (isset($_POST['btnSubmit'])) {
				/*echo "<pre/>";
				print_r($_POST);*/

				$name = $_POST['name'] ?? '';
                $phone = $_POST['phone'] ?? '';
                $address = $_POST['address'] ?? '';
                $note = $_POST['note'] ?? '';
                $filename = null;
				if (isset($_FILES['Avatar'])) {
					$filename = myUploadData($_FILES);
				}
				$checkAdd = $this->Model->myValidateAddEditor($name,$phone,$address,$note);

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
					$dataEditor=array(
						'name'	  =>$name,
						'phone'	  =>$phone,
						'address' =>$address,
						'note'	  =>$note,
					);
					
					$add = $this->Model->addDataEditor($dataEditor,'editor');
					if ($add) {
						header('Location:?c=editor&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=editor&m=add&state=fail');
					}
				}
				else
				{
					$_SESSION['errAdd'] = $checkAdd; 
					header('Location:?c=editor&m=add&state=err');
				}
			}
		}
		public function handleupdate()
		{
			if (isset($_POST['btnSubmit'])) {
				$nameID=$_GET['id']??'';
				$nameID = trim($nameID);                
				$name = $_POST['name'] ?? '';
                $phone = $_POST['phone'] ?? '';
                $address = $_POST['address'] ?? '';
                $note = $_POST['note'] ?? '';
                $filename = null;
                if (isset($_FILES['Avartar'])) {
					$filename = myUploadData($_FILES);
				}
				$checkAdd = $this->Model->myValidateAddEditor($name,$phone,$address,$note);

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
					$dataEditor=array(
						'name'	  =>$name,
						'phone'=>$phone,
						'address'=>$address,
						'note'=>$note,


					);
					
					$update = $this->Model->updateDataEditor($dataEditor,'editor',$nameID);
					if ($update) {
						header('Location:?c=editor&state=success');
					}
					else
					{
						$_SESSION['errAdd'] = $checkAdd;
						header('Location:?c=editor&m=update&state=fail');
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
	$product = new Editor_Control();
	$method = $_GET['m'] ?? 'index';
	$product ->$method();
?>