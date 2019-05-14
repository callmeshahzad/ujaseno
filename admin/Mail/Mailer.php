<?php
require_once "Mail.php";
class Mailer
{
    public function send($to, $subject, $body)
    {
        $from = 'foremail@wtdusaonline.net'; //change this to your email address
        
        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject
        );

        $smtp = Mail::factory('smtp', array(
                'host' => 'mail.wtdusaonline.net',
                'port' => '25',
                'auth' => true,
                'username' => $from, //your gmail account
                'password' => 'Pakistan@4646' // your password
            ));

        // Send the mail
        $mail = $smtp->send($to, $headers, $body);

    }

    public function sendme( $subject, $body)
    {
        $from = 'foremail@wtdusaonline.net'; //change this to your email address
        
        $headers = array(
            'From' => $from,
            'To' => $from,
            'Subject' => $subject
        );

        $smtp = Mail::factory('smtp', array(
            'host' => 'mail.wtdusaonline.net',
            'port' => '25',
            'auth' => true,
            'username' => $from, //your gmail account
            'password' => 'Pakistan@4646' // your password
        ));
        // Send the mail
        $mail = $smtp->send($from, $headers, $body);

    }

}
