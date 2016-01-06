<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php include_once ('_database/database.php'); ?>


<?php
	$area = $_POST["location"];
	$cat = $_POST["category"];

	if(isset($_POST['SearchBar']) == FALSE)
	{
		$word = "";
	}
	else{
		$word = $_POST['SearchBar'] ;
	}
	$_SESSION['tempSearchTerm'] = $word ;
	
	

	$_SESSION['tempSearchCategory'] = $cat ;
	$_SESSION['tempSearchArea'] = $area;
	
?>


<?php
	if($area == "ANY AREA" && $cat == "ALL")
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (users.user_id=serviceprovider.user_id)";
		}
	}
	else if($area == "ANY AREA")
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (category = '$cat' ) AND (users.user_id=serviceprovider.user_id)";
		}
	}
	else if($cat == "ALL")
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (area = '$area' ) AND (users.user_id=serviceprovider.user_id)";
		}
	}
	else
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (area = '$area' && category = '$cat' ) AND (users.user_id=serviceprovider.user_id)";
		}
	}
	
	$result = mysqli_query($dbConnection,$query);
	if(!$result){
		die("Database query failed.");
	}
	
	$k=0;

	

while($row1 = mysqli_fetch_assoc($result))
{
$k++;
}
	

$result = mysqli_query($dbConnection,$query);

?>



<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>baas.lk</title>

<link href="css/header.css" rel="stylesheet">
<link href="css/searchBar.css" rel="stylesheet">


<style type="text/css">

<?php
$distance = 300;
for($i=0; $i<$k;$i++){


echo "
#apDivResultBox{$i} {
	position: relative;
	left: 50px;
	top: ". $distance. "px;
	width: 955px;
	height: 140px;
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
	background-color: rgba(240, 240, 240,0.9) ;
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

#coverPics{
	width: 100%;
	top:0px;
	background-image: url('images/cover.jpg');
	height: 768px;
	z-index: 0;
	

}

#addBox{
	position: absolute;
	top: 100px;
	left: 1050px;
	height:550px;
	width: 260px;
	//background-color: #f0f0f0;

}

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
	left:0px;
	
}

</style>
</head>

<body>

	<div id='back'>
	<div id='coverPics'></div>
	</div>


	
	<?php 

	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}

?>

<?php include ("header.php")  ?>
<?php include ("includes/searchBar.php")  ?>



<div id='addBox' >Advertisements<hr>
<img src="images/ad.jpg" alt="add" style="width:250px;height:500px;">
</div>



<?php 
	if( $_POST['SearchButton'] != 'Submit')  //Handling error if someone tries loading searchSp.php directly
		{ 
			//header("location:../BAAS_LK/index.php");
		}   
?>

<?php 

@$word =mysql_real_escape_string(stripslashes($word));
$word = str_replace(' ','',$word);



//$word = "dsd";

$i=0;
$found = 0;

if($k !=0)
{
	while($row=mysqli_fetch_assoc($result) )
	{
	
    	$string = $row["user_name"].$row["user_firstname"].$row["user_lastname"].$row["area"].$row["category"].$row['address'].$row['descr'];
		$string = str_replace(' ','',$string); 
		//$string = "ds";
	  

		if($word== ""){
		echo "<div id=\"apDivResultBox{$i}\">";
		echo "<div id=\"apDivResultPic\"> <img src=\"images/face.png\" width=\"51\" height=\"51\" alt=\"facePic\"></div>";
		echo "<div id=\"apDivResultName{$i}\">".$row["user_firstname"]." ".$row['user_lastname']." || ".$row["area"] . " || ". $row["category"] . "</div>";
		echo "<div id=\"apDivResultDesc{$i}\">".$row["descr"]  ;
		if(isset($_SESSION['Catagory'])){
			if($_SESSION['Catagory']== "sp" or $_SESSION['Catagory']== "customer")
			echo "<hr> <a href= \"../BAAS_LK/profile.php?user=". $row["user_id"]. " \">Click to View Profile</a></div>";
		}

		else{
			echo "</div>" ;
		}
		
		echo "</div>";		
		$i++;
	  	}

		else{

	  		if(strpos(strtolower($string),strtolower($word))>-1 ){
	   		
	   		++$found;
			echo "<div id=\"apDivResultBox{$i}\">";
			echo "<div id=\"apDivResultPic\"> <img src=\"images/face.png\" width=\"51\" height=\"51\" alt=\"facePic\"></div>";
			echo "<div id=\"apDivResultName{$i}\">".$row["user_firstname"]." ".$row['user_lastname']." || ".$row["area"] . " || ". $row["category"] . "</div>";
			echo "<div id=\"apDivResultDesc{$i}\">".$row["descr"]  ;
			if(isset($_SESSION['Catagory'])){
				if($_SESSION['Catagory']== "sp" or $_SESSION['Catagory']== "customer")
				echo "<a href= \"../BAAS_LK/profile.php?user=". $row["user_id"]. " \">Click to View</a></div>";
			}

			else{
				echo "</div>" ;
			}
			
			echo "</div>";

			$i++;
			}
		}
	}
}


if($i == 0)
{	echo "<div id=\"apDivResultNull\"> <p>NO RESULTS TO BE DISPLAYED</p></div>";
	
	}
?>

	



</body>

<?php mysqli_free_result($result); ?>

<?php 
mysqli_close($dbConnection);
?>