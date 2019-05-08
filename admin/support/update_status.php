<?php

//database_connection.php
// $connect = new PDO("mysql:host=localhost;dbname=wtd;charset=utf8mb4", "root", "");
// $connect = new PDO("mysql:host=localhost;dbname=wtd;charset=utf8mb4", "root", "");
$connect = new PDO("mysql:host=localhost;dbname=wtdusao2_wtdusa;charset=utf8mb4", "wtdusao2_wtdusa", "WWaTSeSaO]d9");

date_default_timezone_set('America/Phoenix');
session_start();
if (isset($_POST['to_user_id'])) {
	$to_user_id = $_POST['to_user_id'];
	$from_user_id = $_SESSION['user_id'];
	$query = "
	UPDATE login 
	SET status = '1',chat_status = '1'
	WHERE user_id = '".$to_user_id."'";
	$statement = $connect->prepare($query);
	$statement->execute();

	$query = "
	UPDATE chat_message 
	SET status = '0', to_user_id = '".$from_user_id."'
	WHERE from_user_id = '".$to_user_id."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	echo  "success";
}


?>