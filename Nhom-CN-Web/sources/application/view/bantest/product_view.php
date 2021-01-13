<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $header['title']; ?></title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/product.css">
    <link rel="stylesheet" href="public/assets/css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <header>
<!--         <div class="full">
            <div class="container">
                <img src="assets/img/logo.jpg" class="imglogo">
                <button class="btn btn-default search" type="button">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
                <input type="search" class="col-md-4 search">
            </div>
        </div> -->
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
         <nav class="navbar navbar-default navbar1">
          <div class="container">
            <ul class="nav navbar-nav form1">
                <li class="active"><a href="#">TRANG CHỦ</a></li>
                <li><a href="#">THỂ LOẠI</a>
                    <ul class="dropdown-menu form2">
                        <li style=""><a href="#"  class="thea1">TRINH THÁM</a></li>
                        <li class="theli1"><a href="#" class="thea1">KIẾM HIỆP</a></li>
                        <li class="theli1"><a href="#" class="thea1">COMIC</a></li>
                        <li class="theli1"><a href="#" class="thea1">MAGIC</a></li>
                        <li class="theli1"><a href="#" class="thea1">DỊ NĂNG</a></li>
                        <li class="theli1"><a href="#" class="thea1">NGÔN TÌNH</a></li>
                    </ul>
                </li>
                <li><a href="#">TRUYỆN FULL</a>
                </li>
                <li><a href="#">TRUYỆN CON GÁI</a></li>
                <li><a href="#">TRUYỆN CON TRAI</a></li>
                <li><a href="#">XEM NHIỀU</a></li>
            </ul>
        </div>
    </nav>
