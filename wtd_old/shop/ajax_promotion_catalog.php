<?php 
include '../session.php';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $search = str_replace(' ', '%20', $search);

   $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?".$search;

$username = $_SESSION['email']."-96";
$password = $_SESSION['password'];

$process = curl_init();
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
$products = array();
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

foreach ($arr as $ar) {
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
        $result = $db->query($query);
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
        array_push($products,$data);
    }   
    $counter++;
}
if(curl_errno($process)){
    throw new Exception(curl_error($ch));
}
curl_close($process);
}
?>

<?php 
                            if (!empty($products)) {
                                $counter = 500;
                                
                                function sortByOrder($a, $b) {
                                    return $a['price'] - $b['price'];
                                }
                                
                                usort($products, 'sortByOrder');
                                foreach ($products as $product) {
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
                                
                                $counter = 30;
                                // function sortByOrder($a, $b) {
                                //     return $a['price'] - $b['price'];
                                // }
                                
                                // usort($products, 'sortByOrder');
                                foreach ($products as $product) {
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
                            }
                            ?>