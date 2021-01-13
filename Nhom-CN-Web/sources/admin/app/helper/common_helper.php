<?php 
	function myUploadData($file = null)
	{
		//echo "<pre />";print_r($file);die;
		//btvn xu ly chi upload file anh.
		if ($file['imagebook']['error']==0) {
			$filename = $file['imagebook']['name'];
			$tmpName  = $file['imagebook']['tmp_name'];
			if ($tmpName !== '') {
				//die("common_helper");
				if (move_uploaded_file($tmpName,PATH_UPLOAD_ADMIN_IMG.$filename)) {
					return $filename;
				}
			}
		}
		return;
	}

	function myValidateAddBook($namecomic,$author,$editor,$cat,$detail,$status)
	{
		$error 			   = [];
		$error['namecomic'] = (!empty($namecomic) ? '' :'Enter name Comic');
		$error['author']   = (is_numeric($author) && $author>0) ? '':'Enter name Author';
		$error['editor']= (is_numeric($editor) && $editor>0) ? '':'Enter name Editor';
		$error['cat']      = (!empty($cat)) ? '':'Enter name Categories';
		$error['detail']   = (!empty($detail)) ? '':'Enter detail Comic';
		$error['status']    = (is_numeric($status)) ? '':'Enter Status Comic';
		//$error['fileName'] = ($fileName=='') ? "Enter Images" : '';
		//echo "<pre/>";print_r($error);die();
		return $error;
	}
	//can xay dung 1 ham bo tro phan trang
	function create_link($data)
	{
		$stringUri = '';
		$uri= '';
		foreach($data as $key => $val)
		{
			$uri .= "&{$key}={$val}";
		}
		// $stringUri = BASE_URL . "?" . (!empty($uri) ? ltrim($uri,"&"): '');
		$stringUri = "?" . (!empty($uri) ? ltrim($uri,"&"): '');
		// echo "<pre />";print_r($stringUri);die();
			return $stringUri;
	}
	function panigation($totalRecord, $currentPage, $rowLimit, $keyword,$links)
	{
		//di xac dinh lai currentPage
		//can tinh dc totalPage
		$totalPage = ceil($totalRecord/$rowLimit);
		//echo $totalPage;die();
		if ($currentPage <= 0) {
			$currentPage =1;
		}elseif($currentPage > $totalPage)
		{
			$currentPage = $totalPage;
		}

		$start = ($currentPage -1) * $rowLimit;

		//tao template bootstrap phan trang.
		$html = '';
		$html .= "<nav aria-label='Page navigation'>";
		$html .= "<ul class='pagination'>";
		$html .= "";
		//xu ly cho nut preview pageWWx`
		if($currentPage > 1 && $currentPage <= $totalPage)
	    {
	        $html .= "<li><a href='".str_replace('{page}', ($currentPage-1), $links)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	    }
		//het xu ly cho preview page

		//xu ly cho cac trang con lai
		 for($i=1;$i<=$totalPage;$i++)
		  {
		    //kiem tra xem ng dung dang dung o trang hien tai hay ko neu dung active hieu ung cho ng dung bt
		    if($i==$currentPage)
		    {
		       $html .= "<li class='active'><a>".$currentPage."<span class='sr-only'></span></a></li>";
		    }
		    else
		    {
		      $html .= "<li><a href='".str_replace('{page}', $i, $links)."'>".$i."</a></li>";
		    }
		 }
		//het xu ly cho cac trang con lai
		//xu ly cho nut nextpage
		 if($currentPage < $totalPage && $currentPage >= 1){
       		 $html .= "<li><a href='".str_replace('{page}', ($currentPage+1), $links)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
   		 }
		//het xu ly cho nut next page 

		$html .= "</ul>";
	    $html .= "</nav>";
	    return array(
	        'page' => $currentPage,
	        'start' => $start,
	        'limit' => $rowLimit,
	        'panigationHtml' => $html,
	        'keyword' => $keyword
	    );

	}
?>