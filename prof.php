<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
	// Create Database Connection
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "baaslk";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if(mysqli_connect_errno()){
		die("Database connection failed: ".
			mysqli_connect_error().
			"(".mysqli_connect_errno().")"
			);
			}
?>


<?php
	
	$query = "SELECT * FROM serviceprovider WHERE user_id =2" ;

	$result = mysqli_query($connection,$query);
	if(!$result){
		die("Database query failed.");
	}

	$query2 = "SELECT * FROM users WHERE user_id =2" ;

	$result2 = mysqli_query($connection,$query2);
	if(!$result2){
		die("Database query failed.");
	}
	
	$k=0;

while($row1 = mysqli_fetch_assoc($result))
{
$k++;
}

	
$result = mysqli_query($connection,$query);

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="header.css">
<style type="text/css">
#apDivInfoBox {
	position: absolute;
	left: 280px;
	top: 100px;
	width: 786px;
	height: 598px;
	z-index: 1;
}
#apDiv1 {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 121px;
	z-index: 2;
}
</style>
</head>

<body>

<?php include("header.php") ?>

<div id="apDivInfoBox">
<div id="apDiv1">

<?php 
$i=0;
if($k !=0)
{

while($row=mysqli_fetch_assoc($result2) )
{

	echo "FIRST NAME : ".$row["user_firstname"]."<hr>" ;
	echo "LAST NAME : ".$row["user_lastname"]."<hr>" ;

}
while($row=mysqli_fetch_assoc($result) )
{
	echo "CATEGORY: ".$row["category"]."<hr>" ;
	echo "AREA : ".$row["area"]."<hr>" ;
	echo "DESCRIPTION: ".$row["descr"]."<hr>" ;
	echo "WORK HISTORY : ".$row["workInfo"]."<hr>" ;
	echo "DOB : ".$row["dob"]."<hr>" ;
	echo "ADDRESS : ".$row["address"]."<hr>" ;
	echo "gender : ".$row["gender"]."<hr>" ;
	echo "CONTACT NO : ".$row["contactNo"]."<hr>" ;
	echo "OPTIONAL CONTACT NO : ".$row["opContactNo"]."<hr>" ;
	echo "OPTIANAL EMAIL : ".$row["opEmail"]."<hr>" ;




$i++;
}
}


else
{	echo "<div id=\"apDivResultNull\"> <p>NO RESULTS TO BE DISPLAYED</p></div>";
	
	}
?>

</div>

</div>

</body>
</html>
