<?php
$msg = '';


require 'twilio-service/Twilio/autoload.php';
use Twilio\Rest\Client;
require 'admin/Mail/Mailer.php';
// if (count($_POST) > 0) {
// session_start();
// if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {

$sid = 'AC0ed8e4fa399ae6e009350bdf5f008553';
$token = '72d3707f90924e61b4ded7aa3d939803';
$client = new Client($sid, $token);

if (count($_POST) > 6
    && isset($_POST['email'])
    && isset($_POST['businessname'])
    && isset($_POST['name'])
    && isset($_POST['license'])
    && isset($_POST['city'])
    && isset($_POST['state'])
    && isset($_POST['question'])) {

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

    $mailer = new Mailer();
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Business Name: " . $_POST['businessname'] . "\n";
    $message .= "Phone No: " . $_POST['phone'] . "\n";
    $message .= "License: " . $_POST['license'] . "\n";
    $message .= "City: " . $_POST['city'] . "\n";
    $message .= "State: " . $_POST['state'] . "\n";
    $message .= "Question: " . $_POST['question'] . "\n";
    // $message = '<html><body>';
    // $message = '<h4>Dealer Application Request</h4>';
    // $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    // $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    // $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    // $message .= "<tr><td><strong>Business Name:</strong> </td><td>" . strip_tags($_POST['businessname']) . "</td></tr>";
    // $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
    // $message .= "<tr><td><strong>License:</strong> </td><td>" . strip_tags($_POST['license']) . "</td></tr>";
    // $message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
    // $message .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($_POST['state']) . "</td></tr>";
    // $message .= "<tr><td><strong>Question:</strong> </td><td>" . strip_tags($_POST['question']) . "</td></tr>";
    // $message .= "</table>";
    // $message .= "</body></html>";
    // $mailer->sendme("Dealer Application Request",$message);
    $mailer->send($_POST['email'] . ", Liz@wtdusaonline.com, waseem@wtdusaonline.com, wdtusaonline@gmail.com, callmeshahzad@gmail.com", "Dealer Application Request Received", $message);
    //  $mailer->send($_POST['email'] . ", qaxubu@getnada.com, bhatti9t7@gmail.com", "Dealer Application Request Received", $message);
    
    $client->messages->create(
        // the number you'd like to send the message to
        "+16232258625",
        array(
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+12563776976',
            // the body of the text message you'd like to send
            'body' => $message
        )
    );
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

if (isset($_POST['phonecall'])&&isset($_POST['name'])) {
    $name = $_POST['name'];
    $phone = $_POST['phonecall'];

    $subject = 'Dealer Call Back Request';

    // $headers = "From: " . $tooo . "\r\n";
    // $headers .= "Reply-To: " . $tooo . "\r\n";
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

    $message1 = "Name: " . $_POST['name'] . "\n";
    $message1 = "Phone: " . $_POST['phonecall'] . "\n";
    $mailer->send($_POST['email'] . ", Liz@wtdusaonline.com, waseem@wtdusaonline.com, wdtusaonline@gmail.com, callmeshahzad@gmail.com", "Dealer Call Back Request Received", $message);
    $client->messages->create(
        // the number you'd like to send the message to
        "+16232258625",
        array(
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+12563776976',
            // the body of the text message you'd like to send
            'body' => $message1
        )
    );
    header("location:about.php");

}

if (isset($_POST['message'])&&isset($_POST['email'])&&isset($_POST['name'])&&isset($_POST['subject'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msgg = $_POST['message'];
    //$subject = 'Dealer Application Request';

    // $headers = "From: " . $email . "\r\n";
    // $headers .= "Reply-To: " . $email . "\r\n";
    // // $headers .= "CC: susan@example.com\r\n";
    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message = '<h4>Message Request</h4>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $message .= "<tr><td><strong></strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    
    $message1 = "Name: " . $_POST['name'] . "\n";
    $message1 = "Message: " . $_POST['message'] . "\n";
    $client->messages->create(
        // the number you'd like to send the message to
        "+16232258625",
        array(
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+12563776976',
            // the body of the text message you'd like to send
            'body' => $message1
        )
    );
    $mailer->send($_POST['email'] . ", Liz@wtdusaonline.com, waseem@wtdusaonline.com, wdtusaonline@gmail.com, callmeshahzad@gmail.com", "Message Request Received", $message);
    header("location:index.php?msg=success");
}
// }
