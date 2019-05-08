<?php
include "../config.php";
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
		$check = 0;
//		foreach ($cartArr as $key $val){
//
//		    if ($key == 'catalog' && $val == $productID){
//		        $cart['qty'] = 0;
//		        //$_SESSION['cart'] = $cartArr;
//                $check = 1;
//                print_r($cartArr);
//
//            }
//        }
        array_push($cartArr,$data);
        $_SESSION['cart'] = $cartArr;
//        print_r($cartArr);
//        if($check == 0){
//            array_push($cartArr,$data);
//            $_SESSION['cart'] = $cartArr;
//        }else{
//            $_SESSION['cart'] = $cartArr;
//        }
	}else{
		array_push($arr,$data);
		$_SESSION['cart'] = $arr;
	}


//	print_r($_SESSION['cart']);
	echo "success";

}

if (isset($_GET['updateorder']))
{
    $indexNo = $_GET['index'];
    $newQty = $_GET['qty'];
    $_SESSION['cart'][$indexNo]['qty'] = $newQty;
    $newTotalPrice = $newQty * $_GET['price'];
//    echo $newTotalPrice;
    $res = newPriceCalculation();
    echo $res."total".$newTotalPrice;
//    print_r($_SESSION['cart'][$indexNo]['qty']);

}

if (isset($_GET['remove'])){
    $indexNo = $_GET['index'];
    $arr = $_SESSION['cart'];
//    unset($arr[$indexNo]);
    array_splice($arr,$indexNo,1);
    $_SESSION['cart'] = $arr;
    $res = newPriceCalculation();
    echo $res;
}


function newPriceCalculation(){
    $orderList = $_SESSION['cart'];
    $subTotal = 0;
    foreach ($orderList as $order){
        $total = $order['qty'] * $order['price'];
        $subTotal += $total;
    }
    $shiping = 0;
    $netTotal = $subTotal + $shiping;
    return "netTotal".$netTotal."subTotal".$subTotal;
}
if(isset($_GET['order'])){
	$orders = $_SESSION['cart'];
	$catalogs = '';
	$qty = '';
	$check = 0;
    $po = '';
    $comment = '';
    $opo = '';
    $ocomment = '';
    if (isset($_GET['po'])){
        $po = "&PONumber=".$_GET['po'];
        $opo = $_GET['po'];
    }
    if (isset($_GET['comment'])){
        $comment = "&Comment=".$_GET['comment'];
        $ocomment = $_GET['comment'];
    }

    $email = $_SESSION['email'];
    $query = "INSERT INTO `tbl_order`(`user_email`,`po_no`,`comments`) VALUES ('$email','$opo','$ocomment')";
    $result = $db->query($query);
    $orderID = $db->insert_id;

    $qtyTotalPrice = 0;
    $totalPrice = 0;
//    print_r($orders);
	foreach ($orders as $order) {
	    if ($order['qty'] > 0){
            if($check == 0){
                $catalogs .= $order['catalog'];
                $qty .= $order['qty'];
            }else{
                $catalogs .= ",".$order['catalog'];
                $qty .= ",".$order['qty'];
            }
            $catalog = $order['catalog'];
            $price = $order['price'];
            $oqty = $order['qty'];
            $qtyTotalPrice = $price * $oqty;
            $totalPrice += $qtyTotalPrice;
            $query = "INSERT INTO `tbl_order_detail`(`order_id`, `catalog`, `qty`, `single_price`, `total_qty_price`) VALUES('$orderID','$catalog','$oqty','$price','$qtyTotalPrice') ";
            $db->query($query);
        }
        $check = 1;
	}

	$query = "UPDATE `tbl_order` SET `bill_amount`='$totalPrice' WHERE id='$orderID'";
	$db->query($query);

	$url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/PlaceOrder?OrderCatalogs=".$catalogs."&OrderQuantities=".$qty.$po.$comment;
    $url = str_replace(" ", '%20', $url);
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
    unset($_SESSION['cart']);
	echo $return;
	if(curl_errno($process)){
	    //If an error occured, throw an Exception.
	    throw new Exception(curl_error($ch));
	}
	curl_close($process);
}






?>