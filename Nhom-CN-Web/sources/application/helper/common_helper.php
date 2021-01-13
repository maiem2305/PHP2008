<?php 
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
	function panigation($totalRecord, $currentPage, $rowLimit, $keyword='',$links)
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
	        // echo str_replace('{page}', ($currentPage-1), $links);die();
	    }
		//het xu ly cho preview page
	    // echo $totalPage;die();
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