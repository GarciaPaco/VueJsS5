<?php

$url_countries = "https://restcountries.com/v3.1/all";
$query = curl_init($url_countries);
curl_setopt($query, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($query, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($query, CURLOPT_SSL_VERIFYHOST, 0);
$result = curl_exec($query);
if(curl_error($query)){
    echo curl_error($query);
}else{
    file_put_contents("countries.json", $result);
}
echo "Script terminé";
curl_close($query);
