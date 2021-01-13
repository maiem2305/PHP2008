<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/product.css">
    <link rel="stylesheet" href="public/assets/css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="container">
                <img id="img1" src="uploads/images/logo.jpg" alt="Logo">
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
        <div class="slideshow container">
            <div class="area">
              <h2 class="thea">
                  <img src="public/images/iconbook.png" alt=""><a href="#" class="ainarea">TRUYỆN KIẾM HIỆP</a></h2>
              <div class="clear"></div>
              <ul class="ulslide nav navbar-nav">
                  <?php foreach ($content['topComic'] as $key => $topBooks): ?>
                  <li>
                      <div class="divimgslide">
                          <a class="aimg_slide" href="?c=details&id=<?php echo $topBooks['id']; ?>" title="<?php echo $topBooks['name_comic']; ?>">
                          <img alt="<?php echo($topBooks['name_comic']); ?>" src="<?php echo IMG_PATH_UPLOAD . $topBooks['images'];  ?>" /></a> 
                          <a class="atext" href="/xuyen-duyet-tay-nguyen-3000/5336.html" title="<?php echo $topBooks['name_comic']; ?>"><?php echo $topBooks['name_comic']; ?></a>
                      </div>
                  </li>                    
                  <?php endforeach ?>
  <!--                 <li>
                      <div class="divimgslide">
                          <a class="aimg_slide" href="/hiep-khach-giang-ho/4875.html" title="Hiệp Khách Giang Hồ">
                          <img alt="Hiệp Khách Giang Hồ" src="http://st.thichtruyentranh.com/images/icon/0011/hiep-khach-giang-ho1419099919.jpg" />
                          </a> 
                          <a class="atext" href="/hiep-khach-giang-ho/4875.html" title="Hiệp Khách Giang Hồ">Hiệp Khách Giang Hồ</a>
                      </div>
                  </li>
  -->
                      </ul>
        </div>
              <div class="area">
                <h2 class="thea">
                    <img src="public/images/iconbook.png" alt=""><a href="#" class="ainarea">TRUYỆN KIẾM HIỆP</a></h2>
                <div class="clear"></div>
                <ul class="ulslide">
                    <li>
                        <div class="divimgslide">
                            <a class="aimg_slide" href="/xuyen-duyet-tay-nguyen-3000/5336.html" title="Xuyên Duyệt Tây Nguyên 3000">
                            <img alt="Xuyên Duyệt Tây Nguyên 3000" src="http://st.thichtruyentranh.com/images/icon/0024/xuyen-duyet-tay-nguyen-30001423645063.jpg" /></a> 
                            <a class="atext" href="/xuyen-duyet-tay-nguyen-3000/5336.html" title="Xuyên Duyệt Tây Nguyên 3000">Xuyên Duyệt Tây Nguyên 3000</a>
                        </div>
                    </li>
                    <li>
                        <div class="divimgslide">
                            <a class="aimg_slide" href="/hiep-khach-giang-ho/4875.html" title="Hiệp Khách Giang Hồ">
                            <img alt="Hiệp Khách Giang Hồ" src="http://st.thichtruyentranh.com/images/icon/0011/hiep-khach-giang-ho1419099919.jpg" />
                            </a> 
                            <a class="atext" href="/hiep-khach-giang-ho/4875.html" title="Hiệp Khách Giang Hồ">Hiệp Khách Giang Hồ  ád  d</a>
                        </div>
                    </li>
                    <li>
                        <div class="divimgslide">
                            <a class="aimg_slide" href="/tam-trao-tien-the-chi-lu/5219.html" title="Tầm Trảo Tiền Thế Chi Lữ">
                                <img alt="Tầm Trảo Tiền Thế Chi Lữ" src="http://st.thichtruyentranh.com/images/icon/0035/tam-trao-tien-the-chi-lu1424763504.jpg" /></a> 
                                <a class="atext" href="/tam-trao-tien-the-chi-lu/5219.html" title="Tầm Trảo Tiền Thế Chi Lữ">Tầm Trảo Tiền Thế Chi Lữ</a>
                            </div>
                        </li>
                        <li>
                            <div class="divimgslide">
                                <a class="aimg_slide" href="/kingdom-vuong-gia-thien-ha/512.html" title="Kingdom - Vương Giả Thiên Hạ">
                                    <img alt="Kingdom - Vương Giả Thiên Hạ" src="http://st.thichtruyentranh.com/images/icon/0000/kingdom-vuong-gia-thien-ha1425145413.jpg" /></a> 
                                    <a class="atext" href="/kingdom-vuong-gia-thien-ha/512.html" title="Kingdom - Vương Giả Thiên Hạ">Kingdom - Vương Giả Thiên Hạ</a>
                                </div>
                            </li>
                            <li>
                                <div class="divimgslide">
                                    <a class="aimg_slide" href="/huyet-toc-cam-vuc/90.html" title="Huyết Tộc Cấm Vực">
                                    <img alt="Huyết Tộc Cấm Vực" src="http://st.thichtruyentranh.com/images/icon/0026/huyet-toc-cam-vuc1428821353.jpg" /></a> <a class="atext" href="/huyet-toc-cam-vuc/90.html" title="Huyết Tộc Cấm Vực">Huyết Tộc Cấm Vực</a>
                                </div>
                            </li>
                        </ul>
            </div>
          <div class="col-md-8 well-sm contentChap">
          <div class="listComic">
            <div class="col-md-6 listAComic text-center">
              <a href="#" title="" class="text-center">Truyện mới cập nhập</a>
            </div>
            <div class="col-md-6 listAComic text-center">
              <a href="#" title="">Đã hoàn thành</a>
            </div>
          </div>  
            <div class="row fixmargin">
              <ul class="ulslide1 nav navbar-nav">
              <li>
                  <div class="sliderimg">
                    <div class="ind_info">
                        <div><a href="#"><img src="https://truyenqq.com/ebook/163x212/ong-chu-va-con-meo-mat-bua_1520257016.jpg" alt="Ông Chú Và Con Mèo Mặt Bựa" /></a></div>    
                    </div>
                    <div class="info1">
                      <p class="ind_text text-center" title="Ông Chú Và Con Mèo Mặt Bựa"><a href="#">Ông Chú Và Con Mèo Mặt Bựa <img src="images/new_022Z.gif" alt="new" class="imgnew"></a></p>
                      <p class="ind_update text-center"><b>Thể Loại:</b> <a href="#" title="">Comedy, Manhua</a></p>
                      <p><b>Chap mới: </b> 83 <b>Lần đọc: </b>158081</p>        
                      <p class="ind_p01 text-center"><b>Update: 11:39 15/03</b></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="sliderimg">
                   <div class="ind_info">
                        <div><a href="#"><img src="images/anh3.jpg" alt="Ông Chú Và Con Mèo Mặt Bựa" /></a></div>    
                    </div>
                    <div class="info1">
                      <p class="ind_text text-center" title="Ông Chú Và Con Mèo Mặt Bựa"><a href="#">Ông Chú Và Con Mèo Mặt Bựa <img src="images/new_022Z.gif" alt="new" class="imgnew"></a></p>
                      <p class="ind_update text-center"><b>Thể Loại:</b> <a href="#" title="">Comedy, Manhua</a></p>
                      <p><b>Chap mới: </b> 83 <b>Lần đọc: </b>158081</p>        
                      <p class="ind_p01 text-center"><b>Update: 11:39 15/03</b></p>
                  </div>
              </div></li>
              <li>
                <div class="sliderimg">
                 <div class="ind_info">
                        <div><a href="#"><img src="images/anh5.jpg" alt="Ông Chú Và Con Mèo Mặt Bựa" /></a></div>    
                    </div>
                    <div class="info1">
                      <p class="ind_text text-center" title="Ông Chú Và Con Mèo Mặt Bựa"><a href="#">Ông Chú Và Con Mèo Mặt Bựa <img src="images/new_022Z.gif" alt="new" class="imgnew"></a></p>
                      <p class="ind_update text-center"><b>Thể Loại:</b> <a href="#" title="">Comedy, Manhua</a></p>
                      <p><b>Chap mới: </b> 83 <b>Lần đọc: </b>158081</p>        
                      <p class="ind_p01 text-center"><b>Update: 11:39 15/03</b></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="sliderimg">
                   <div class="ind_info">
                        <div><a href="#"><img src="images/anh1.jpg" alt="Ông Chú Và Con Mèo Mặt Bựa" /></a></div>    
                    </div>
                    <div class="info1">
                      <p class="ind_text text-center" title="Ông Chú Và Con Mèo Mặt Bựa"><a href="#">Ông Chú Và Con Mèo Mặt Bựa CKSDOQA <img src="images/new_022Z.gif" alt="new" class="imgnew"></a></p>
                      <p class="ind_update text-center"><b>Thể Loại:</b> <a href="#" title="">Comedy, Manhua</a></p>
                      <p><b>Chap mới: </b> 83 <b>Lần đọc: </b>158081</p>        
                      <p class="ind_p01 text-center"><b>Update: 11:39 15/03</b></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="sliderimg">
                   <div class="ind_info">
                        <div><a href="#"><img src="images/anh7.jpg" alt="Ông Chú Và Con Mèo Mặt Bựa" /></a></div>    
                    </div>
                    <div class="info1">
                      <p class="ind_text text-center" title="Ông Chú Và Con Mèo Mặt Bựa"><a href="#">Ông Chú Và  <img src="images/new_022Z.gif" alt="new" class="imgnew"></a></p>
                      <p class="ind_update text-center"><b>Thể Loại:</b> <a href="#" title="">Comedy, Manhua</a></p>
                      <p><b>Chap mới: </b> 83 <b>Lần đọc: </b>158081</p>        
                      <p class="ind_p01 text-center"><b>Update: 11:39 15/03</b></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="sliderimg">
                   <div class="ind_info">
                        <div><a href="#"><img src="images/anh6.jpg" alt="Ông Chú Và Con Mèo Mặt Bựa" /></a></div>    
                    </div>
                    <div class="info1">
                      <p class="ind_text text-center" title="Ông Chú Và Con Mèo Mặt Bựa"><a href="#">Ông Chú Và Con Mèo Mặt Bựa <img src="images/new_022Z.gif" alt="new" class="imgnew"></a></p>
                      <p class="ind_update text-center"><b>Thể Loại:</b> <a href="#" title="">Comedy, Manhua</a></p>
                      <p><b>Chap mới: </b> 83 <b>Lần đọc: </b>158081</p>        
                      <p class="ind_p01 text-center"><b>Update: 11:39 15/03</b></p>
                  </div>
                </div>
              </li> 
            </ul>
            </div>
          </div>
          <div class="col-md-4 well-sm sideB">
            <div>
                <ul class="nav nav-tabs" id="navtabs">
                    <li class="active linktabs text-center"><a href="#tab-1" id="linksa" class="linksa" role="tab" data-toggle="tab">Top Tuần</a></li>
                    <li class="linktabs text-center"><a href="#tab-2" class="linksa" role="tab" data-toggle="tab">Top Tháng</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="tab-1">
                        <ul id="ullist_lablestory">
                          <?php foreach ($content['topComic'] as $key => $top): ?>
                            <li class="toptruyen"> <span class="num"><?php echo $key+1 ?> </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread"><?php echo $top['name_comic'] ?></a><span class="more1">Đọc: <?php echo  $top['view'] ?> </span></li>
                          <?php endforeach ?>
<!--                             <li class="toptruyen">
                            <span class="num">1 </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread">Thuần Tình Nha Đầu Hoả Lạt Lạt </a><span class="more1">Đọc: 6775846 </span></li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li> -->
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-2">
                        <p>Second tab content.</p>
                        <ul id="ullist_lablestory">
                                                    <?php foreach ($content['topComic'] as $key => $top): ?>
                            <li class="toptruyen"> <span class="num"><?php echo $key+1 ?> </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread"><?php echo $top['name_comic'] ?></a><span class="more1">Đọc: <?php echo  $top['view'] ?> </span></li>
                          <?php endforeach ?>
<!--                             <li class="toptruyen"> <span class="num">1 </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread">Thuần Tình Nha Đầu Hoả</a><span class="more1">Đọc: 6775846 </span></li>
                            <li class="toptruyen">
                            <span class="num">1 </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread">Thuần Tình Nha Đầu Hoả Lạt Lạt </a><span class="more1">Đọc: 6775846 </span></li>
                            <li
                            class="toptruyen"><span id="test34">Text</span></li>
                                <li>Item 4</li> -->
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
      <!--Footer-->
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
      <!--/.Footer-->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>