<!DOCTYPE html >
<?php session_start(); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href ="../css/header.css" rel = "stylesheet" >
<style type="text/css">

.spUser {
	background-image: url(images/spUser.JPG);
	position: absolute;
	width: 536px;
	height: 424px;
	left: 650px;
	top: 120px;
}

.spUser:hover {
	background-image: url(images/spUser2.JPG);
	cursor: pointer;
    cursor: hand;
}
	

.generalUser {
	background-image: url(images/generalUser.JPG);
	position: absolute;
	left: 100px;
	top: 120px;
	width: 536px;
	height: 425px;
}

.generalUser:hover{
	
	background-image: url(images/generalUser2.JPG);
	cursor: pointer;
    cursor: hand;
	
}

</style>
</head>


<body>

<?php  include '../header.php';?>

<form id="form1" name="form1" method="post" action="selectUser.php"> 
  <input name="generalUser" type="submit" class="generalUser" id="generalUser" value="" /> 
</form>


<form id="form1" name="form1" method="post" action="selectUser.php">  
  <input name="spUser" type="submit" class="spUser" id="spUser" value="" /> 
</form>

<?php


if(isset($_POST['generalUser']))
{
	$_SESSION['Catagory'] = "customer" ;
	header('location:register.php') ;
}

if(isset($_POST['spUser']))
{
	$_SESSION['Catagory'] = "sp" ;
	header('location:register.php') ;
}
	

	

?>
</body>
</html>
