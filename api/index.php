<?php

include_once 'config.php';
$url = 'https://portfolio.wrkva.xyz/laravel-crud/crudApp/Api/Response/d?key='.$key.'&to='.$secret;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_POSTFIELDS , array('username' => 'mayur'));
$response = curl_exec($ch);

curl_close($ch);
$response = json_decode(($response),true);

if(isset($response["Result"]))
    {
        if($response['Result']=="Success")
        {
            echo "<pre>";
            print_r($response['users']);
        }else{
            echo "Unauthorize Connection.";
        }
    }else
    {
        echo "Something went wrong, Please validate your Key or secret Salt.";
    }
?>