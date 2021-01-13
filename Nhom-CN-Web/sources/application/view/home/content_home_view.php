<div class="color">
  <div class="slideshow container">
 <!--    <div class="area">
      <h2 class="thea">
        <img src="public/images/iconbook.png" alt=""><a href="#" class="ainarea">TRUYỆN KIẾM HIỆP</a></h2>
        <div class="clear"></div>
        <ul class="ulslide nav navbar-nav">
<!--           <?php foreach ($content['topComic'] as $key => $topBooks): ?>
            <li>
              <div class="divimgslide">
                <a class="aimg_slide" href="?c=details&id=<?php echo $topBooks['id']; ?>" title="<?php echo $topBooks['name_comic']; ?>">
                  <img alt="<?php echo($topBooks['name_comic']); ?>" src="<?php echo IMG_PATH_UPLOAD . $topBooks['images'];  ?>" /></a> 
                  <a class="atext" href="/xuyen-duyet-tay-nguyen-3000/5336.html" title="<?php echo $topBooks['name_comic']; ?>"><?php echo $topBooks['name_comic']; ?></a>
                </div>
              </li>                    
            <?php endforeach ?>
            <!--                 <li> -->
<!--               <div class="divimgslide">
                <a class="aimg_slide" href="/hiep-khach-giang-ho/4875.html" title="Hiệp Khách Giang Hồ">
                  <img alt="Hiệp Khách Giang Hồ" src="http://st.thichtruyentranh.com/images/icon/0011/hiep-khach-giang-ho1419099919.jpg" />
                </a> 
                <a class="atext" href="/hiep-khach-giang-ho/4875.html" title="Hiệp Khách Giang Hồ">Hiệp Khách Giang Hồ</a>
              </div>
            </li>
          -->
     <!--    </ul>
      </div>  --> 
      <div class="area">
        <h2 class="thea">
          <img src="public/images/iconbook.png" alt=""><a href="#" class="ainarea">TRUYỆN KIẾM HIỆP</a></h2>
          <div class="clear"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="divimgslide" id="ditest">
                      <a class="aimg_slide" href="?c=details&id=<?php echo $content['topComicSix'][0]['id']; ?>" title="<?php echo $content['topComicSix'][0]['name_comic']; ?>">
                        <img alt="<?php echo($content['topComicSix'][0]['name_comic']); ?>" src="<?php echo IMG_PATH_UPLOAD . $content['topComicSix'][0]['images'];  ?>" /></a> 
                        <a class="atext" href="/xuyen-duyet-tay-nguyen-3000/5336.html" title="<?php echo $content['topComicSix'][0]['name_comic']; ?>"><?php echo $content['topComicSix'][0]['name_comic'] ?></a>
                      </div>
                    </div>
                    <?php foreach ($content['topComic'] as $key => $topBooks): ?>
                      <div class="item">
                       <div class="divimgslide">
                        <a class="aimg_slide" href="?c=details&id=<?php echo $topBooks['id']; ?>" title="<?php echo $topBooks['name_comic']; ?>">
                          <img alt="<?php echo($topBooks['name_comic']); ?>" src="<?php echo IMG_PATH_UPLOAD . $topBooks['images'];  ?>" /></a> 
                          <a class="atext" href="/xuyen-duyet-tay-nguyen-3000/5336.html" title="<?php echo $topBooks['name_comic']; ?>"><?php echo $topBooks['name_comic']; ?></a>
                        </div>
                      </div>                      
                     
                    <?php endforeach ?>
                  </div>
                  
                  <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                  <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 well-sm contentChap contentHomePage">
            <div class="listComic">
             <ul class="nav nav-tabs">
              <li class="active col-md-6 listAComic text-center"><a href="#tab-3" role="tab" data-toggle="tab">Truyện mới cập nhập</a></li>
              <li class="col-md-6 listAComic text-center"><a href="#tab-4" role="tab" data-toggle="tab">Đã hoàn thành</a></li>
            </ul>
          </div>  
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab-3">
              <div class="row fixmargin">
                <ul class="ulslide1 nav navbar-nav">
                  <?php foreach ($content['updateMG'] as $key => $MangaUpdate): ?>
                    <li>
                      <div class="sliderimg">
                        <div class="ind_info">
                          <div><a href="?c=details&id=<?php echo $MangaUpdate['id'] ?>"><img src="<?php echo IMG_PATH_UPLOAD.$MangaUpdate['images'] ?>" alt="<?php echo $MangaUpdate['name_comic'] ?>" /></a></div>    
                        </div>
                        <div class="info1">
                          <p class="ind_text text-center" title="<?php echo $MangaUpdate['name_comic'] ?>"><a href="?c=details&id=<?php echo $MangaUpdate['id'] ?>"><?php echo $MangaUpdate['name_comic'] ?> <img src="uploads/images/new_022Z.gif" alt="new" class="imgnew" style="width: 34px;
    height: auto;
    display: inline;"></a></p><?php $cutStrings = explode(",",$MangaUpdate['category']); ?>
                          <p class="ind_update text-center"><b>Thể Loại:</b> 
                            <?php foreach ($cutStrings as $key => $val): ?>
                              <a href="?c=action&m=category&cat=<?php echo $val ?>" title=""><?php echo $val ?></a>
                            <?php endforeach ?>
                          </p>
                          <p><b>Chap mới: </b> <?php echo count($content['countChapNew'][$MangaUpdate['id']]); ?> <b>Lần đọc: </b><?php echo $MangaUpdate['view'] ?></p>        
                          <p class="ind_p01 text-center"><b>Update: <?php echo $MangaUpdate['update_time'] ?></b></p>
                        </div>
                      </div>
                    </li>                  
                  <?php endforeach ?>
                </ul>

              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-4">
              <div class="row fixmargin">
                <ul class="ulslide1 nav navbar-nav">
                  <?php foreach ($content['fullManga'] as $key => $MangaUpdate): ?>
                    <li>
                      <div class="sliderimg">
                        <div class="ind_info">
                          <div><a href="?c=details&m=<?php echo $MangaUpdate['id'] ?>"><img src="<?php echo IMG_PATH_UPLOAD.$MangaUpdate['images'] ?>" alt="<?php echo $MangaUpdate['name_comic'] ?>" /></a></div>    
                        </div>
                        <div class="info1">
                          <p class="ind_text text-center" title="<?php echo $MangaUpdate['name_comic'] ?>"><a href="?c=details&id=<?php echo $MangaUpdate['id'] ?>"><?php echo $MangaUpdate['name_comic'] ?> </a></p><?php $cutStrings = explode(",",$MangaUpdate['category']); ?>
                          <p class="ind_update text-center"><b>Thể Loại:</b> 
                            <?php foreach ($cutStrings as $key => $val): ?>
                              <a href="?c=action&m=category&cat=<?php echo $val ?>" title=""><?php echo $val ?></a>
                            <?php endforeach ?>
                          </p>
                          <p><b>Chap mới: </b> <?php echo count($content['countFullManga'][$MangaUpdate['id']]) ?> <b>Lần đọc: </b><?php echo $MangaUpdate['view'] ?></p>        
                          <p class="ind_p01 text-center"><b>Update: <?php echo $MangaUpdate['update_time'] ?></b></p>
                        </div>
                      </div>
                    </li>                  
                  <?php endforeach ?>
                </ul>
                <a href="?c=action&m=handle&gender=mangaFull" class="text-center" style="margin-left: 356px;" title="">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>
