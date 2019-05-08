<?php 
include '../config.php';

// $_POST['email'] = "mail@gmail.com";
// $_POST['name'] = "test";
// $_POST['text'] = "message kasjdfa";

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