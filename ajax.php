<?php 
session_start();
if (isset($_GET['pid'])) {
	$pid = $_GET['pid'];
	$qty = $_GET['qty'];
	$productID = substr($pid,0,strpos($pid,','));
	$price = substr($pid,strpos($pid,',')+1);
	$data['catalog'] = $productID;
	$data['price'] = $price;
	$data['qty'] = $qty;
	// echo "PID:".$productID;
	// echo "PRICE:".$price;
	// echo "QTY:".$qty;
	$arr = array();
	if (isset($_SESSION['cart'])) {
		$cartArr = $_SESSION['cart'];
		array_push($cartArr,$data);
		$_SESSION['cart'] = $cartArr;
	}else{
		array_push($arr,$data);
		$_SESSION['cart'] = $arr;
	}
	echo "success";

}


if(isset($_GET['order'])){
	$orders = $_SESSION['cart'];
	$catalogs = '';
	$qty = '';
	$check = 0;
	foreach ($orders as $order) {
		if($check == 0){
			$catalogs .= $order['catalog'];
			$qty .= $order['qty'];
		}else{
			$catalogs .= ",".$order['catalog'];
			$qty .= ",".$order['qty'];
		}
		
	}

	$url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/PlaceOrder?OrderCatalogs=".$catalogs."&OrderQuantities=".$qty;
	$username = "khurram@esspk.com-96";
	$password = "esspk91";

	$additionalHeaders = array(
	    'Content-Type:text/html',
	    'Authorization: Basic '. base64_encode("user:password") // <---
	);
	$process = curl_init();
	// curl_setopt($process, CURLOPT_HTTPHEADER, $additionalHeaders);
	// curl_setopt($process, CURLOPT_HEADER, 1);
	curl_setopt($process, CURLOPT_URL, $url);
	curl_setopt($process, CURLOPT_TIMEOUT, 300000);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($process, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
	curl_setopt($process, CURLOPT_FOLLOWLOCATION,TRUE);
	curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
	curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	$return = curl_exec($process);
	$info = curl_getinfo($process);
	echo $return;
	if(curl_errno($process)){
	    //If an error occured, throw an Exception.
	    throw new Exception(curl_error($ch));
	}
	curl_close($process);
}



?>