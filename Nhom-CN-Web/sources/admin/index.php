<?php 
	if(file_exists('app/route/route.php'))
	{
		require 'app/route/route.php';
	}
	else
	{
		echo "Bạn không có quyền truy cập";
	}
 ?>