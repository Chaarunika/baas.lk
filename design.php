<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <link rel="stylesheet" href="css/owl.carousel.css">
    <script src="javascript/owl.carousel.js"></script>

    <style type="text/css">
 
.item{
  background-color:#f0f0f0;
  //text-align: center;
  padding: 10px;
}

    </style>
</head>

<body>
  <?php 
  include_once('_database/database.php'); 
  include_once('functions/functions.php');

  
  $result = get_recent_job_details();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<div class='owl-carousel'>";
    while($row = mysqli_fetch_assoc($result)) {
      
      $post = "<div class='item'>";
      $post .= "{$row['job_type']} | {$row['area']} | Mobile : {$row['tel_num']}<br>";
      $post .= "Location : {$row['address']} <br>";     
      $post .= "<p> {$row['job_description']} </p>";          
      $post .= "Posted : {$row['time']} ";    
      $post .= "Job ID : {$row['job_id']} <br>";
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

</body>
</html>