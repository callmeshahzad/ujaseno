<?php include 'header.php'; 


?>
<div class="content-wrapper full-left top-header-margin"> 
    <?php include 'leftnav.php'; ?>
    <link rel="stylesheet" type="text/css" href="engine3/style.css" />
    <script type="text/javascript" src="engine3/jquery.js"></script>
    <style type="text/css" media="screen">
        .ws_controls{
            display: block !important;
        }
        .ws-title{
            display: block !important;
        }
        .ws_bullets{
            display: block;
        }

.carousel{
    width: 100%;
    display: inline-block;
    height: auto;
    margin-left: 20px;
}
.carousel-inner { margin: auto; width: 90%; }
.carousel-control        { width:  4%; }
.carousel-control.left,
.carousel-control.right {
  background-image:none;
}
 
.glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right {
  margin-top:-10px;
  margin-left: -10px;
  color: #444;
}

/*.carousel-inner {
  a {
    display:table-cell;
    height: 180px;
    width: 200px;
    vertical-align: middle;
  }
  
}*/

@media (max-width: 767px) {
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
      left: 0;
      -webkit-transform: translate3d(100%, 0, 0);
      transform: translate3d(100%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
      left: 0;
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0);
  }

}
@media (min-width: 767px) and (max-width: 992px ) {
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
      left: 0;
      -webkit-transform: translate3d(50%, 0, 0);
      transform: translate3d(50%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
      left: 0;
      -webkit-transform: translate3d(-50%, 0, 0);
      transform: translate3d(-50%, 0, 0);
  }
}
@media (min-width: 992px ) {
  
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
      left: 0;
      -webkit-transform: translate3d(16.7%, 0, 0);
      transform: translate3d(16.7%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
      left: 0;
      -webkit-transform: translate3d(-16.7%, 0, 0);
      transform: translate3d(-16.7%, 0, 0);
  }
  
}
    </style>
    <div class="center-content"> 
        <div class="widget-wrap row">

            <?php include 'wtd_vis/vis/index.html';?>   
            <br>        
            <div class="clearfix"></div>
            <div class="img-slider" style="">
                <div class="row">
                    <?php 
                    /*if (!empty($rw)) {
                        if ($rw->num_rows > 0) {
                            while ($rowW = $rw->fetch_object()) {
                        ?>
                        <div class="col-sm-3">
                            <img src="<?php echo $rowW->feature_img ?>" alt="" class="img-responsive" onclick="changeImage(<?php echo $rowW->id ?>,)">
                        </div>
                        <?php
                            }
                        }
                    }*/
                    ?>

                    <?php if (!empty($rw)) { ?>
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="300000" id="myCarousel">
                      <div class="carousel-inner">
                        <?php 
                            if (!empty($rw)) {
                                if ($rw->num_rows > 0) {
                                    $check = "active";
                                    while ($rowW = $rw->fetch_object()) {

                                ?>
                                <div class="item <?php echo $check ?>">
                                    <div class="col-md-2 col-sm-6 col-xs-12" id="bimg<?=$rowW->id?>">
                                        <img src="<?php echo $rowW->feature_img ?>" alt="" class="img-responsive orimg wimg<?=$rowW->id?>" id="<?=$rowW->catalog?>" onclick="changeImage(<?php echo $rowW->id ?>)" style="">
                                    </div>
                                </div>
                                <?php
                                $check = "";
                                    }
                                }
                            }
                            ?>
                        
                      </div>
                      <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>-->
                      <!--<a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->
                    </div>

                <?php } ?>


                </div>
            </div>



