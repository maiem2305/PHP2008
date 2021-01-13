<?php
	namespace App\Controller\Home;
	require 'application/model/fav_model.php';
	require 'application/core/My_Controller.php';
	use Application\Core\My_Controller;
	use App\Model\Fav_model;
    class fav_manga extends MY_Controller
    {
		private $_Model;
		function __construct()
		{
			parent::__construct();
			$this->_Model=new Fav_Model();
		}
	public function add()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id']?? '';
			$id = (is_numeric($id)&& $id>0 )? $id : 0;
			$infoProduct=$this->_Model->getAllDataComicById($id);
			//echo "<pre/>";print_r($infoProduct);die();
			if(!empty($infoProduct))
			{

				
				if(isset($_SESSION['fav']))
				{
	                //ktra xem sp muon mua them da ton tai hay chua 
	                //neu chua ton tai thi them moi
	                if(isset($_SESSION['fav'][$id]['id']) && $_SESSION['fav'][$id]['id']==$id)
	                {
	                	//die("Hello Huy");
                        echo"Yêu gì lắm thế ?";
                       // header("location:?c=fav&m=index");
                       die();			        
				    }
				    else
				    {
					//lan dau ng dung mua sp
					//khoi tao gio hang
	                    $_SESSION['fav'][$id]['id']=$infoProduct['id'];
						$_SESSION['fav'][$id]['name_comic']=$infoProduct['name_comic'];
						$_SESSION['fav'][$id]['images']=$infoProduct['images'];
						$_SESSION['fav'][$id]['name_less']=$infoProduct['name_less'];
						$_SESSION['fav'][$id]['name_author']=$infoProduct['name_author'];
						$_SESSION['fav'][$id]['category']=$infoProduct['category'];
                        $_SESSION['fav'][$id]['description']=$infoProduct['description'];
                        $_SESSION['fav'][$id]['name']=$infoProduct['name'];	
                        echo"Thêm thành công sp đầu tiên :3";die();
				    }
				    
				    //header("location:?c=details&id={$id}");
				}
				else
				{
					$_SESSION['fav'][$id]['id']=$infoProduct['id'];
					$_SESSION['fav'][$id]['name_comic']=$infoProduct['name_comic'];
					$_SESSION['fav'][$id]['images']=$infoProduct['images'];
					$_SESSION['fav'][$id]['name_less']=$infoProduct['name_less'];
					$_SESSION['fav'][$id]['name_author']=$infoProduct['name_author'];
					$_SESSION['fav'][$id]['category']=$infoProduct['category'];
                    $_SESSION['fav'][$id]['description']=$infoProduct['description'];
                    $_SESSION['fav'][$id]['name']=$infoProduct['name'];	
                    //header("location:?c=details&id={$id}");
                    echo"Thêm thành công r` ha.";
				}
				//header("location:?c=details&id={$id}");
			}
			else {
				header("location:?c=home");
			}
		}
		
	}
	public function index()
	{
		$data=[];
		$data['fav']=$_SESSION['fav'] ?? [];
		// echo "<pre>";
		// print_r($data['fav']);
		// die();
		$header=[];
		$header['title']="this is fav";
		$header['content']="this is fav";
		$this->loadHeader($header);
		$this->loadFav($data);
		$this->loadFooter();
 	}
 	public function delete()
 	{
 		if(isset($_SESSION['fav']))
 		{
 			unset($_SESSION['fav']);
 		}
 		else
 		{
 			header('location:?c=fav&m=index');
 		}
 		header('location:?c=home');
 	}
 	public function remove()
 	{

        $id = $_GET['id'] ?? '';
        $id = (is_numeric($id) && $id > 0) ? $id : 0;
        if(isset($_SESSION['fav'][$id]))
        {
            unset($_SESSION['fav'][$id]);
        }
        header('Location:?c=fav&m=index');
    }
}
$m =$_GET['m']??'index';
$home =new fav_manga();
$home->$m();
?>