<?php 
	namespace App\Controler;//khai bao namespace
	require 'application/model/action_model.php';
	require 'application/core/My_Controller.php';
	use Application\Core\My_Controller;//use MY_controller co vai tro de viet cac ham goi toi view hien thi ra man hinh.
	use App\Model\Action_Model;//use model
	class Action_Control extends My_Controller
	{
		private $_actionModel;//tao bien tai su dung
		function __construct()
		{
			parent::__construct();
			$this->_actionModel = new Action_Model();//khoi tao class
		}
		function action(){
			$header['title']="Find Page";//tao title cho header
			$data=[];//tao bien data cho` de push du lieu vao trong
			$sidebar['getUpdate'] = $this->_actionModel->getDataByUpdate_time();//lay du lieu theo thoi gian moi nhat
			$keyword = $_GET['search'] ?? '';//GET keyword
			$keyword = trim($keyword);
			$data['keyword'] = $keyword;

			$page = $_GET['page'] ?? '';
			$page = (is_numeric($page) && $page >0) ? $page : 1;//kiem tra chuoi la so hay ko ??

			$dataLink =[
				'c' => 'action',
				'm' => 'action',
				'page'=> '{page}',
				'search' => $keyword
			];//tao $datalink 
			$links = $this->_actionModel->create_link_manga($dataLink);//tao link manga
			//die($links);

			$manga=$this->_actionModel->getAllDataMangaByKeyword($keyword);//lay du lieu theo $keyword dc get tu trinh duyet

			$panigate = panigation(count($manga), $page, 4,$keyword,$links);//goi den ham panigate da tao san

			$data['mangas'] = $this->_actionModel->getDataMangaByPage($panigate['keyword'],$panigate['start'],$panigate['limit']);
			//$data['getdata'] = $this->_actionModel->getMaxChapter();//somthing happend :D
			//echo"<pre/>";print_r($data['getdata']);die(); //viet ra de test du lieu chay dc hay chua thoi
			$data['panigation'] = $panigate['panigationHtml'];//goi toi KEY of panigation
			$this->loadHeader($header);// goi toi ham nay` thoi !!!
			$this->loadActionPage($data);// goi toi ham nay` thoi !!!
			$this->loadSidebarPage($sidebar);// goi toi ham nay` thoi !!!
			$this->loadFooter();// goi toi ham nay` thoi !!!
		}


		function category(){//build function category muc dich de tim kiem theo category

			$header['title']="Find Page";//title
			$data=[];//dataa
			$sidebar['getUpdate'] = $this->_actionModel->getAllDataByUpdate_time();
			$keyword = $_GET['cat'] ?? '';//get key
			$keyword = trim($keyword);//cat bo khaong trong 2 dau
			$data['keyword'] = $keyword;// key-> value

			$page = $_GET['page'] ?? '';//tim $_page
			$page = (is_numeric($page) && $page >0) ? $page : 1;//kiem tra xem co phai so khong
			//Chu thich lau qa =.=
			
			$dataLink =[
				'c' => 'action',
				'm' => 'category',
				'page'=> '{page}',
				'cat' => $keyword
			];//giong o tren r`
			$links = $this->_actionModel->create_link_manga($dataLink);//tao links
			//die($links);//die ra coi thu DL thoi 

			$manga=$this->_actionModel->getAllDataMangaByKeywordCategory($keyword);//cai ten noi len tat ca

			$panigate = panigation(count($manga), $page, 4,$keyword,$links);//panigate la phan trang r`
			$data['mangas'] = $this->_actionModel->getDataMangaByCategory($panigate['keyword'],$panigate['start'],$panigate['limit']);//lay manga theo category con gif
			//echo"<pre/>";print_r($data['mangas']);die();//die ra coi DL thoi xoa di lay j coi du lieu ?? !
			$data['panigation'] = $panigate['panigationHtml']; //nhu o tren r` chu thich j` nua.
			$this->loadHeader($header); //nhu o tren r` chu thich j` nua.
			$this->loadActionPage($data); //nhu o tren r` chu thich j` nua.
			$this->loadSidebarPage($sidebar); //nhu o tren r` chu thich j` nua.
			$this->loadFooter(); //nhu o tren r` chu thich j` nua.
		}


		function authors(){//tim theo authors

			$header['title']="Find Page";//tao titie
			$data=[];//tao data rong
			$sidebar['getUpdate'] = $this->_actionModel->getDataByUpdate_time();//things like above
			$keyword = $_GET['author'] ?? ''; // lay author o tren trinh duyen vi toi da gan du lieu o moi duong link the de tim r
			$keyword = trim($keyword);//things like above
			$data['keyword'] = $keyword;//things like above

			$page = $_GET['page'] ?? '';
			$page = (is_numeric($page) && $page >0) ? $page : 1;//things like above
			//die($page);
			$dataLink =[
				'c' => 'action',
				'm' => 'authors',
				'page'=> '{page}',
				'author' => $keyword
			];//things like above
			$links = $this->_actionModel->create_link_manga($dataLink);//things like above
			//die($links);

			$manga=$this->_actionModel->getAllDataMangaByKeywordAuthor($keyword);//things like above

			$panigate = panigation(count($manga), $page, 4,$keyword,$links);//things like above
			$data['mangas'] = $this->_actionModel->getDataMangaByAuthor($panigate['keyword'],$panigate['start'],$panigate['limit']);//things like above
			//$data['getdata'] = $this->_actionModel->getMaxChapter();
			//echo"<pre/>";print_r($data['mangas']);die();
			$data['panigation'] = $panigate['panigationHtml'];
			$this->loadHeader($header);
			$this->loadActionPage($data);
			$this->loadSidebarPage($sidebar);
			$this->loadFooter();
		}
		function handle(){

			$header['title']="Find Page";
			$data=[];
			$sidebar['getUpdate'] = $this->_actionModel->getAllDataByUpdate_time();
			$keyword = $_GET['gender'] ?? '';
			$keyword = trim($keyword);
			$data['gioitinh'] = $keyword;
			//die($keyword);
			$page = $_GET['page'] ?? '';
			$page = (is_numeric($page) && $page >0) ? $page : 1;
			//die($page);
			$dataLink =[
				'c' => 'action',
				'm' => 'handle',
				'page'=> '{page}',
				'gender' => $keyword
			];
			$links = $this->_actionModel->create_link_manga($dataLink);
			//die($links);
			if ($keyword=="Nu") {//create for header - nav
			$manga=$this->_actionModel->getAllDataMangaByWoman();//cu tao ra may ham` liu` tiu` de get DL tra ve thoi

			$panigate = panigation(count($manga), $page, 4,$keyword,$links);
			$data['mangas'] = $this->_actionModel->getDataMangaByWoman($panigate['start'],$panigate['limit']);//ham nay de panigate du lieu thoi ^^!
			//$data['getdata'] = $this->_actionModel->getMaxChapter();
			//echo"<pre/>";print_r($data['mangas']);die();
			$data['panigation'] = $panigate['panigationHtml'];
			}
			elseif($keyword=="Nam"){//create for header - nav
				$manga=$this->_actionModel->getAllDataMangaByMan();//cu tao ra may ham` liu` tiu` de get DL tra ve thoi

				$panigate = panigation(count($manga), $page, 4,$keyword,$links);
				$data['mangas'] = $this->_actionModel->getDataMangaByMan($panigate['start'],$panigate['limit']);//ham nay de panigate du lieu thoi ^^!
				//$data['getdata'] = $this->_actionModel->getMaxChapter();
				//echo"<pre/>";print_r($data['mangas']);die();
				$data['panigation'] = $panigate['panigationHtml'];
			}
			elseif($keyword=="views"){//create for header - nav
				$manga=$this->_actionModel->getAllTopManga();//cu tao ra may ham` liu` tiu` de get DL tra ve thoi

				$panigate = panigation(count($manga), $page, 4,$keyword,$links);
				$data['mangas'] = $this->_actionModel->getTopManga($panigate['start'],$panigate['limit']);//ham nay de panigate du lieu thoi ^^!
				//$data['getdata'] = $this->_actionModel->getMaxChapter();
				//echo"<pre/>";print_r($data['mangas']);die();
				$data['panigation'] = $panigate['panigationHtml'];
			}
			elseif($keyword=="mangaFull"){//create for header - nav
				$manga=$this->_actionModel->getAllMangaFinish();//cu tao ra may ham` liu` tiu` de get DL tra ve thoi

				$panigate = panigation(count($manga), $page, 4,$keyword,$links);
				$data['mangas'] = $this->_actionModel->getMangaFinish($panigate['start'],$panigate['limit']);//ham nay de panigate du lieu thoi ^^!
				//$data['getdata'] = $this->_actionModel->getMaxChapter();
				//echo"<pre/>";print_r($data['mangas']);die();
				$data['panigation'] = $panigate['panigationHtml'];
			}
			$this->loadHeader($header);
			$this->loadActionPage($data);
			$this->loadSidebarPage($sidebar);
			$this->loadFooter();
		}

	}
	$m = isset($_GET['m'])? $_GET['m'] : "action";//get dl thoi
	$action = new Action_Control();
	//echo $m;die();
	$action->$m();

?>