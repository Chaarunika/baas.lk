
  <?php 
  //include_once('_database/database.php'); 
  //include_once('functions/functions.php');

  if( $_SESSION['Catagory']== "customer"){  
      $resultAuc = get_recent_auction_details();

      if (mysqli_num_rows($resultAuc) > 0) {
        // output data of each row
        echo "<div class='owl-carousel' id='owl-demo'>";
        while($row1 = mysqli_fetch_assoc($resultAuc)) {

          $date= strtotime($row1['closingtime']);
          $remaining = $date - time();
          $days_remaining = floor($remaining / 86400);
          $hours_remaining = floor(($remaining % 86400) / 3600);
          $minutes_remaining = floor((($remaining % 86400) % 3600)/60);
          $seconds_remaining = floor(((($remaining % 86400) % 3600)%60));
            
          $post = "<div class='item'>";
          $post .= "<b><span style='color:rgba(51,51,51,0.8);padding:5px;text-align:center;position:absolute;left:5%;background-color:#c9d8c5; width:85%'>".$row1['biditem']."</span><br></b><br>";
          //$post .= JOBLOCATION." : ".$row1['biddesc']." <br> ".JOBCONTACT." :0{$row1['tel_num']}";
          //$post .= "Location : {$row['address']} <br>";     
          $post .= "<br><p> {$row1['biddesc']} </p>";          
          $post .= $hours_remaining." hours ".$minutes_remaining." days ".$seconds_remaining .' minutes'." remaining<br>";
          //$post .= "Job ID : {$row['job_id']} <br>";
          $post .= "</div>";
          echo $post;
          }
        echo "</div>";
        }      
  }

  else{

    $result = get_recent_job_details();

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<div class='owl-carousel' id='owl-demo'>";
    while($row = mysqli_fetch_assoc($result)) {
      
      $post = "<div class='item'>";
      $post .= "<b><span style='color:rgba(51,51,51,0.8);padding:5px;text-align:center;position:absolute;left:5%;background-color:#c9d8c5; width:85%'>".$row['job_type']."</span><br></b><br>";
      $post .= JOBLOCATION." : ".$row['area']." <br> ".JOBCONTACT." :0{$row['tel_num']}";
      //$post .= "Location : {$row['address']} <br>";     
      $post .= "<br><p> {$row['job_description']} </p>";          
      $post .= time_elapsed_string($row['time']) ."<br>";
      //$post .= "Job ID : {$row['job_id']} <br>";
      $post .= "</div>";
      echo $post;
      }
    echo "</div>";
    }
}


  ?>     
    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,                
        autoplay:true,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            <?php
            if(!isset($_SESSION['userID'])){
              echo "items: 5";
            }
            else{
              echo "items: 3";
            }
            
            ?>
          }
        }
      })
    </script>