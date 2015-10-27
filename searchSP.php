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
	$area = $_POST["location"];
	$cat = $_POST["category"];
	
?>


<?php
	if($area == "ANY AREA" && $cat == "ALL")
	{
		$query = "SELECT * FROM serviceprovider";
	}
	else if($area == "ANY AREA")
	{
		$query = "SELECT * FROM serviceprovider WHERE (category = '$cat' ) ";
	}
	else if($cat == "ALL")
	{
		$query = "SELECT * FROM serviceprovider WHERE (area = '$area' ) ";
	}
	else
	{
		$query = "SELECT * FROM serviceprovider WHERE (area = '$area' && category = '$cat' ) ";
	}
	
	$result = mysqli_query($connection,$query);
	if(!$result){
		die("Database query failed.");
	}
	
	$k=0;

while($row1 = mysqli_fetch_assoc($result))
{
$k++;
}

	
$result = mysqli_query($connection,$query);

?>



<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Hello World</title>

<link href="css/header.css" rel="stylesheet">
<link href="css/searchBar.css" rel="stylesheet">


<style type="text/css">

<?php
$distance = 300;
for($i=0; $i<$k;$i++){


echo "
#apDivResultBox{$i} {
	position: relative;
	left: 91px;
	top: ". $distance. "px;
	width: 955px;
	height: 182px;
	z-index: 1;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: rgba(102,102,102,1);
	border-right-color: rgba(102,102,102,1);
	border-bottom-color: rgba(102,102,102,1);
	border-left-color: rgba(102,102,102,1);
	border-radius: 20px;
}
#apDivResultPic{$i}  {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 49px;
	height: 38px;
	z-index: 2;
}
#apDivResultName{$i}  {
	position: absolute;
	left: 49px;
	top: 0px;
	width: 900px;
	height: 38px;
	z-index: 2;
	font-family: \"Arial Black\", Gadget, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: rgba(51,51,51,1);
	border-bottom-style: dotted;
	border-top-color: rgba(153,153,153,1);
	border-right-color: rgba(153,153,153,1);
	border-bottom-color: rgba(153,153,153,1);
	border-left-color: rgba(153,153,153,1);
}
#apDivResultDesc{$i}  {
	position: absolute;
	left: 0px;
	top: 45px;
	width: 939px;
	height: 127px;
	z-index: 2;
	padding: 10px;
}

";
$distance = $distance + 30;
}


?>

#apDivFoot {
	position: fixed;
	left: 0px;
	bottom : 0px;
	width: 100%;
	z-index: 5;
	background: #fceabb; /* Old browsers */
	background: -moz-linear-gradient(top,  #fceabb 0%, #f8b500 0%, #fccd4d 65%, #fbdf93 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fceabb), color-stop(0%,#f8b500), color-stop(65%,#fccd4d), color-stop(100%,#fbdf93)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #fceabb 0%,#f8b500 0%,#fccd4d 65%,#fbdf93 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #fceabb 0%,#f8b500 0%,#fccd4d 65%,#fbdf93 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #fceabb 0%,#f8b500 0%,#fccd4d 65%,#fbdf93 100%); /* W3C */

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fceabb', endColorstr='#fbdf93',GradientType=0 ); /* IE6-9 */
	background-color: #FFF;
	background-position: bottom;
} 
#apDivMenuBar {
	position: absolute;
	left: 172px;
	top: 60px;
	width: 100%;
	height: 73px;
	z-index: 0;
	padding: 0px;
	margin: 0px;
	border-left-color: rgba(153,153,153,1);
	
	}
#apDivResultNull{
	position: absolute;
	left: 100px;
	top: 300px;
	width: 500px;
	height: 50px;
	z-index: 2;
}

</style>
</head>

<body>
<?php include ("header.php")  ?>
<?php include ("includes/searchBar.php")  ?>

<?php 
	if( $_POST['SearchButton'] != 'Submit')  //Handling error if someone tries loading searchSp.php directly
		{ 
			header("location:../BAAS_LK/index.php");
		}   *
?>

<?php 
$i=0;
if($k !=0)
{
while($row=mysqli_fetch_assoc($result) )
{

echo "<div id=\"apDivResultBox{$i}\">";
echo "<div id=\"apDivResultPic\"> <img src=\"images/face.png\" width=\"51\" height=\"51\" alt=\"facePic\"></div>";
echo "<div id=\"apDivResultName{$i}\">".$row["sp_id"]." || ".$row["area"] . " || ". $row["category"] . "</div>";
echo "<div id=\"apDivResultDesc{$i}\">".$row["descr"]. "<a href= \"../BAAS_LK/profile.php?user=". $row["user_id"]. " \">Click to View</a></div>";
echo "</div>";

$i++;
}
}


else
{	echo "<div id=\"apDivResultNull\"> <p>NO RESULTS TO BE DISPLAYED</p></div>";
	
	}
?>



</body>

<?php mysqli_free_result($result); ?>

<?php 
mysqli_close($connection);
?>