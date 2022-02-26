<?php
$key = '1214Mr9onMRUBjLRKnAUSrYNzZu9O9YV6J0h4gXHCU7K621a3daaa1616';
$url = 'https://portfolio.wrkva.xyz/laravel-crud/crudApp/Api/Response/'.$key;
// echo $url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>