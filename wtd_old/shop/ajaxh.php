<?php
include "../config.php";
session_start();
$email = $_SESSION['email'];

if(isset($_GET['h'])){
    $history = $_GET['h'];
    $query = "INSERT INTO `tbl_search_history`(`user_email`, `search_history`) VALUES('$email','$history')";
    $res = $db->query($query);
    if ($res) {
        echo "success";
    }else{
        echo "not";
    }
}
?>