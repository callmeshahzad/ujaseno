<?php

class NexmoService
{
    public function SendSMS($to,$text){
        $postdata = http_build_query(
            array(
                'from' => "WTD USA",
                'to' => $to,
                'text' => $text,
                'api_key' => 'c05087e3',
                'api_secret' => '71UOXqFBdmF4FZdT',
            )
        );
        
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        
        $context  = stream_context_create($opts);
        
        $response = file_get_contents('https://rest.nexmo.com/sms/json', false, $context);
        print_r($response);
        $result = json_decode($response, true);
        // echo $result;
    }
}
//Demo Object
$nexmoService=new NexmoService();
$nexmoService->SendSMS("16232258625","Testing Message");
echo "Sended";
?>