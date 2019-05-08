<?php 
include 'config.php';
session_start();
if (isset($_POST['text'])) {
	$name 	= $_POST['name'];
	$email 	= $_POST['email'];
	$text 	= $_POST['text'];
	$query 	= "INSERT INTO `login`(`name`,`email`,`username`,`user_type`,`status`) VALUES ('$name','$email','$name','3','0')";
    //if ($inq = $db->query($query)) {
        $result = $db->query($query);
        $id = $db->insert_id;
        $sub_query = "
                  INSERT INTO login_details 
                    (user_id) 
                    VALUES ('".$id."')
                  ";
        if($db->query($sub_query)){
            $_SESSION['login_details_id'] = $db->insert_id;
            $q = "INSERT INTO chat_message (to_user_id, from_user_id, chat_message, status) VALUES ('','$id','$text','1')";
            $db->query($q);
            $_SESSION['status_id'] = $id;
            $_SESSION['user_id'] = $id;
            $message = "success";
            echo $message;
            $_SESSION['chating'] = "yes";
        }else{
            $message = "error";
            echo $message;
        }
}
if (isset($_GET['check'])) {
    $id = $_SESSION['status_id'];
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
            }
        }
        echo $res;
    }else{
        echo "waiting";
    }
}
?>