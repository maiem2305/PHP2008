 $(document ).ready(function() {
    
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
