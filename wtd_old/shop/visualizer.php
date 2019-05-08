<?php include 'header.php'; 

if (isset($_GET['trim'])) {
    $trim = $_GET['trim'];
    $q  = "SELECT * FROM tbl_vis_car WHERE trim_id= '$trim'";
    $r = $db->query($q);
    if ($r->num_rows > 0 ) {
        $row = $r->fetch_object();
        $carID = $row->id;
        $car_pic = $row->car_pic;
        $qw = "SELECT * FROM tbl_vis_wheels WHERE car_id='$carID'";
        $rw = $db->query($qw);

    }
}else{
    $car_pic = "wtd_cars/camry.png";
}

?>
<div class="content-wrapper full-left"> 
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
            <div class="search-box">
                <form action="" method="get" id="car_search">
                    <div class="col-sm-3">
                        <select name="year" class="form-control" id="vis_year">
                            <option value="">Year</option>
                            <?php 
                                $queryY = "SELECT * FROM tbl_vis_year ORDER BY year DESC";
                                $resultY = $db->query($queryY);
                                if ($resultY->num_rows > 0 ) {
                                    while ($rowY = $resultY->fetch_object()) {
                                        echo '<option value="'.$rowY->id.'">'.$rowY->year.'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="make" class="form-control" id="vis_make">
                            <option value="">Make</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="model" class="form-control" id="vis_model">
                            <option value="">Model</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="trim" class="form-control" id="vis_trim">
                            <option value="">Trim</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="img-box">
                <?php 
                if(!empty($car_pic)){
                ?>
                <img src="<?php echo $car_pic; ?>" alt="" class="img-responsive vis_img">
                <?php if (!empty($rw)) { ?>
                <img src="wtd_cars/dummy.png" alt="" class="img-responsive backwheeldummy<?php echo $carID;?> vis_dummyy_back">
                <img src="wtd_cars/dummy.png" alt="" class="img-responsive frontwheeldummy<?php echo $carID;?>">
                <img src="wtd_cars/15-1.png" alt="" class="img-responsive backwheel<?php echo $carID;?> vis_dummy_back">
                <img src="wtd_cars/15-1.png" alt="" class="img-responsive frontwheel<?php echo $carID;?> vis_dummy_front">
                <?php
                    }
                }
                ?>
                
            </div>    
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
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                      <div class="carousel-inner">
                        <?php 
                            if (!empty($rw)) {
                                if ($rw->num_rows > 0) {
                                    $check = "active";
                                    while ($rowW = $rw->fetch_object()) {

                                ?>
                                <div class="item <?php echo $check ?>">
                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                        <img src="<?php echo $rowW->feature_img ?>" alt="" class="img-responsive" onclick="changeImage(<?php echo $rowW->id ?>)" style="">
                                    </div>
                                </div>
                                <?php
                                $check = "";
                                    }
                                }
                            }
                            ?>
                        
                      </div>
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>

                <?php } ?>

                </div>
            </div>
        </div> 
    </div> 
    <style type="text/css">
        .img-box{
            border: 1px solid;
            margin-top: 10%;
            height:200px;
        }
        .vis_img{
            width: 100%;
        }
        .backwheeldummy1{
            position: sticky;
            margin-top: -118px;
            margin-left: 118px;
            width: 80px;
        }
        .backwheeldummy2{
            position: sticky;
            margin-top: -110px;
            margin-left: 122px;
            width: 80px;
        }
        .frontwheeldummy1{
            position: sticky;
            margin-top: -80px;
            margin-left: 383px;
            width: 80px;
        }
        .frontwheeldummy2{
            position: sticky;
            margin-top: -80px;
            margin-left: 377px;
            width: 80px;
        }
        
        .frontwheel1{
            position: sticky;
            margin-top: -79px;
            margin-left: 383px;
            width: 80px;
        }

        .frontwheel2{
            position: sticky;
            margin-top: -79px;
            margin-left: 375px;
            width: 80px;
        }
        .backwheel1{
            position: sticky;
            margin-top: -79px;
            margin-left: 118px;
            width: 80px;
        }
        .backwheel2{
            position: sticky;
            margin-top: -80px;
            margin-left: 122px;
            width: 80px;
        }

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
    $.ajax({
        type:"GET",
        url: "ajax_vis.php?wheel_id="+id,
        success:function(response){
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