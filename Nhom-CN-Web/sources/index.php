<?php 
//Cu phap viet chu thich: - tieng viet khong dau
	if (file_exists('application/router/router.php')) {//kiem tra xem co ton tai file router trong thu muc router chua ?
		require 'application/router/router.php'; //exist -> truy cap vao`.
	}
	else
	{
		echo "Hệ thống đang được nâng cấp"; //khong tim duoc file thi in ra trinh duyet he thong dang duoc nang cap
	}
?>