<br><br><br>
            <div id="wowslider-container3">
                <div class="ws_images">
                    <ul>
                        <?php 
                        $query = "SELECT * FROM tbl_announcement";
                        $result = $db->query($query);
                        $count = 0;
                        while ($row = $result->fetch_object()) {
                        ?>
                        <li><img src="../admin/<?=$row->slider_images?>" alt="<?=$row->title?>" title="<?=$row->title?>" id="wows3_<?=$count?>"/></li>
                        <?php
                        $count++;
                        }
                        ?>
                        
                       <!--  <li><img src="engine3/images/5.jpg" alt="5" title="5" id="wows3_1"/></li>
                        <li><img src="engine3/images/1.png" alt="1" title="1" id="wows3_2"/></li>
                        <li><img src="engine3/images/2.jpg" alt="2" title="2" id="wows3_3"/></li>
                        <li><img src="engine3/images/3.jpg" alt="3" title="3" id="wows3_4"/></li> -->
                    </ul>
                </div>
                <div class="ws_bullets">
                <!--     <div>
                        <a href="#" title="4"><span><img src="engine3/images/tooltips/4.jpg" alt="4"/>1</span></a>
                        <a href="#" title="5"><span><img src="engine3/images/tooltips/5.jpg" ="5"/>2</span></a>
                        <a href="#" title="1"><span><img src="engine3/images/tooltips/1.png" alt="1"/>3</span></a>
                        <a href="#" title="2"><span><img src="engine3/images/tooltips/2.jpg" alt="2"/>4</span></a>
                        <a href="#" title="3"><span><img src="engine3/images/tooltips/3.jpg" alt="3"/>5</span></a>
                    </div> -->
                </div>


            </div>
            
                


        </div> 
    </div> 
    <style type="text/css">
        .img-box{
            border: 0px solid;
            margin-top: 10%;
            height:200px;
        }
        .vis_img{
            width: 100%;
        }


        <?php 
        echo $styling;
        ?>

        /*.backwheeldummy2{
            position: sticky;
            margin-top: -110px;
            margin-left: 122px;
            width: 80px;
        }
        .frontwheeldummy2{
            position: sticky;
            margin-top: -80px;
            margin-left: 377px;
            width: 80px;
        }
        .frontwheel2{
            position: sticky;
            margin-top: -79px;
            margin-left: 375px;
            width: 80px;
        }
        .backwheel2{
            position: sticky;
            margin-top: -80px;
            margin-left: 122px;
            width: 80px;
        }

        .backwheeldummy3{
            position: sticky;
            margin-top: -113px;
            margin-left: 128px;
            width: 80px;
        }
        .frontwheeldummy3{
            position: sticky;
            margin-top: -80px;
            margin-left: 368px;
            width: 80px;
        }
        .frontwheel3{
            position: sticky;
            margin-top: -79px;
            margin-left: 367px;
            width: 80px;
        }
        .backwheel3{
            position: sticky;
            margin-top: -80px;
            margin-left: 129px;
            width: 80px;
        }

        
        .backwheeldummy4{
            position: sticky;
            margin-top: -113px;
            margin-left: 128px;
            width: 80px;
        }
        .frontwheeldummy4{
            position: sticky;
            margin-top: -80px;
            margin-left: 368px;
            width: 80px;
        }
        .frontwheel4{
            position: sticky;
            margin-top: -79px;
            margin-left: 367px;
            width: 80px;
        }
        .backwheel4{
            position: sticky;
            margin-top: -80px;
            margin-left: 129px;
            width: 80px;
        }*/

    </style>
<?php include 'rightnav.php'; ?>
    <script type="text/javascript" src="engine3/wowslider.js"></script>
    <script type="text/javascript" src="engine3/script.js"></script>
</div> 
<div> 
    <div class="right-nav"> </div> 
</div> 
<div class="clear"></div> 
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
    
$(document).on('change','#vis_year', function() {
    var year = $(this).val();
    $("#vis_make").empty();
    $.ajax({
        type:"GET",
        url: "ajax_vis.php?year="+year,
        success:function(response){
            // alert(response);
            $("#vis_make").append("<option value=''>Make</option>");
            $("#vis_make").append(response);
        }
    });
});  

$(document).on('change','#vis_make', function() {
    var make = $(this).val();
    $("#vis_model").empty();
    $.ajax({
        type:"GET",
        url: "ajax_vis.php?make="+make,
        success:function(response){
            // alert(response);
            $("#vis_model").append("<option value=''>Model</option>");
            $("#vis_model").append(response);
        }
    });
});  
$(document).on('change','#vis_model', function() {
    var make = $(this).val();
    $("#vis_trim").empty();
    $.ajax({
        type:"GET",
        url: "ajax_vis.php?model="+make,
        success:function(response){
            $("#vis_trim").append("<option value=''>Trim</option>");
            $("#vis_trim").append(response);
        }
    });
});  
$("#vis_trim").on('change',function (e) {
    var trim = $("#vis_trim").val();
    $('#car_search').submit();
    // $.ajax({
    //     type:"GET",
    //     url: "ajax_vis.php?trim="+trim,
    //     success:function(response){
    //         console.log(response);
    //         alert(response);
    //     }
    // });
});


function changeImage(id) {

    var imgsrc = $(".wimg"+id).attr('src');
    var catalog = $(".wimg"+id).attr('id');
    $(".orimg").show();
    $(".wimg"+id).hide();
    $(".newrim").remove();
    $.ajax({
        type:"GET",
        url: "ajax_vis.php?wheel_id="+id,
        success:function(response){
            $("#bimg"+id).append('<a href="products.php?search=Search='+catalog+'"><img src="'+imgsrc+'" alt="" class="img-responsive newrim" style="opacity:0.7"></a>');
            // alert(response);
            $(".vis_dummy_back").attr('src',response);
            $(".vis_dummy_front").attr('src',response);

        }
    });
}
</script>
<script type="text/javascript">
  $('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
<!-- slider script -->
<script type="text/javascript">
    $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>
