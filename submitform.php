<?php
$msg = '';

require 'admin/Mail/Mailer.php';
if (count($_POST) > 0) {
	// session_start();
    // if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
        if (isset($_POST['email'])) {
            $name = $_POST['name'];
            $businessname = $_POST['businessname'];
            $email = $_POST['email'];
            $license = $_POST['license'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $question = $_POST['question'];

            // $to = 'Liz@wtdusaonline.com, waseem@wtdusaonline.com, umer@esspk.com, idohuquhac@robot-mail.com';

            // $subject = 'Dealer Application Request';

            // $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
            // $headers .= "Reply-To: " . strip_tags($_POST['email']) . "\r\n";
            // // $headers .= "CC: susan@example.com\r\n";
            // $headers .= "MIME-Version: 1.0\r\n";
            // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            

            $mailer=new Mailer();
            $message = '<html><body>';
            $message = '<h4>Dealer Application Request</h4>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
            $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
            $message .= "<tr><td><strong>Business Name:</strong> </td><td>" . strip_tags($_POST['businessname']) . "</td></tr>";
            $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
            $message .= "<tr><td><strong>License:</strong> </td><td>" . strip_tags($_POST['license']) . "</td></tr>";
            $message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
            $message .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($_POST['state']) . "</td></tr>";
            $message .= "<tr><td><strong>Question:</strong> </td><td>" . strip_tags($_POST['question']) . "</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            $mailer->sendme("Dealer Application Request",$message);
            $mailer->send($_POST['email'],"Dealer Application Request");
            $msg = "success";
            header("location:index.php?msg=success");

            // if (mail($to, $subject, $message, $headers)) {
            //     $msg = "success";
            // } else {
            //     $msg = "error";
            // }
            // header("location:index.php?msg=success");
        }

      
    // } else {
    //     header("location:index.php?error_message=captcha");
	// }
	
	 if (isset($_POST['phonecall'])) {
            $name = $_POST['name'];
            $phone = $_POST['phonecall'];
            $tooo = 'info@wtdusaonline.com';
            $to = 'Liz@wtdusaonline.com, waseem@wtdusaonline.com';

            $subject = 'Dealer Application Request';

            $headers = "From: " . $tooo . "\r\n";
            $headers .= "Reply-To: " . $tooo . "\r\n";
            // $headers .= "CC: susan@example.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $message = '<html><body>';
            $message = '<h4>Dealer Call Bcak Request</h4>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
            $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phonecall']) . "</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            if (mail($to, $subject, $message, $headers)) {
                $msg = "success";
            } else {
                $msg = "error";
            }
            header("location:about.php");

        }

        if (isset($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $msgg = $_POST['message'];
            $to = 'Liz@wtdusaonline.com, waseem@wtdusaonline.com';

            //$subject = 'Dealer Application Request';

            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            // $headers .= "CC: susan@example.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $message = '<html><body>';
            $message = '<h4>Dealer Call Bcak Request</h4>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
            $message .= "<tr><td><strong></strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            if (mail($to, $subject, $message, $headers)) {
                $msg = "success";
            } else {
                $msg = "error";
            }
            header("location:index.php");

        }
}
