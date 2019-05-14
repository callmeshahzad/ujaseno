<?php
require_once "Mail.php";
class Mailer
{
    public function send($to, $subject, $body)
    {
        $from = 'noreplywtdusaonline@gmail.com'; //change this to your email address
        
        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject
        );

        $smtp = Mail::factory('smtp', array(
                'host' => 'smtp.gmail.com',
                'port' => '587',
                'auth' => true,
                'username' => $from, //your gmail account
                'password' => 'Fifa1234!' // your password
            ));

        // Send the mail
        $mail = $smtp->send($to, $headers, $body);

    }

  

}
