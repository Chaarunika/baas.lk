<?php 
// send message to bid owner
$id=$_GET['id'];


            $ch = curl_init();   
            //$gatewayURL =    "http://".$output.":9090/sendsms?phone=".$row['contactNo']."&text=baas.lk%0a".urlencode($jobDesc)."%0aAddress+:+".urlencode($jobAddress).",+".urldecode($jobArea).".%0a%0acall++".urlencode($jobTel)."%0a"."&password=123456";
            $textitURL = "http://www.textit.biz/sendmsg/index.php?id=94776014365&password=6065&text=janith&to=$id";
      
            curl_setopt($ch, CURLOPT_URL, $textitURL); 
            $output = curl_exec($ch);          
            curl_close($ch);   
   

?>