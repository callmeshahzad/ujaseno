<?php

$url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?Search=valve";
$username = "Umer";
$password = "Malik";



// $url = 'http://www.example.com';
echo "<pre>";
print_r(get_headers($url));
exit();

$additionalHeaders = array(
    'Content-Type:text/html',
    'Authorization: Basic '. base64_encode("user:password") // <---
);
$process = curl_init();
// curl_setopt($process, CURLOPT_HTTPHEADER, $additionalHeaders);
// curl_setopt($process, CURLOPT_HEADER, 1);
curl_setopt($process, CURLOPT_URL, $url);
curl_setopt($process, CURLOPT_TIMEOUT, 300000);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($process, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($process, CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$return = curl_exec($process);
$info = curl_getinfo($process);
echo "<pre>";
print_r($return);
print_r($info);
if(curl_errno($process)){
    //If an error occured, throw an Exception.
    throw new Exception(curl_error($ch));
}
curl_close($process);


// if (!isset($_SERVER['PHP_AUTH_USER'])) {
//     header('WWW-Authenticate: Basic realm="My Realm"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Text to send if user hits Cancel button';
//     exit;
// } else {
//     echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//     echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
// }

/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
// echo "<pre>";
print_r($output);
curl_close($ch);
*/




?>