</div>
</header>
<div class="color">
    <div class="container well-sm list-content">
        <div class="col-md-8 content">
            <div class="detail-manga1 well-sm">
                <div class="truyen-breadcrumb">
                    <ol class="listOl">
                        <li><a href="#" title="Truyện Tranh Online">Truyện Tranh Online</a></li>
                        <i class="glyphicon glyphicon-menu-right"></i>
                        <li><a href="#" title="Truyện Tranh Online"><?php echo $data['dataMangaById']['name_comic']; ?></a></li>
                    </ol>
                </div>
                <div class="detail-manga">
                    <div class="imgava">
                        <img src="public/images/anh2.jpg" alt="anh truyen tranh" id="avartaManga" class="avataManga">
                    </div>
                    <div class="detail-comic">
                        <a href="#"><h1><?php echo $data['dataMangaById']['name_comic']; ?></h1></a>
                        <div class="author">
                            <b>Tác Giả: </b>
                            <a href="#"><?php echo $data['dataMangaById']['name_author']; ?></a> <br />
                        </div>
                        <div class="category">
                            <b>Thể Loại: </b>
                            <?php foreach ($cut as $key => $value): ?>
                                <a href="#" title="" class="btn btn-xs" style="margin-top: -4px;margin-left:-5px; "><?php echo $value .","; ?></a>
                            <?php endforeach ?>  
                        </div>
                        <div class="editor">
                            <b>Người Dịch: </b>
                            <a href="#" title=""><?php echo $data['dataMangaById']['name_editor']; ?></a><br />
                        </div>
                        <div class="view">
                            <b>Lượt Xem: </b>
                            <span><?php echo $data['dataMangaById']['view']; ?></span><br />
                        </div>
                        <div class="status">
                            <b>Tình Trạng: </b>
                            <span>
                                <?php if($data['dataMangaById']['status']==1) 
                                {
                                    echo "Đang Tiến Hành";
                                }
                                elseif($data['dataMangaById']['status']==0)
                                {
                                    echo "Hoàn Thành";
                                }
                                ?>
                            </span><br />
                        </div>
                        <div class="update">
                            <b>Ngày Update: </b>
                            <span><?php echo $data['dataMangaById']['update_time']; ?></span><br />
                        </div>
                        <a rel="nofollow" href="http://truyentranh8.net/otaku-mo/" title="đọc nhanh truyện Otaku Mo Koisuru Nikushoku Shinshi ~ Zetchou" class="btn btn-danger btnread">Đọc liền cho máu!!! <i class="glyphicon glyphicon-fire"></i></a>
                    </div>
                </div>
                <div class="mangaDescription well-sm " id="des" style="background-color: #fff;"><?php echo $data['dataMangaById']['description']; ?></div>
                <a href="#" class="btn btn-primary col-md-4 share">Share lên Facebook</a>
            </div>
            <div class="chapnews">           
                <h4 class="titlechapnew"> 
                    <a href="#">Chương mới nhất &quot;<?php echo $data['dataMangaById']['name_comic'] ?>&quot;. </a>
                </h4>
                <div class="list-chapnew">
                    <?php foreach ($content['topMaga'] as $key => $topManga): ?>
                        <p> <a href="<?php echo "?c=manga&id={$idManga}&chapter={$topManga['chapters_fix']}" ?>" class="selector-a-chapnew"><strong><?php echo $topManga['name_comic']." Chapter ".$topManga['chapters_fix'] ?></strong> </a></p>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-8 list chapter">   
                <h4 class="titlechapnew"> 
                    <a href="#">List chương &quot;<?php echo $data['dataMangaById']['name_comic'] ?>&quot;. </a>
                </h4>
                    <?php foreach ($data['mangas'] as $key => $value): ?>
                        <p> <a href="<?php echo "?c=manga&id={$idManga}&chapter={$value['chapters_fix']}" ?>" class="selector-a-chapnew"><strong><?php echo $value['chapters_fix'].". ". $value['name_comic']." Chapter ".$value['chapters_fix']; ?></strong> </a></p>
                    <?php endforeach ?>

                <nav>
                    <div class="row text-center colorPN">
                        <?php echo $data['panigation'] ?>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-md-4 well-sm sideB">
            <div class="titlesideB"><span class="glyphicon glyphicon-th"> </span>
                <h3 class="text-center pdh3">Truyện mới cập nhập</h>
                </div>
                <div class="list-ct-mâng">
                    <div class="sideB-ctRight">
                       <ul class="ulListstory_right">
                        <li>
                            <div class="divthumb"><a href="/tinh-than-bien/813.html" title="Tinh Thần Biến"><img alt="Tinh Thần Biến" src="http://st.thichtruyentranh.com/images/icon-m/0045/tinh-than-bien1416858956.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/tinh-than-bien/813.html" title="Tinh Thần Biến">Tinh Thần Biến</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/manhua.html" title="Manhua">Manhua</a>, <a href="/shounen.html" title="Shounen">Shounen</a></span> <span>Tác giả: <a href="/tac-gia/thien-tam-tho-dau.html" rel="nofollow" title="Thiên Tằm Thổ Đậu">Thiên Tằm Thổ Đậu</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/ubel-blatt/969.html" title="Ubel Blatt"><img alt="Ubel Blatt" src="http://st.thichtruyentranh.com/images/icon-m/0009/ubel-blatt1416857322.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/ubel-blatt/969.html" title="Ubel Blatt">Ubel Blatt</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/fantasy.html" title="Fantasy">Fantasy</a>, <a href="/seinen.html" title="Seinen">Seinen</a>, <a href="/magic.html" title="Magic">Magic</a></span> <span>Tác giả: <a href="/tac-gia/shiono-etorouji.html" rel="nofollow" title="Shiono Etorouji">Shiono Etorouji</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/nguoi-trong-giang-ho/4887.html" title="Người trong giang hồ"><img alt="Người trong giang hồ" src="http://st.thichtruyentranh.com/images/icon-m/0023/nguoi-trong-giang-ho1420477150.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/nguoi-trong-giang-ho/4887.html" title="Người trong giang hồ">Người trong giang hồ</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/manhua.html" title="Manhua">Manhua</a>, <a href="/martial-arts.html" title="Martial Arts">Martial Arts</a></span> <span>Tác giả: <a href="/tac-gia/nguu-lao.html" rel="nofollow" title="Ngưu Lão">Ngưu Lão</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/ane-naru-mono/7948.html" title="Ane Naru Mono"><img alt="Ane Naru Mono" src="http://st.thichtruyentranh.com/images/icon-m/0012/ane-naru-mono1467558708.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/ane-naru-mono/7948.html" title="Ane Naru Mono">Ane Naru Mono</a> <span>Thể loại: <a href="/ecchi.html" title="Ecchi">Ecchi</a>, <a href="/romance.html" title="Romance">Romance</a>, <a href="/shounen.html" title="Shounen">Shounen</a>, <a href="/slice-of-life.html" title="Slice of Life">Slice of Life</a>, <a href="/supernatural.html" title="Supernatural">Supernatural</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/dau-chien-cuong-trieu/9056.html" title="Đấu Chiến Cuồng Triều"><img alt="Đấu Chiến Cuồng Triều" src="http://st.thichtruyentranh.com/images/icon-m/0032/dau-chien-cuong-trieu1515394116.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/dau-chien-cuong-trieu/9056.html" title="Đấu Chiến Cuồng Triều">Đấu Chiến Cuồng Triều</a> <span>Thể loại: <a href="/adult.html" title="Adult">Adult</a>, <a href="/fantasy.html" title="Fantasy">Fantasy</a>, <a href="/manhua.html" title="Manhua">Manhua</a></span> <span>Tác giả: <a href="/tac-gia/kho-lau-tinh-linh.html" rel="nofollow" title="Khô Lâu Tinh Linh">Khô Lâu Tinh Linh</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/tu-chan-tu-van-nien/8516.html" title="Tu Chân Tứ Vạn Niên"><img alt="Tu Chân Tứ Vạn Niên" src="http://st.thichtruyentranh.com/images/icon-m/0004/tu-chan-tu-van-nien1476437584.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/tu-chan-tu-van-nien/8516.html" title="Tu Chân Tứ Vạn Niên">Tu Chân Tứ Vạn Niên</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/fantasy.html" title="Fantasy">Fantasy</a>, <a href="/manhua.html" title="Manhua">Manhua</a></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
  
  <!--Footer Links-->
  <div class="container ctFooter">
      
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
          
          <!--First column-->
          <div class="col-xs-6 col-sm-4 col-md-4 dvfooter1">
              <h6 class="text-uppercase">Giới Thiệu</h6>
              <p>Truyencv là website đọc truyện convert online cập nhật liên tục và nhanh nhất các truyện tiên hiệp, kiếm hiệp, huyền ảo được các thành viên liên tục đóng góp rất nhiều truyện hay và nổi bật.</p>
          </div>
          <!--/.First column-->
          
          <!--Third column-->
          <div class="col-md-4 col-lg-4 col-xs-6 col-sm-4 dvfooter2">
              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
              <p><a href="#!">Your Account</a></p>
              <p><a href="#!">Become an Affiliate</a></p>
              <p><a href="#!">Shipping Rates</a></p>
              <p><a href="#!">Help</a></p>
          </div>
          <!--/.Third column-->
          <div class="col-md-4 col-lg-4 col-xs-6 col-sm-4 dvfooter3">
              <h6 class="text-uppercase" id="lh">Liên Hệ</h6>
              <p><i class="fa fa-home"></i> 81 Phan Chu Trinh, Yết Kiêu, Hà Đông, Hà Nội</p>
              <p><i class="fa fa-envelope"></i> huyvq52@wru.vn</p>
              <p><i class="fa fa-phone"></i> 01666624463</p>
          </div>
          <!--/.Third column-->
          
      </div>
      <!-- Footer links -->
  </div>
  
</div>     
</footer>
<script src="public/assets/js/jquery.min.js"></script>
<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>