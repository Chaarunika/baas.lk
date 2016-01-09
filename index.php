<!DOCTYPE html>
<html>

<head>

<title>baas.lk</title>
<meta charset="UTF-8">

<!--  
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> -->

<!--  postjob  -->
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


<style type="text/css">

#coverPics{
	position: absolute;
	width: 800px;
	height: 500px;	
	background-image: url('images/cover1.jpg');
	z-index: 0;

}

#back{
	position: absolute;
	margin-top: 100px;
	left: 0px;
	
}
</style>

</head>

<body>
		
	<?php include 'header.php' ?>

	<div id="back">
	<div id="coverPics"></div>
	</div>

	<?php 
	include_once('includes/searchBar.php') ;
	include_once('_database/database.php'); 
	include_once('functions/functions.php');
	?>

	<?php include_once('includes/jobBar.php'); ?>
	<?php 
	if(isset($_SESSION['Catagory'])){
		if($_SESSION['Catagory'] == 'customer'){
			include 'postjob.php' ;
		}
	}
	?>
	<?php //include 'functions/functions.php'; ?>
	<?php //$message = display_error("SDDS"); ?>
	<?php  //print_r($_SESSION) ; ?>

	

</body>

</html>








