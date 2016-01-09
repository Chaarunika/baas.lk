
<?php 

        for($i=0;$i<3;$i++){
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://baas.lk/serverip.php"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
        //echo   $output;



        // close curl resource to free up system resources 
        curl_close($ch);   
      


        $ch = curl_init();      
        curl_setopt($ch, CURLOPT_URL, "http://".$output.":9090/sendsms?phone=0712310111&text=ssdsdsdaasdad&password=123456"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        echo   $output;
        curl_close($ch);      
}

         

       
       
       

?>