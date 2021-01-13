<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $header['title']; ?></title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/home.css">
    <link rel="stylesheet" href="public/assets/css/product.css">
    <link rel="stylesheet" href="public/assets/css/manga.css">
</head>

<body>
    <header>
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
                            <li style=""><a href="#" class="thea1">TRINH THÁM</a></li>
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
        <div class="container contentReadManga">
            <div class="titile-manga">
    <ol class="listOl">
        <li><a href="#" title="Truyện Tranh Online">Truyện Tranh Online</a></li>
        <i class="glyphicon glyphicon-menu-right"></i>
        <li><a href="#" title="Truyện Tranh Online">Xuyên duyệt tây nguyên 3000</a></li>
        <i class="glyphicon glyphicon-menu-right"></i>
        <li><a href="#" title="Truyện Tranh Online">Xuyên duyệt tây nguyên 3000 Chap 1</a></li>
    </ol>
</div>
            <div class="dtl_menu text-center">
    <p><a href="https://truyenqq.com/truyen-tranh/song-dien-danh-vien-3648-chap-53.html" title="Song Diện Danh Viện Chap 53">Chương Trước</a></p>
    <p><a href="https://truyenqq.com/truyen-tranh/song-dien-danh-vien-3648-chap-55.html" title="Song Diện Danh Viện Chap 55">Chương Sau</a></p>
</div>

            <p class="p-manga">xuyên duyệt tây nguyên</p>
            <p class="read-chapter">Chapter 1</p>
            <div class="time-view">
                <div class="createtime-chap text-center">
                    <p>
                        <i class="fa fa-clock-o"></i>14:19 22/01&nbsp;</p>
                </div>
                <div class="view-chap text-center">
                    <p>6196 lượt đọc </p>
                </div>
            </div>
            <div class="content-chapter text-center imgvn">
               <?php foreach ($content["images"] as $key => $img): ?>
                 <a href='#themanga<?php echo $key ?>' id='themanga<?php echo $key ?>' class='changeimages' title=''><img src='<?php echo $img ?>' class='somthing<?php echo $key ?>'></a><br />
              <?php endforeach ?> 
      
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

       
</footer>
<!--/.Footer-->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="public/js/main.js"></script> -->
    <script type="text/javascript">
      $( document ).ready(function() {
         // $(".content-chapter").toggleClass("imgvn");
         $( ".changeimages" ).click(function() {
          $(".content-chapter").toggleClass("imgvn");
          $(".content-chapter").toggleClass("imgen");
          if ($(".imgen").length ) {
           var jqueryarray = <?php echo json_encode($content["images1"]); ?>;
           for (var i = 0; i < jqueryarray.length; i++) {
             $('.somthing'+i).attr("src",jqueryarray[i]);
           }
              //die();   
            }
            else if ($(".imgvn").length) {
              var jqueryarray1 = <?php echo json_encode($content["images"]); ?>;
              for (var i = 0; i < jqueryarray1.length; i++) {
               $('.somthing'+i).attr("src",jqueryarray1[i]);
             }
           }

         });
       });
    </script>
</body>

</html>