<?php
include_once ('header.php');


require_once("_database/database.php");

?>



<html>

<head><title>Delete Items</title>

	<link rel="stylesheet" type="text/css" href="css/header.css">

<style type="text/css">

p,h2,pre{font-family:verdana;
	font-size: 40px;
	color: #213266;
	font-weight:bold;}
	
.bidtbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 1.2em;
    color:#ffcc00;
}

.bidtblcp {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 3em;
    color:#ffcc00;
}

#apDivContainer {
	position: absolute;
	left: 220px;
	top: 110px;
	width: 1041px;
	height: 600px;
	z-index: 1;
	background-color: #f0f0f0;
		
}

#apDivpic {
	position: absolute;
	left: 250px;
	top: 150px;
	width: 500px;
	height: 370px;
	z-index: 1;
	background-color: rgba(255,255,255,0.5);
		
}

</style>




</head>

<body>

<div id="apDivContainer" >

  <pre class="bidtblcp">   Click on the land items you wish to delete</pre> 
  
<div id="apDivpic" >  

  <?php
$accountid= $_SESSION['userID'];
$sql="SELECT * FROM tblbiditems WHERE accountid= '$accountid' ";


$result = mysqli_query($dbConnection,$sql);
    
    if(!$result){
      die("Database query failed.");
    }    




echo"<ol class='bidtbl'>";

while ($row=mysqli_fetch_array($result)){
								
	$biditemid=$row['biditemid'];
	$item=$row['biditem'];
	echo"<li><a class='bidtbl'
	 href='deletebiditem.php?biditemid=$biditemid'>$item</a></li>";
										}

echo"</ol>";
?>


</div>


 
</div>
</body>

	   

</html>