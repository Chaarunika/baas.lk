<?php
         echo "<input style='z-index:15;margin:0px;padding:0px' id='input-2c' name='rating' class='rating' min='0' max='5' step='0.1' data-size='xs' 
        value= ";
        
        if(isset($row['rating'] )){
          echo $row['rating'];
        } 
        elseif(isset($appointment['feedback'])){       
          echo $appointment['feedback'];
        } 
        
        elseif(isset($row4['rating'])){       
          echo $row4['rating'];
        }
        else{
        	echo 0;
        }
      echo " data-symbol='&#xf005;' data-glyphicon='false' data-rating-class='rating-fa' readonly> ";
   
?>