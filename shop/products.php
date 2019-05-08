<?php include 'header.php'; ?>
<?php

$case=1;
if (isset($_GET['search'])) {
    $search = $_GET['search'];

    if (strpos($search, '/')&&strpos($search, 'R')) {
        $case=2;
    }else{
        if(isset($_GET['WheelDiameter'])){
        $search .= "&WheelDiameter=".$_GET['WheelDiameter'];
        $case=1;

    }
    if(isset($_GET['WheelWidth'])){
        $search .= "&WheelWidth=".$_GET['WheelWidth'];
        $case=1;

    }
    if(isset($_GET['WheelBoltCircle'])){
        $search .= "&WheelBoltCircle=".$_GET['WheelBoltCircle'];
        $case=1;

    }
    if(isset($_GET['WheelCenterBore'])){
        $search .= "&WheelCenterBore=".$_GET['WheelCenterBore'];
        $case=1;

    }
    if(isset($_GET['WheelOffsetMin'])){
        // $offSet = $_GET['WheelOffsetMax'];
        // $search = str_replace('+', '%20', $search);
        $search .= "&WheelOffsetMin=".$_GET['WheelOffsetMin'];
        $case=1;

        // echo "offSetofwheel".$offSet;
    }   
    
    $search = str_replace(' ', '%20', $search);
    $type = substr($search,0,strpos($search,'=')+2);
    
    if ($type === "Category=3" || $type === "Category=5" || $type === "Category=7") {
        $search = $type."%09".substr($search,strpos($search,"=")+1);
        $case=1;
    }
    // else{
    //     $case=2;
    // }

    if(isset($_GET['TireSizeB'])){
        $search .= "&TireSizeB=".$_GET['TireSizeB'];
        $case=1;

    }
    if(isset($_GET['TireSizeC'])){
        $search .= "&TireSizeC=".$_GET['TireSizeC'];
        $case=1;

    }
    $wheel_Finish = '';
     if(isset($_GET['WheelFinish'])){
        // $search .= "&WheelFinish=".$_GET['WheelFinish'];
        $wheel_Finish = $_GET['WheelFinish'];
        $case=1;

    }

    }
    

    // $size=explode("size=", $_GET['search'])[1];
    // $tyreSizeA="";
    // $tyreSizeB="";
    // $tyreSizeC="";
    // if(isset($size)){
    //      $temp1=explode("/",$size);
    //     $tyreSizeA=$temp1[0];
    //         // $temp2=explode("ZR",$temp1[1]);
    //     $temp2=explode("R",$temp1[1]);
    //     $tyreSizeB=$temp2[0];
    //     $tyreSizeC=$temp2[1];
    // }
    
    //  echo "Search! ".$search;

   $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/getproducts?".$search;

}else{
    $search = '';
    $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/getproducts?Search=valve";
}

// if(isset($_GET["search"])){
//     $search = $_GET['search'];
//     if (isset($_GET['Vdata'])) {
//         $v = $_GET['Vdata'];
//         echo $v;
//         if ($v == 1) {
//             if(isset($_GET['TT'])){
//                 $search .= "Search=".$_GET['TT'];
//                 $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/getproducts?".$search;
//             }

//             // if(isset($_GET['WheelDiameter'])){
//             //     $search .= "&WheelDiameter=".$_GET['WheelDiameter'];
//             // }
//             // if(isset($_GET['WheelWidth'])){
//             //     $search .= "&WheelWidth=".$_GET['WheelWidth'];
//             // }
//             // $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/getproducts?".$search;      
//         }
        
//     }
    
    
// }

// echo $url;
// exit();



$username = $_SESSION['email']."-96";
$password = $_SESSION['password'];

$process = curl_init();


