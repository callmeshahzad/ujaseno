<?php 
include '../config.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization, X-Auth-Token');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
// $_POST['email'] = "mail@gmail.com";
// $_POST['name'] = "test";
// $_POST['text'] = "message kasjdfa";
require '../twilio-service/Twilio/autoload.php';
use Twilio\Rest\Client;
$sid = 'AC0ed8e4fa399ae6e009350bdf5f008553';
$token = '72d3707f90924e61b4ded7aa3d939803';
$client = new Client($sid, $token);
if (isset($_POST['email'])) {
	$name 	= $_POST['name'];
	$email 	= $_POST['email'];
	$text 	= $_POST['text'];
	$query 	= "INSERT INTO `login`(`name`,`email`,`username`,`user_type`,`status`) VALUES ('$name','$email','$name','3','0')";
    //if ($inq = $db->query($query)) {
        $result = $db->query($query);
        $id = $db->insert_id;
        $data['response'] = "success";
        // echo $id = 11;
        $sub_query = "INSERT INTO login_details 
                    (user_id) 
                    VALUES ('".$id."')
                  ";
        if($db->query($sub_query)){
            $_SESSION['login_details_id'] = $db->insert_id;
            $q = "INSERT INTO chat_message (to_user_id, from_user_id, chat_message, status) VALUES ('0','$id','$text','1')";
            $db->query($q);
            // $data['from_user_id'] = $id;
            $data['response'] = "success";
            $data['user_id'] = $id;
            $client->messages->create(
                // the number you'd like to send the message to
                "+923230117193",
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+12563776976',
                    // the body of the text message you'd like to send
                    'body' => $_POST['name']." is trying to chat with WTD sales representative. Please follow the link to start the chat. http://wtdusaonline.net/admin/support.php"
                )
            );
            
            // $_SESSION['chating'] = "yes";
        }else{
            $data['response'] = "error";
            
        }
        
        echo json_encode($data);
}


if (isset($_REQUEST['check'])) {
    $id = $_REQUEST['user_id'];
    $query = "SELECT * FROM login WHERE user_id='$id' AND status = 1";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        $query = "SELECT * FROM chat_message WHERE from_user_id=$id";
        $result = $db->query($query);
        if ($result->num_rows > 0 ) {
            $row = $result->fetch_object();
            $to_user_id = $row->to_user_id;
            $query = "SELECT * FROM login WHERE user_id='$to_user_id'";
            $result = $db->query($query);
            if ($result->num_rows > 0 ) {
                $row = $result->fetch_object();
                $res = $row->user_id."u".$row->username;
                $data['response'] = "connected";
                $data['to_user_id'] = $row->user_id;
                $data['to_user_name'] = $row->username;
            }
        }
        // echo $res;
        
    }else{
        // echo "waiting";
        $data['response'] = "waiting";
    }
    echo json_encode($data);
}


?>