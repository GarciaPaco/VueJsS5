<?php
$url_countries_flag = "https://restcountries.com/v3.1/all";
$flag = file_get_contents($url_countries_flag)."\n";
$flag = json_decode($flag, true);
$flagCache = [];
foreach ($flag as $key => $value) {
    $flagCache[$value['name']['common']] = $value['flags']['png']."\n";
    $urlflags= file_get_contents($value['flags']['png'])."\n";
    echo $value['flags']['png']."\n";
}