function filter($arrParam,$database)
{
    $productstemp = array();
    $counter = 0;
    $catalogCounter = 13;
    $desCounter = 14;
    $brand = 15;
    $alternate = 16;
    $size = 17;
    $Image0 = 18;
    $fet = 19;
    $itemTypeId = 20;
    $ItemType = 21;
    $price = 22;
    $pricenofet = 23;
    $avail1121420 = 24;
    $isAvailable = 25;
    // print_r($arrParam);
    foreach ($arrParam as $ar) {
        // print_r($ar);
        if($counter === $catalogCounter ){
            $data['catalog'] = $ar;
            $catalogCounter += 13;
        }
        if($counter === $desCounter ){
            $data['description'] = $ar;
            $desCounter += 13;
        }
        if($counter === $brand ){
            $data['brand'] = $ar;
            $query = "SELECT * FROM tbl_brand WHERE brand='$ar'";
            $result = $database->query($query);
            if($result->num_rows > 0 ){
                $row = $result->fetch_object();
                $data['website'] = $row->website;
                $data['youtube'] = $row->youtube;
            }else{
                $data['website'] = '#';
                $data['youtube'] = '#';
            }
            $brand += 13;
        }
        if($counter === $alternate ){
            $data['alternate'] = $ar;
            $alternate += 13;
        }
        if($counter === $size ){
            $data['size'] = $ar;
            $size += 13;
        }
        if($counter === $Image0 ){
            $data['image'] = "http://wtdusaonline.com/Portals/96/WebSyncImages/".$ar;
            $Image0 += 13;
        }
        if($counter === $fet ){
            $data['fet'] = $ar;
            $fet += 13;
        }
        if($counter === $itemTypeId ){
            $data['item_type_id'] = $ar;
            $itemTypeId += 13;
        }
        if($counter === $ItemType ){
            $data['item_type'] = $ar;
            $ItemType += 13;
        }
        if($counter === $price ){
            $data['price'] = $ar;
            $price += 13;
        }
        if($counter === $pricenofet ){
            $data['pricenofet'] = $ar;
            $pricenofet += 13;
        }
        if($counter === $avail1121420 ){
            $data['avail1121420'] = $ar;
            $avail1121420 += 13;
        }
        if($counter === $isAvailable ){
            $data['isAvailable'] = substr($ar,0,3);
            $isAvailable += 13;
            array_push($productstemp,$data);
        }   
        $counter++;

    }
    return $productstemp;
}
// echo "ConditionCase:".$case;
$productsTyreWise=null;
if($case==1){

    // echo "URL: ".$url;
    curl_setopt($process, CURLOPT_URL, $url);
    curl_setopt($process, CURLOPT_TIMEOUT, 300000);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($process, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
    curl_setopt($process, CURLOPT_FOLLOWLOCATION,TRUE);
    curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $return = curl_exec($process);
    $info = curl_getinfo($process);
    $arr = explode("\t", $return); 
    array_shift($arr);

    $products=filter($arr,$db);
    // print_r($products);

}else if ($case==2){    
    if(isset($_GET['WheelDiameter'])&&isset($_GET['WheelWidth'])){
        // echo "Invoked";

        $urlWheel="http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/getproducts?WheelDiameter=".$_GET['WheelDiameter']."&WheelWidth=".$_GET['WheelWidth'];
         curl_setopt($process, CURLOPT_URL, $urlWheel);
        curl_setopt($process, CURLOPT_TIMEOUT, 300000);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION,TRUE);
        curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $return = curl_exec($process);
        $info = curl_getinfo($process);
        $arr1 = explode("\t", $return); 
        // print_r($return);

        array_shift($arr1);
        if(isset($products)){
            $products=array_merge(filter($arr1,$db),$products);
        }else{
            $products=filter($arr1,$db);

        }
    }

    if(!empty($_GET['search'])){
        $temp1=explode("/",$_GET['search']);
        $tyreSizeA=$temp1[0];
            // $temp2=explode("ZR",$temp1[1]);
        $temp2=explode("R",$temp1[1]);
        $tyreSizeB=$temp2[0];
        $tyreSizeC=$temp2[1];



        $urlTyres="http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/getproducts?TireSizeA=".$tyreSizeA."&TireSizeB=".$tyreSizeB."&TireSizeC=".$tyreSizeC;

        // echo $urlTyres;
        curl_setopt($process, CURLOPT_URL, $urlTyres);
        curl_setopt($process, CURLOPT_TIMEOUT, 300000);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION,TRUE);
        curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $return = curl_exec($process);
        $info = curl_getinfo($process);
        $arr2 = explode("\t", $return); 
        array_shift($arr2);
        $productsTyreWise=array();
        $productsTyreWise=filter($arr2,$db);        // print_r($arr2);
        // $arr=array_merge($arr,$arr2);
    }

}

