<?php

if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    //  $email = "khurram@esspk.com";
    // $pass = "esspk91";
     if(isset($_REQUEST['search'])){
      $search = $_REQUEST['search'];
     }else{
         $search = '';
     }

    $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?".$search;
    $username = $email."-96";
    $password = $pass;

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
    $arrr = array();
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
            array_push($arrr,$data);
        }




        $counter++;
    }

    if(curl_errno($process)){
        //If an error occured, throw an Exception.
        throw new Exception(curl_error($ch));
    }
    curl_close($process);

    echo json_encode($arrr);

}


?>