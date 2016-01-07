
  <?php 
  //include_once('_database/database.php'); 
  //include_once('functions/functions.php');

  
  $result = get_recent_job_details();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<div class='owl-carousel'>";
    while($row = mysqli_fetch_assoc($result)) {
      
      $post = "<div class='item'>";
      $post .= "<b><span style='padding:5px;text-align:center;position:absolute;background-color:#c9d8c5; width:90%'>".strtoupper ( $row['job_type'] )." WANTED..!!</span><br></b><br>";
      $post .= "Location : {$row['area']} | Contact :{$row['tel_num']}";
      //$post .= "Location : {$row['address']} <br>";     
      $post .= "<br><p> {$row['job_description']} </p>";          
      $post .= time_elapsed_string($row['time']) ."<br>";
      //$post .= "Job ID : {$row['job_id']} <br>";
      $post .= "</div>";
      echo $post;
  }
    echo "</div>";
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
            items: 3
          }
        }
      })
    </script>