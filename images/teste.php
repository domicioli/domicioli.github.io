<?php

$url = "https://mentalidadeempreendedora.api-us1.com";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, "Api-Token", "62cdeba26ab3e37f3921bf964a74c05a40bfa5cbf0e552354083827431063030a104040f");
$result = curl_exec($ch); 
echo $result;  
  
?> 