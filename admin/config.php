<?php 

// $host 	= "localhost";
// $dbName = "wtd";
// $user 	= "root";
// $pass 	= "";

// $host 	= "192.168.10.7:8080";
// $dbName = "wtd";
// $user 	= "root";
// $pass 	= "";


$host 	= "localhost";
$dbName = "wtdusao2_wtdusa";
$user 	= "wtdusao2_wtdusa";
$pass 	= "WWaTSeSaO]d9";

$db = new mysqli($host,$user,$pass,$dbName);
session_start();
ob_start();
?>