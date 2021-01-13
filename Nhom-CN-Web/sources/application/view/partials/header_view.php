<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="public/css/slider.css">
    <link rel="stylesheet" href="public/css/normalize.min.css">
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/home.css">
    <link rel="stylesheet" href="public/assets/css/product.css">
    <link rel="stylesheet" href="public/assets/css/manga.css">
  <!--   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Bitter" rel="stylesheet" type="text/css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script> -->
      <link href="public/css/font.css" rel="stylesheet" type="text/css">
    <script src='public/js/jquery.min.js'></script>
    <script src='public/js/bootstrap.min.js'></script>
</head>

<body>
    <header>
        <div class="header">
            <div class="container">
                <a href="?c=home" title="Home Page"><img id="img1" src="public/images/logo.jpg" alt="Logo"></a>
               <!--  <form class="example" action="" name="action" method="GET"> -->
                <div class="form4">
                    <button type="button" id="eltagA"><a href="?c=fav&m=index"  title=""><i class="glyphicon glyphicon-heart"><sub><?php echo $countCart; ?></sub></i></a></button>
                    <button id="btn1" type="submit"><i class="fa fa-search"></i></button>
                    <input  type="text" id="input1" placeholder="Search..." name="search">
                    
                </div>
               <!--  </form> -->
            </div>
        </div>
        <div class="list">
           <nav class="navbar navbar-default navbar1">
              <div class="container">
                <ul class="nav navbar-nav form1">
                    <li class="active"><a href="?c=home">TRANG CHỦ</a></li>
                    <li><a href="#">THỂ LOẠI</a>
                        <ul class="dropdown-menu form2">
                            <li style=""><a href="?c=action&m=category&cat=action" class="thea1">ACTION</a></li>
                            <li class="theli1"><a href="?c=action&m=category&cat=anime" class="thea1">ANIME</a></li>
                            <li class="theli1"><a href="?c=action&m=category&cat=comedy" class="thea1">COMEDY</a></li>
                            <li class="theli1"><a href="?c=action&m=category&cat=manga" class="thea1">MANGA</a></li>
                            <li class="theli1"><a href="?c=action&m=category&cat=Fantasy" class="thea1">Fantasy</a></li>
                            <li class="theli1"><a href="?c=action&m=category&cat=Mystery" class="thea1">Mystery</a></li>
                        </ul>
                    </li>
                    <li><a href="?c=action&m=handle&gender=mangaFull">TRUYỆN FULL</a>
                    </li>
                    <li><a href="?c=action&m=handle&gender=Nu">TRUYỆN CON GÁI</a></li>
                    <li><a href="?c=action&m=handle&gender=Nam">TRUYỆN CON TRAI</a></li>
                    <li><a href="?c=action&m=handle&gender=views">XEM NHIỀU</a></li>
                </ul>
              </div>
            </nav>
        </div>
    </header>