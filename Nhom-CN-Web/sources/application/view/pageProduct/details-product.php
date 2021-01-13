 <div class="color">
   <div class="container">
    <div class="heightpg" style="height: 20px;"></div>
    <div class="col-md-8 well-sm contentChap detailsPage">
      <!-- <div class="listComic">
       <ul class="nav nav-tabs">
        <li class="active col-md-6 listAComic text-center">
          <a href="#tab-3" role="tab" data-toggle="tab">Truyện mới cập nhập</a></li>
        <li class="col-md-6 listAComic text-center"><a href="#tab-4" role="tab" data-toggle="tab">Đã hoàn thành</a></li>
      </ul>
    </div>   -->
    <div class="tab-content">
      <!-- <div role="tabpanel" class="tab-pane active" id="tab-3"> -->
        <div class="row fixmargin">
          <ul class="ulslide1 nav navbar-nav">
            <?php foreach ($data['mangas'] as $key => $value): ?>
            <li>
              <div class="sliderimg">
                <div class="ind_info">
                  <div><a href="?c=details&id=<?php echo $value['id'] ?>"><img src="<?php echo IMG_PATH_UPLOAD.$value['images'] ?>" alt="<?php echo $value['name_comic'] ?>" /></a></div>    
                </div>
                <div class="info1">
                  <p class="ind_text text-center" title="<?php echo $value['name_comic'] ?>"><a href="?c=details&id=<?php echo $value['id'] ?>"><?php echo $value['name_comic'] ?> </a></p>
                  <p class="ind_update text-center"><b>Thể Loại:</b> 
                    <?php $cutString=explode(",",$value['category']); 
                     // echo "<pre/>";print_r($cutString);die();
                    ?>
                    <?php foreach ($cutString as $key => $val): ?>
                    <a href="?c=action&m=category&cat=<?php echo $val ?>" title=""><?php echo $val ?>, </a>
                    <?php endforeach ?>
                  </p>
                  
                  <p><b>Chap mới: </b> <b>Lần đọc: </b><?php echo $value['view'] ?></p>        
                  <p class="ind_p01 text-center"><b>Update: <?php echo $value['update_time'] ?></b></p>
                </div>
              </div>
            </li>
          <?php endforeach ?>
<!--             <li>
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
    </li>  -->
  </ul>
  <div class="text-center">
    <?php echo $data['panigation'] ?>
  </div>
</div>
<!-- <div role="tabpanel" class="tab-pane" id="tab-4">
  <p>Second tab content.</p>
</div> -->
</div>
</div>
