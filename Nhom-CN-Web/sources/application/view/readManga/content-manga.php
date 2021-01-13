<div class="color">
        <div class="container contentReadManga">
            <div class="titile-manga">
    <ol class="listOl">
        <li><a href="?c=home" title="Truyện Tranh Online">Truyện Tranh Online</a></li>
        <i class="glyphicon glyphicon-menu-right"></i>
        <li><a href="?c=details&id=<?php echo $content['allDataBooks']['id'] ?>" title="Truyện Tranh Online"><?php echo $content['allDataBooks']['name_comic'] ?></a></li>
        <i class="glyphicon glyphicon-menu-right"></i>
        <li><a href="#" title="Truyện Tranh Online"><?php echo $content['allDataBooks']['name_comic']." Chap ".$content['dataChap']['chapter'] ?></a></li>
    </ol>
</div>
            <div class="dtl_menu text-center">
              <?php if ($content['chapter']>1&&$content['chapter']<=count($content['allChap'])): ?>
    <p><a href="?c=manga&id=<?php echo $_GET['id'] ?>&chapter=<?php echo $content['chapter']-1 ?>" title="Song Diện Danh Viện Chap 53">Chương Trước</a></p>              <?php endif ?>
    <?php if ($content['chapter']<count($content['allChap'])): ?>
    <p><a href="?c=manga&id=<?php echo $_GET['id'] ?>&chapter=<?php echo $content['chapter']+1 ?>" title="Song Diện Danh Viện Chap 55">Chương Sau</a></p>      
    <?php endif ?>
</div>

            <p class="p-manga"><?php echo $content['allDataBooks']['name_comic'] ?></p>
            <p class="read-chapter">Chapter <?php echo $content['dataChap']['chapter'] ?></p>
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
    <script type="text/javascript">
      $( document ).ready(function(){
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