if(curl_errno($process)){
    throw new Exception(curl_error($ch));
}
curl_close($process);
?>

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
    <!--<div class="bread-crumb"> 
        <a href="index.php">Home</a> 
        <a href="products.php" class="bread-crumb-middle-nolink"> products</a>
        <span><?php //echo substr($search,strpos($search,'=')+1) ?></span>
    </div> -->
    <div class="clear"></div> 
    <div id="cutOffTimeMessage" class="content"> 
        <div class="cutOffTimeMsgParagraphs"> 
        <!--<p>Please contact your DC for cutoff and delivery times.</p> -->
        <!--<p>Local Plus cutoff is 05:00 PM 02/25/2019 for orders to be delivered 02/25/2019.</p> -->
        <h5><b>DELIVERY TIMES</b></h5>
        <p><b>Morning Delivery:</b> 8am , Cutoff Time (Last business day 6pm), <b>Noon Delivery:</b> 1:30pm, Cutoff Time 1pm</p>
        
        <p><b>Hotshots:</b> 9am to 5pm, Please contact with sales team to take that advantage </p>
        
        </div> 
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
    <h4 class="order-heading" style="margin-left: 12px;">SEARCH RESULTS</h4>  
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
                        <div class="grid-view-div grid-view-div-supplies" id="grid-view-div-supplies-1"> 
                            <div class="product-table featured-product product_rows_container"> </div> 
                            <script type="text/javascript">
                                var co = 1;
                            </script>
                            <?php 
                            if (!empty($products)) {
                                $counter = 500;
                                
                                function sortByOrder($a, $b) {
                                    $ret=0;
                                    if ((isset($a)&&isset($a['price'])&& !
                                        (isset($b)&&isset($b['price']))))  {
                                        $ret= $a['price'];
                                        
                                    }else if(!(isset($a)&&isset($a['price'])&&(isset($b)&&isset($b['price'])))){
                                        $ret= $b['price'];
                                    }
                                    else if((isset($a)&&isset($a['price'])&& (isset($b)&&isset($b['price'])))){

                                        $ret = (float)$a['price'] - (float)$b['price'];
                                    }
                                    return $ret;
                                }                                   
                                usort($products, 'sortByOrder');
                                foreach ($products as $product) {
                                     // echo "call";
                                    if(!empty($wheel_Finish)){
                                    if(strpos($product['description'], $wheel_Finish)){


                                    if ($product['avail1121420'] != 0 && $counter > 0) {
                                        $counter--;
                                    $rand = uniqid();
                                    $availqty = (int)$product['avail1121420'];
                                    $p = '';
                                    if($availqty >= 100){
                                        $p = "+";
                                        $avail = 200;
                                    }else if($availqty >= 50){
                                        $p = "+";
                                        $avail = 100;
                                    }else if($availqty > 30){
                                        $p = "+";
                                        $avail = 50;
                                    }else{
                                        
                                        $avail = $availqty;
                                    }
                                    
                                    
                                   
                            ?>
                            <div class="gridDiv" style="margin-left:20px;"> 
                                <div class="image-description pull-left " style="margin-top:30px;"> 
                                    <div class="corner-image"></div> 
                                    <div class="product-image" > 
                                     
                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" /> 
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a> 
                                    </div> 
                                </div> 
                                <div class="description-div pull-left" style="margin-top: 30px;"> 
                                    <div class="row"> 
                                        <div class="size-div pull-left"> 
                                            <div class="first-div pull-left" title="Size">Size</div> 
                                            <div class="second-div pull-left"> <?=$product['size']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Product ">Product </div> 
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div> 
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                             </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="ply-div pull-left"> 
                                            <div class="first-div pull-left">Description</div> 
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>
                        
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="localDC-div pull-left"> 
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="red-color-bold"><?=$product['fet']?></span> 
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Price</div> 
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold" style="color:#0015f9 !important;"><?=$avail?><?php echo $p?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="fet-div pull-left"> 
                                            <div class="first-div pull-left cost-div ">Detail</div> 
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div> -->
<!--                                            <div class="first-div pull-left">&nbsp;</div> -->
                                            <div class="second-div pull-left text-right cost-div"> 
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div> 
                                            <div class="first-div pull-left">&nbsp;</div> 
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="clear"></div> 
                                    </div> 
                                    <div class="row list-view-last-row"> 
                                        <div class="rebate-div pull-left"> </div> 
                                        <div class="noreturn-div pull-left"> 
                                            <div class="noreturn-text-empty"></div> 
                                        </div> 
                                        <div class="add-to-cart-div text-center pull-left "> 
                                            <span class="qty-content" id="add-to-cart-section-3842693"> 
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" avail="<?=$avail?><?php echo $pp ?>"  />
                                            </span> 
                                            <a class="button theme-color small" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" > Add to cart </a>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="clear"></div> 
                            </div> 
                            <?php
                            
                                    }
                                }
                            }else{


                                    if ($product['avail1121420'] != 0 && $counter > 0) {
                                        $counter--;
                                    $rand = uniqid();
                                    $availqty = (int)$product['avail1121420'];
                                    $p = '';
                                    if($availqty >= 100){
                                        $p = "+";
                                        $avail = 200;
                                    }else if($availqty >= 50){
                                        $p = "+";
                                        $avail = 100;
                                    }else if($availqty > 30){
                                        $p = "+";
                                        $avail = 50;
                                    }else{
                                        
                                        $avail = $availqty;
                                    }
                                    
                                    
                                   
                            ?>
                            <div class="gridDiv" style="margin-left:20px;"> 
                                <div class="image-description pull-left " style="margin-top:30px;"> 
                                    <div class="corner-image"></div> 
                                    <div class="product-image" > 
                                     
                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" /> 
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a> 
                                    </div> 
                                </div> 
                                <div class="description-div pull-left" style="margin-top: 30px;"> 
                                    <div class="row"> 
                                        <div class="size-div pull-left"> 
                                            <div class="first-div pull-left" title="Size">Size</div> 
                                            <div class="second-div pull-left"> <?=$product['size']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Product ">Product </div> 
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div> 
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                             </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="ply-div pull-left"> 
                                            <div class="first-div pull-left">Description</div> 
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>
                        
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="localDC-div pull-left"> 
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="red-color-bold"><?=$product['fet']?></span> 
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Price</div> 
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold" style="color:#0015f9 !important;"><?=$avail?><?php echo $p?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="fet-div pull-left"> 
                                            <div class="first-div pull-left cost-div ">Detail</div> 
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div> -->
<!--                                            <div class="first-div pull-left">&nbsp;</div> -->
                                            <div class="second-div pull-left text-right cost-div"> 
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div> 
                                            <div class="first-div pull-left">&nbsp;</div> 
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="clear"></div> 
                                    </div> 
                                    <div class="row list-view-last-row"> 
                                        <div class="rebate-div pull-left"> </div> 
                                        <div class="noreturn-div pull-left"> 
                                            <div class="noreturn-text-empty"></div> 
                                        </div> 
                                        <div class="add-to-cart-div text-center pull-left "> 
                                            <span class="qty-content" id="add-to-cart-section-3842693"> 
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" avail="<?=$avail?><?php echo $pp ?>"  />
                                            </span> 
                                            <a class="button theme-color small" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" > Add to cart </a>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="clear"></div> 
                            </div> 
                            <?php
                            
                                    }
                                
                            }
                                }
                                
                                $counter = 30;
                                // function sortByOrder($a, $b) {
                                //     return $a['price'] - $b['price'];
                                // }
                                
                                // usort($products, 'sortByOrder');
                                foreach ($products as $product) {
                                    if(!empty($wheel_Finish)){
                                    if(strpos($product['description'], $wheel_Finish)){
                                    if ($product['avail1121420'] == 0 && $counter > 0) {
                                        $counter--;
                                        $rand = uniqid();

                            ?>
                            <div class="gridDiv">
                                <div class="image-description pull-left" style="margin-top:30px;">
                                    <div class="corner-image"></div>
                                    <div class="product-image" >

                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" />
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="description-div pull-left">
                                    <div class="row">
                                        <div class="size-div pull-left">
                                            <div class="first-div pull-left" title="Size">Size</div>
                                            <div class="second-div pull-left"> <?=$product['size']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Product ">Product </div>
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div>
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                            
                                            
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="ply-div pull-left">
                                            <div class="first-div pull-left">Description</div>
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>

                                            <div class="clear"></div>
                                        </div>
                                        <div class="localDC-div pull-left">
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="red-color-bold"><?=$product['fet']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Price</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold" style="color: #0015f9 !important;"><?=$product['avail1121420']?></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="fet-div pull-left">
                                            <div class="first-div pull-left cost-div ">Detail</div>
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div>-->
<!--                                            <div class="first-div pull-left">&nbsp;</div>-->
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div>
                                            <div class="first-div pull-left">&nbsp;</div>
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row list-view-last-row">
                                        <div class="rebate-div pull-left"> </div>
                                        <div class="noreturn-div pull-left">
                                            <div class="noreturn-text-empty"></div>
                                        </div>
                                        <div class="add-to-cart-div text-center pull-left ">
                                            <span class="qty-content" id="add-to-cart-section-3842693">
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" />
                                            </span>
                                            <a class="button theme-color small" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" > Add to cart </a>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <?php

                                    }
                                } 
                            }else{
                                if ($product['avail1121420'] == 0 && $counter > 0) {
                                        $counter--;
                                        $rand = uniqid();

                            ?>
                            <div class="gridDiv">
                                <div class="image-description pull-left" style="margin-top:30px;">
                                    <div class="corner-image"></div>
                                    <div class="product-image" >

                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" />
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="description-div pull-left">
                                    <div class="row">
                                        <div class="size-div pull-left">
                                            <div class="first-div pull-left" title="Size">Size</div>
                                            <div class="second-div pull-left"> <?=$product['size']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Product ">Product </div>
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div>
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                            
                                            
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="ply-div pull-left">
                                            <div class="first-div pull-left">Description</div>
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>

                                            <div class="clear"></div>
                                        </div>
                                        <div class="localDC-div pull-left">
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="red-color-bold"><?=$product['fet']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Price</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold" style="color: #0015f9 !important;"><?=$product['avail1121420']?></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="fet-div pull-left">
                                            <div class="first-div pull-left cost-div ">Detail</div>
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div>-->
<!--                                            <div class="first-div pull-left">&nbsp;</div>-->
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div>
                                            <div class="first-div pull-left">&nbsp;</div>
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row list-view-last-row">
                                        <div class="rebate-div pull-left">
                                            
                                        <small style="color: red">This item is out of stock</small>
                                         </div>
                                        <div class="noreturn-div pull-left">
                                            <div class="noreturn-text-empty"></div>
                                        </div>
                                        <div class="add-to-cart-div text-center pull-left ">
                                            <span class="qty-content" id="add-to-cart-section-3842693">
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" disabled/>
                                            </span>
                                            <button class="btn" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" disabled> Add to cart </button>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <?php

                                        }
                                    }
                                }
                            }
                            ?>

                            <?php 
                            if (isset($productsTyreWise)) {
                                $counter = 500;
                                
                                                         
                                usort($productsTyreWise, 'sortByOrder');
                                foreach ($productsTyreWise as $product) {
                                     // echo "call";
                                    if(!empty($wheel_Finish)){
                                    if(strpos($product['description'], $wheel_Finish)){


                                    if ($product['avail1121420'] != 0 && $counter > 0) {
                                        $counter--;
                                    $rand = uniqid();
                                    $availqty = (int)$product['avail1121420'];
                                    $p = '';
                                    if($availqty >= 100){
                                        $p = "+";
                                        $avail = 200;
                                    }else if($availqty >= 50){
                                        $p = "+";
                                        $avail = 100;
                                    }else if($availqty > 30){
                                        $p = "+";
                                        $avail = 50;
                                    }else{
                                        
                                        $avail = $availqty;
                                    }
                                    
                                    
                                   
                            ?>
                            <div class="gridDiv" style="margin-left:20px;"> 
                                <div class="image-description pull-left " style="margin-top:30px;"> 
                                    <div class="corner-image"></div> 
                                    <div class="product-image" > 
                                     
                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" /> 
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a> 
                                    </div> 
                                </div> 
                                <div class="description-div pull-left" style="margin-top: 30px;"> 
                                    <div class="row"> 
                                        <div class="size-div pull-left"> 
                                            <div class="first-div pull-left" title="Size">Size</div> 
                                            <div class="second-div pull-left"> <?=$product['size']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Product ">Product </div> 
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div> 
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                             </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="ply-div pull-left"> 
                                            <div class="first-div pull-left">Description</div> 
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>
                        
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="localDC-div pull-left"> 
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="red-color-bold"><?=$product['fet']?></span> 
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Price</div> 
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold" style="color:#0015f9 !important;"><?=$avail?><?php echo $p?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="fet-div pull-left"> 
                                            <div class="first-div pull-left cost-div ">Detail</div> 
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div> -->
<!--                                            <div class="first-div pull-left">&nbsp;</div> -->
                                            <div class="second-div pull-left text-right cost-div"> 
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div> 
                                            <div class="first-div pull-left">&nbsp;</div> 
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="clear"></div> 
                                    </div> 
                                    <div class="row list-view-last-row"> 
                                        <div class="rebate-div pull-left"> </div> 
                                        <div class="noreturn-div pull-left"> 
                                            <div class="noreturn-text-empty"></div> 
                                        </div> 
                                        <div class="add-to-cart-div text-center pull-left "> 
                                            <span class="qty-content" id="add-to-cart-section-3842693"> 
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" avail="<?=$avail?><?php echo $pp ?>"  />
                                            </span> 
                                            <a class="button theme-color small" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" > Add to cart </a>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="clear"></div> 
                            </div> 
                            <?php
                            
                                    }
                                }
                            }else{


                                    if ($product['avail1121420'] != 0 && $counter > 0) {
                                        $counter--;
                                    $rand = uniqid();
                                    $availqty = (int)$product['avail1121420'];
                                    $p = '';
                                    if($availqty >= 100){
                                        $p = "+";
                                        $avail = 200;
                                    }else if($availqty >= 50){
                                        $p = "+";
                                        $avail = 100;
                                    }else if($availqty > 30){
                                        $p = "+";
                                        $avail = 50;
                                    }else{
                                        
                                        $avail = $availqty;
                                    }
                                    
                                    
                                   
                            ?>
                            <div class="gridDiv" style="margin-left:20px;"> 
                                <div class="image-description pull-left " style="margin-top:30px;"> 
                                    <div class="corner-image"></div> 
                                    <div class="product-image" > 
                                     
                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" /> 
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a> 
                                    </div> 
                                </div> 
                                <div class="description-div pull-left" style="margin-top: 30px;"> 
                                    <div class="row"> 
                                        <div class="size-div pull-left"> 
                                            <div class="first-div pull-left" title="Size">Size</div> 
                                            <div class="second-div pull-left"> <?=$product['size']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Product ">Product </div> 
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div> 
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                             </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="ply-div pull-left"> 
                                            <div class="first-div pull-left">Description</div> 
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>
                        
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="localDC-div pull-left"> 
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="red-color-bold"><?=$product['fet']?></span> 
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Price</div> 
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right"> 
                                                <span class="green-color-bold" style="color:#0015f9 !important;"><?=$avail?><?php echo $p?></span>
                                            </div> 
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="fet-div pull-left"> 
                                            <div class="first-div pull-left cost-div ">Detail</div> 
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div> -->
<!--                                            <div class="first-div pull-left">&nbsp;</div> -->
                                            <div class="second-div pull-left text-right cost-div"> 
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div> 
                                            <div class="first-div pull-left">&nbsp;</div> 
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div> 
                                        </div> 
                                        <div class="clear"></div> 
                                    </div> 
                                    <div class="row list-view-last-row"> 
                                        <div class="rebate-div pull-left"> </div> 
                                        <div class="noreturn-div pull-left"> 
                                            <div class="noreturn-text-empty"></div> 
                                        </div> 
                                        <div class="add-to-cart-div text-center pull-left "> 
                                            <span class="qty-content" id="add-to-cart-section-3842693"> 
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" avail="<?=$avail?><?php echo $pp ?>"  />
                                            </span> 
                                            <a class="button theme-color small" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" > Add to cart </a>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="clear"></div> 
                            </div> 
                            <?php
                            
                                    }
                                
                            }
                                }
                                
                                $counter = 30;
                                // function sortByOrder($a, $b) {
                                //     return $a['price'] - $b['price'];
                                // }
                                
                                // usort($productsTyreWise, 'sortByOrder');
                                foreach ($productsTyreWise as $product) {
                                    if(!empty($wheel_Finish)){
                                    if(strpos($product['description'], $wheel_Finish)){
                                    if ($product['avail1121420'] == 0 && $counter > 0) {
                                        $counter--;
                                        $rand = uniqid();

                            ?>
                            <div class="gridDiv">
                                <div class="image-description pull-left" style="margin-top:30px;">
                                    <div class="corner-image"></div>
                                    <div class="product-image" >

                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" />
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="description-div pull-left">
                                    <div class="row">
                                        <div class="size-div pull-left">
                                            <div class="first-div pull-left" title="Size">Size</div>
                                            <div class="second-div pull-left"> <?=$product['size']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Product ">Product </div>
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div>
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                            
                                            
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="ply-div pull-left">
                                            <div class="first-div pull-left">Description</div>
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>

                                            <div class="clear"></div>
                                        </div>
                                        <div class="localDC-div pull-left">
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="red-color-bold"><?=$product['fet']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Price</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold" style="color: #0015f9 !important;"><?=$product['avail1121420']?></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="fet-div pull-left">
                                            <div class="first-div pull-left cost-div ">Detail</div>
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div>-->
<!--                                            <div class="first-div pull-left">&nbsp;</div>-->
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div>
                                            <div class="first-div pull-left">&nbsp;</div>
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row list-view-last-row">
                                        <div class="rebate-div pull-left"> </div>
                                        <div class="noreturn-div pull-left">
                                            <div class="noreturn-text-empty"></div>
                                        </div>
                                        <div class="add-to-cart-div text-center pull-left ">
                                            <span class="qty-content" id="add-to-cart-section-3842693">
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" />
                                            </span>
                                            <a class="button theme-color small" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" > Add to cart </a>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <?php

                                    }
                                } 
                            }else{
                                if ($product['avail1121420'] == 0 && $counter > 0) {
                                        $counter--;
                                        $rand = uniqid();

                            ?>
                            <div class="gridDiv">
                                <div class="image-description pull-left" style="margin-top:30px;">
                                    <div class="corner-image"></div>
                                    <div class="product-image" >

                                        <a id="single_image" class="">
                                            <img src="<?=$product['image']?>" class="" onclick="showBox('<?=$product['image']?>')" style="height:auto;" />
                                            <span class="tooltiptext"><img src="<?=$product['image']?>" style="width: 200px;"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="description-div pull-left">
                                    <div class="row">
                                        <div class="size-div pull-left">
                                            <div class="first-div pull-left" title="Size">Size</div>
                                            <div class="second-div pull-left"> <?=$product['size']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Product ">Product </div>
                                            <div class="second-div pull-left"> <?=$product['catalog']?> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left" title="Manufacturer">Manufacturer</div>
                                            <div class="second-div pull-left"> <?//$product['brand']?>
                                            <?php
                                            $query = "SELECT * FROM tbl_brand";
                                            $resultB = $db->query($query);
                                            $checkB = false;
                                            while($rowB = $resultB->fetch_object()){
                                                if($product['brand'] == $rowB->brand){
                                                    
                                                    ?>
                                                    <img src="<?=$rowB->logo?>" width="100px">
                                                    <?php
                                                    $checkB = true;
                                                }
                                            }
                                            if($checkB == false){
                                                echo $product['brand'];
                                            }
                                            ?>
                                            
                                            
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="ply-div pull-left">
                                            <div class="first-div pull-left">Description</div>
                                            <div class="second-div pull-left"><?=$product['description']?></div>
                                            <div class="first-div pull-left" title="Avail"></div>
                                            <div class="second-div pull-left"></div>

                                            <div class="clear"></div>
                                        </div>
                                        <div class="localDC-div pull-left">
                                            <div class="first-div pull-left"> </div>
                                            <div class="second-div pull-left text-right"> </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">FET</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="red-color-bold"><?=$product['fet']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Price</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold">$<?=$product['price']?></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="first-div pull-left">Avail</div>
                                            <div class="second-div pull-left text-right">
                                                <span class="green-color-bold" style="color: #0015f9 !important;"><?=$product['avail1121420']?></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="fet-div pull-left">
                                            <div class="first-div pull-left cost-div ">Detail</div>
<!--                                            <div class="second-div pull-left text-right cost-div ">-->
<!--                                                <a target="_blank" href="--><?//=$product['website']?><!--">Website</a>-->
<!--                                            </div>-->
<!--                                            <div class="first-div pull-left">&nbsp;</div>-->
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="<?=$product['youtube']?>">Catalog</a>
                                            </div>
                                            <div class="first-div pull-left">&nbsp;</div>
                                            <div class="second-div pull-left text-right cost-div">
                                                <a target="_blank" href="product_comparsion.php?p=<?=$product['price']?>">Compare</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row list-view-last-row">
                                        <div class="rebate-div pull-left">
                                            
                                        <small style="color: red">This item is out of stock</small>
                                         </div>
                                        <div class="noreturn-div pull-left">
                                            <div class="noreturn-text-empty"></div>
                                        </div>
                                        <div class="add-to-cart-div text-center pull-left ">
                                            <span class="qty-content" id="add-to-cart-section-3842693">
                                                <input type="text"  placeholder="Qty" class="inputQuantity<?=$rand?>" name="quantity" id="<?=$product['catalog']?>,<?=$product['price']?>" data-id="<?=$rand?>" disabled/>
                                            </span>
                                            <button class="btn" id="add-to-cart-button<?=$rand?>" onclick="addToCart('<?=$rand?>');" disabled> Add to cart </button>
                                            <a href="#" id="ok<?=$rand?>" style="color: green; font-size: 18px; display: none;"><i class="fa fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <?php

                                        }
                                    }
                                }
                            }
                            ?>

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
        top: 10%;
        left: 35%;
        right: 30%;
        z-index: 999;
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
    if(qty > 20){
        alert("You can add only 20 items in one order.");
        return;
    }
    if(avail == 0){
        alert("This item is out of stock.");
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
</script>
