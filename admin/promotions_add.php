<?php include "header.php"; ?>   
<?php 
$message = '';
if (isset($_POST['type'])) {
    $type = $_POST['type'];
    $promotion = $_POST['promotion'];
    foreach ($promotion as $pro) {
        $query = "INSERT INTO `tbl_promotion_catalogs_temp`(`promotion_id`, `catalog`, `status`) VALUES('$type','$pro','1')";
        $db->query($query); 
    }

    $message = "success";
    header("location:preview_list.php");

}
?>
<div class="content">
    <div class="container-fluid">
       
        <h4>Promotions</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <div class="form-group">
                    <label>Search Product</label>
                    <input type="text" name="search" id="search" class="form-control">
                </div>    
            </div>
            
        </div>
        <form action="" method="post">
        <h6><a href="promotions_list.php">Promotions Products List</a> </h6>
        <?php 
            if (isset($_GET['search'])) {
        ?>
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <?php 
                if ($message == "success") {
                ?>
                <label class="label label-success">Added to Promotions Successfully</label>
                <?php
                }
                ?>
                
                <div class="col-sm-6">
                    <select name="type" class="form-control" required>
                        <option value="">Select Promotion Type</option>
                        <?php 
                        $q = "SELECT * FROM tbl_promotions";
                        $r = $db->query($q);
                        if($r->num_rows > 0 ){
                            while ($row = $r->fetch_object()) {
                                echo '<option value="'.$row->id.'">'.$row->title.'</option>';
                            }
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info">Preview Promotion</button>
                </div>
            </div>
        </div>
        <?php 
        }
            ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Size </th>
                <th>Product</th>
                <th>Manufacturer</th>
                <th>QTY</th>
                <th>description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $search = str_replace(' ', '%20', $search);
            $type = substr($search,0,strpos($search,'=')+2);

            $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?".$search;
            $username = "khurram@esspk.com-96";
            $password = "esspk91 ";

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


        if (!empty($products)) {
            $counter = 500;
            
            function sortByOrder($a, $b) {
                return $a['price'] - $b['price'];
            }
            
            usort($products, 'sortByOrder');
            foreach ($products as $product) {
               // if ($product['avail1121420'] != 0 && $counter > 0) {
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
            <tr>
               <td><img src="<?=$product['image']?>" class="" style="width:65px;height:auto;" /></td>
               <td><?=$product['size']?></td>
               <td><?=$product['catalog']?></td>
               <td><?=$product['brand']?></td>
               <td><?=$product['avail1121420']?></td>
               <td><?=$product['description']?></td>
               <td><label><input type="checkbox" name="promotion[]" value="<?=$product['catalog']?>"> Add TO Promotion</label></td>
           </tr>

            <?php

                //}
            }
        }


        ?>
           
            
        </tbody>
        
    </table>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>   
<script type="text/javascript">
$("#search").on('keypress',function (e) {
    if(e.which == 13) {
        var val = $("#search").val();
        if(val != ''){
            window.location.href="promotions_add.php?search=Search="+val;
        }
    }
});
</script>