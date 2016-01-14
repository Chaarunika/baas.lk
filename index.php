
<!DOCTYPE html>
	<?php 
	// SESSION CHECK AND START SESSION
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	?>
<html>

<head>

<title>baas.lk</title>
<meta charset="UTF-8">


<!--  
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> -->


<!--  postjob Links -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="css/postjob.css" rel="stylesheet">
<script src = "javascript/postjob.js"> </script>
<script src = "javascript/telerror.js"> </script> 

<link href="css/header.css" rel="stylesheet">
<link href="css/searchBar.css" rel="stylesheet"> 

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="css/owl.carousel.css">
<script src="javascript/owl.carousel.js"></script>

<!-- Button Links-->
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/core.css">

<style type="text/css">

#coverPics{
	position: absolute;
	top: 0px;
	width: 800px;
	height: 300px;	
	background-image: url('images/cover2.jpg');
	z-index: 0;

}

#back{
	position: absolute;
	margin-top: 100px;
	left: 0px;
	
}

<?php

	// Show background pic only if sp is logged in
	if(isset($_SESSION['userID'])){
		if($_SESSION['Catagory'] == "sp"){
			echo "
			#coverPics2{
			position: absolute;
			top: 100px;
			left:800px;
			right:2%;
			height: 300px;	
			background-image: url('images/line-up.svg');
			z-index: 10; }
			";

		}
	}

	else{
	echo "
			#coverPics2{
			position: absolute;
			top: 100px;
			left:800px;
			right:2%;
			height: 300px;	
			background-image: url('images/line-up.svg');
			z-index: 10;
			}
			 ";
	}
?>


<?php

	// checking current session catagory
	if(isset($_SESSION['userID'])){
		if($_SESSION['Catagory'] == "customer"){
			echo "
			.owl-carousel {  
			  width: 75%;
			}
			";
		}
		else{
			echo "
			.owl-carousel {  
			  width: 98%;
			}
			";	
		}

	}

	else{
	echo "
	.owl-carousel {  
	  width: 98%;
	}
	";
	}

?>

.animate
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{
	position: relative;
	padding: 10px 40px;
  	//margin: 0px 10px 10px 0px;
  	//float: left;
  	width: 60px;
  	height:12px;  	
	//border-radius: 10px;
	//font-family: 'Pacifico';
	font-size: 12px;
	color: rgba(51,51,51,0.5);
	text-decoration: none;	
}

.blue
{
	background-color: #c9d8c5;
	border-bottom: 2px solid rgba(51,51,51,0.5);
	text-shadow: 0px -1px #2980B9;
}

.action-button:active
{
	transform: translate(0px,2px);
  -webkit-transform: translate(0px,2px);
	border-bottom: 1px solid;
}


</style>

</head>

<body>
		
	<?php include 'header.php' ?>

	<div id="back">
	<div id="coverPics"></div>
	</div>


	<div id="coverPics2"></div>


	<?php 
	include_once('includes/searchBar.php') ;  // search Bar included
	include_once('_database/database.php');   // database connectivity
	include_once('functions/functions.php');  // all the functions are here
	?>

	<?php include_once('includes/jobBar.php'); ?>
	<?php 		
	//checking current catagory
	if(isset($_SESSION['Catagory'])){
		if($_SESSION['Catagory'] == 'customer'){
			include_once 'postjob.php' ;
		}
	}
	?>
	<?php //include 'functions/functions.php'; ?>
	<?php //$message = display_error("SDDS"); ?>
	<?php  //print_r($_SESSION) ; ?>

</body>

</html>








