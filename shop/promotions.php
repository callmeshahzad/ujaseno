<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<div class="search-results-page search-page content-container with-left-nav noprint" id="search_results_page"> 
    <link rel="stylesheet" href="tooltip/css/ex.css" type="text/css">
    <script src="tooltip/js/dw_tooltip_c.js" type="text/javascript"></script>
    <script type="text/javascript">
        dw_Tooltip.defaultProps = {
            wrapFn: dw_Tooltip.wrapImageToWidth
        }
    </script>
<div class="content-wrapper full-left top-header-margin"> 
    <?php include 'leftnav.php'; ?>
 
 <div class="middle-wrapper" style="padding-left:12px; padding-top:0px;"> 
    <div class="tires-upper full-left keywordSearchAdBanner"> </div> 
    
    <div class="clear"></div> 
    <div id="cutOffTimeMessage" class="content"> 
        <div class="cutOffTimeMsgParagraphs"> 
       <h5><b>DELIVERY TIMES</b></h5>
        <p><b>Morning Delivery:</b> 8am , Cutoff Time (Last business day 6pm), <b>Noon Delivery:</b> 1:30pm, Cutoff Time 1pm</p>
        
        <p><b>Hotshots:</b> 9am to 5pm, Please contact with sales team to take that advantage </p>
        
        </div> 
    </div> 
    <div class="clearfix"></div>
    <h4>Promotions Catalogs</h4>
    <div class="row">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Promotion Type</th>
                <th>Catalog</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            if(isset($_GET['promotion_type'])){
                $promotionID = $_GET['promotion_type'];
            
                $queryPromotion = "SELECT * FROM tbl_promotions WHERE id='$promotionID'";
                $resultPromotion = $db->query($queryPromotion);
       
                $rowPromotion = $resultPromotion->fetch_object();
                $promotionID = $rowPromotion->id;
                $promotionType = $rowPromotion->title;

                $queryCatalog = "SELECT * FROM tbl_promotion_catalogs WHERE promotion_id='$promotionID'";
                $resultCatalog = $db->query($queryCatalog);
                if($resultCatalog->num_rows > 0){
                    while ($rowCatalog = $resultCatalog->fetch_object()) {
                        $catalog = $rowCatalog->catalog;
                ?>
                <tr>
                   <td><?=$promotionType?></td>
                   <td><?=$catalog?></td>
                   <td><button class="btn btn-danger" onclick="getCatalog('<?php echo $catalog ?>')">View Detail</button>
                   </td>
               </tr>
                <?php
                    }
                    
                }

            }
           ?>

        </tbody>
        
    </table>
    </div>
    <div style="width: 100%" align="center">
        <img src="../images/loader.gif" class="img-responsive" id="loaderimg" style="width:100px;height: 100px; display: none;">
    </div>
<style>
/* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
 .tooltiptext {
  visibility: hidden;
  width: 220px;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px; 
  border: 2px solid #000;
  /* Position the tooltip text - see examples below! */
  position: absolute;
  z-index: 1;
  background-color: #fff;
     margin-top: 60px;
}

