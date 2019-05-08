<?php 

include '../config.php';

if (isset($_REQUEST['user_id'])) {
    
	$userID = $_REQUEST['user_id'];
	$toUserID = $_REQUEST['to_user_id'];

	$query = "
	SELECT * FROM chat_message 
	WHERE (from_user_id = '".$userID."' 
	AND to_user_id = '".$toUserID."') 
	OR (from_user_id = '".$toUserID."' 
	AND to_user_id = '".$userID."') 
	ORDER BY timestamp ASC
	";

	$result = $db->query($query);
	$data = array();
	if($result->num_rows > 0){
		
		while ($row = $result->fetch_object()) {
			array_push($data,$row);
		}
	}else{
	    $data['res'] = "empty";
	}
	echo json_encode($data);
}

if (isset($_POST['message'])) {
	$fUserID = $_POST['f_user_id'];
	$tUserID = $_POST['t_user_id'];
	$message = $_POST['message'];

	$query = "INSERT INTO chat_message (to_user_id, from_user_id, chat_message, status) VALUES ('$tUserID','$fUserID','$message','1')";
	$result = $db->query($query);
	if($result){
		$data['response'] = "success";
	}else{
		$data['response'] = "error";
	}

	echo json_encode($data);
}




?>