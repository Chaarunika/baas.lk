<?php

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://baas.lk/serverip.php"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch);      
curl_close($ch);   

$ch = curl_init();   
$gatewayURL =    "http://".$output.":9090/sendsms?phone=712310111&text=දස්කම්&password=123456";
curl_setopt($ch, CURLOPT_URL, $gatewayURL);   
$output = curl_exec($ch);        
curl_close($ch);  

 ?>