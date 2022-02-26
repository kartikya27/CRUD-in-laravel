<?php
$key = '1214Mr9onMRUBjLRKnAUSrYNzZu9O9YV6J0h4gXHCU7K621a3daaa1616';
$url = 'https://portfolio.wrkva.xyz/laravel-crud/crudApp/Api/Response/1214Mr9onMRUBjLRKnAUSrYNzZu9O9YV6J0h4gXHCU7K621a3daaa1616';
echo $url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) 
    $response = curl_error($ch);

echo stripslashes($response);

curl_close($ch);

?>