/* Show the tooltip text when you mouse over the tooltip container */
#single_image:hover .tooltiptext {
  visibility: visible;
}
</style>
 <!-- Search Results --> <br/> 
 <!--productList.tag--> 
 <div id="product-list-container"> 
    <h4 class="order-heading" style="margin-left: 12px;">DETAIL</h4>  
    <div id="search-tabs" class="multiTabSearchTabs"> <span class="pull-right pr20"> </span> 
        <div class="tabs memo-1-tab list-tab"> 
            <ul class="multiTabsGlobalSearch"> 
                <li>
                    <a href="#search-supplies-tab">Products</a>
                </li> 
            </ul> 
        </div> 
        <div id="search-supplies-tab" class="left-rounded-border tabs-content"> 
            <div class="first-filter row "> 
                <div class="select-view pull-right icon-width">
                  
                </div> 
                <div class="clear"></div> 
            </div> 
            <div class="second-filter row "> 
                
            </div> 
            <form id="add-to-cart-form-supplies" method="POST" action="/cart/add-results"> 
                <div id="grid-data"> 
                    <div class="row product-list-description" id="product-list-description-supplies"> 
                        <div class="grid-view-div grid-view-div-supplies pro_catalog" id="grid-view-div-supplies-1"> 
                            <div class="product-table featured-product product_rows_container"> </div> 
                            <script type="text/javascript">
                                var co = 1;
                            </script>
                            

                    </div> 
                </div> 
            </form> 
        </div> 
    </div> 
 </div> 
 <style type="text/css">
     .fixedimg{
        position: fixed;
        height: auto;
        width: 500px;
        top: 3%;
        left: 35%;
        right: 30%;
        background-color: #fff;
        border-radius: 15px;
        border:2px solid gray;
        display: none;
     }
     .fixedimg-head p {
            background: #000;
    padding: 15px;
    color: #fff;
    font-size: 20px;
    border-radius: 15px;
     }
     .fixedimg-head span {
            color: #fff !important;
            float: right;
            margin-right: 15px;
            cursor: pointer;
     }
     .fixedimg-body{
        padding: 15px
     }
     .box-img{
        /*width: 100%;*/
        /*height: 450px;*/
        border:2px solid gray;
        border-radius: 10px;
        /*margin-left: 15%;*/
     }
     #mydivheader{
        cursor: move;
     }
 </style>
<div class="fixedimg" id="mydiv">
    <div class="fixedimg-head" id="mydivheader">
        <p>WTD SHOP <span><i class="fa fa-close" style="color: #fff;" onclick="closeBox()"></i></span></p>
    </div>
    <div class="fixedimg-body" align="center">
        <center>
        <img src="images/8846873985054_31_Inc_Valve_Stems_A133899_1_15774_jpg.jpg" class="img-responsive box-img">
        </center>
    </div>
    <div class="fixedimg-footer"></div>
</div>
 
</div><!-- /.main-content --> 
<div class="clear"></div> 
</div> <!-- /.content-container --> 
<div class="clear"></div>
    <input type="hidden" id="item-counter" value="<?=$count?>">
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<?php include 'footer.php'; ?>
<script>
    $(document).mouseup(function(e)
    {
        var container = $(".fixedimg");
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
        }
    });

$(document).ready(function() {
    var elem = ".fixedimg";
    $( document ).on( 'keydown', function ( e ) {
        if ( e.keyCode === 27 ) { // ESC
            $( elem ).hide();
        }
    });
});
function showBox(img) {
    $(".fixedimg").show();
    $(".box-img").attr("src",img);
}
function closeBox() {
    $(".fixedimg").hide();
}


$("input[name=quantity]").on("keydown",function search(e) {
    if(e.keyCode == 13) {
        var id = $(this).attr('data-id');
        addToCart(id);
    }
});


function addToCart(id) {
    // alert();
    var qty = parseInt($(".inputQuantity"+id).val());
    var productID = $(".inputQuantity"+id).attr('id');
    var avail = parseInt($(".inputQuantity"+id).attr('avail'));
    if(qty > avail){
        alert("You can order ("+avail+") item maximum.");
        return;
    }
    $(this).attr("disabled", "disabled");
    $.ajax({
        type:"GET",
        url: "ajax.php?pid="+productID+"&qty="+qty,
        success:function(response){
            console.log("result:"+response);
//            alert(response);
            if (response == "success") {
                var itemCounter = parseInt($("#item-counter").val());
                itemCounter = parseInt(itemCounter) + 1;
                $(".item-count").text(itemCounter);
                $("#item-counter").val(itemCounter);
                $("#add-to-cart-button"+id).hide();
                $("#ok"+id).show();
                $(".inputQuantity"+id).attr('disabled','true');
            }

        }
    });
}


dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

function getCatalog(catalog) {
    // alert(catalog);
    $("#loaderimg").show();
    $.ajax({
        type:"GET",
        url: "ajax_promotion_catalog.php?search=Search="+catalog,
        success:function(response){
            $("#loaderimg").hide();
            $(".pro_catalog").prepend(response);

        }
    });
}

</script>
