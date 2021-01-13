<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>huy</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
	<style type="text/css" media="screen">
		.col-md-3{
			border:1px solid red;
			height: 150px;
		}
	</style>
</head>
<body>
	<div class="row">
		<?php for ($i=0;$i<3;$i++): ?>
				<div class="col-md-3"><?php echo "huy"; ?></div>	
		<?php endfor ?>

	</div>
</body>
</html>