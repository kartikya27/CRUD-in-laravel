<?php
$key = '1214Mr9onMRUBjLRKnAUSrYNzZu9O9YV6J0h4gXHCU7K621a3daaa1616';
$url = 'https://portfolio.wrkva.xyz/laravel-crud/crudApp/Api/Response/'.$key;
// echo $url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$response = curl_exec($ch);
curl_close($ch);
echo ($response);



?>
