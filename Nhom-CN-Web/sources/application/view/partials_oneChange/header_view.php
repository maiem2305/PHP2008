<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $header['title']; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/detail.css">
	<style type="text/css" media="screen">
		.form-control .form1{
			display: none;
			position: absolute;
		}
		.form-control li:hover .form1{
			display: block;
			z-index: 100;
		}
		.form-control li:hover .form1 .thea1{
			color:#666;
			font-weight: bold;
			width: 100%;
			height: 100%;
		}
		.form1{
			background-color: #fff;
			margin-top:10px; 
		}
		.form1 li{
			width: 150px;
			border: none;
		}
		.form1 li:first-child{
			margin-top: 10px;
		}
		.form1 li:last-child{
			margin-bottom: 10px;
		}

		.form1 li:hover{
			width: 150px;
			border: none;
		}
		.form1 li:hover{
			background-color:#ebebeb;

			border-radius: 12px;
		}
		.thea1{
			color:#666;
		}
		.ulslide{
			margin-bottom:20px;
		}
	</style>
</head>
<body>
	<header id="header" class="">
			<div class="header">
				<div class="container">
					<img id="img1" src="public/images/logo.jpg" alt="Logo">
					<form class="example" action="action_page.php">
						<input type="text" id="input1" placeholder="Search..." name="search">
						<button id="btn1" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
			<div class="list">

				<div class="container">
					<ul class="form-control">
						<li><a href="#">TRANG CHỦ</a></li>
						<li><a href="#">THỂ LOẠI</a>
							<ul class="form1">
								<li style="border:none;"><a href="#"  class="thea1">TRINH THÁM</a></li>
								<li><a href="#" class="thea1">KIẾM HIỆP</a></li>
								<li><a href="#" class="thea1">COMIC</a></li>
								<li><a href="#" class="thea1">MAGIC</a></li>
								<li><a href="#" class="thea1">DỊ NĂNG</a></li>
								<li><a href="#" class="thea1">NGÔN TÌNH</a></li>
							</ul>
						</li>
						<li><a href="#">TRUYỆN FULL</a>
						</li>
						<li><a href="#">TRUYỆN CON GÁI</a></li>
						<li><a href="#">TRUYỆN CON TRAI</a></li>
						<li><a href="#">XEM NHIỀU</a></li>
					</ul>
				</div>
		</div>
	</header><!-- /header -->