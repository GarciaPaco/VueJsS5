<?php

$getCountriesURL = 'https://restcountries.eu/rest/v2/all';
curl_init($getCountriesURL);
curl_setopt($getCountriesURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($getCountriesURL, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$response = curl_exec($getCountriesURL);
curl_close($getCountriesURL);
$tabCountries = json_decode($response, true);
// var_dump($tabCountries);