<?php

$url = 'https://portfolio.wrkva.xyz/laravel-crud/crudApp/login/Api/Response/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>