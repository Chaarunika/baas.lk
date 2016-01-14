<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php 
if(isset($_SESSION['language'])){

	if($_SESSION['language'] == 'sinhala'){
		include_once 'translations/si.php' ;
	}

	else if($_SESSION['language'] == 'tamil'){
		include_once 'translations/ta.php' ;
	}

	else if($_SESSION['language'] == 'english')
	{
		include_once 'translations/en.php' ;
	}
}

else{
	include_once 'translations/en.php' ;
} 
?>


<?php 
include_once ('_database/database.php');
include_once('functions/translationFunctions.php')
 ?>

<?php 
	if( !isset($_GET['SearchButton']))  //Handling error if someone tries loading searchSp.php directly
		{ 
			$area = ANYAREA;
			$cat =  ALL ;
		}   

	else{			
			
			$area = $_GET["location"];
			$cat = $_GET["category"];
				/*
			$areaEnglish= $area;
			$areaSinhala= $area;
			$areaTamil = $area;	

			$catEnglish= $cat;
			$catSinhala= $cat;
			$catTamil= $cat;

				*/
			if($languageTranslated=="english"){
				$areaEnglish= $area;
				$areaSinhala= english_to_sinhala($area);
				$areaTamil = english_to_tamil($area);	

				$catEnglish= $cat;
				$catSinhala= english_to_sinhala($cat);
				$catTamil= english_to_sinhala($cat);
			}

			elseif($languageTranslated=="sinhala"){
				$areaEnglish= sinhala_to_english($area);
				$areaSinhala= $area;
				$areaTamil = sinhala_to_tamil($area);	

				$catEnglish= sinhala_to_english($cat);
				$catSinhala= $cat;
				$catTamil= sinhala_to_tamil($cat);	
			}

			else{
				$areaEnglish= tamil_to_english($area);
				$areaSinhala= tamil_to_sinhala($area);
				$areaTamil = $area;	

				$catEnglish= tamil_to_english($cat);
				$catSinhala= tamil_to_sinhala($cat);
				$catTamil= $cat;

			}			
			
	}
?>



<?php

	if(isset($_GET['SearchBar']) == FALSE){
		$word = "";
	}
	else{
		$word = $_GET['SearchBar'] ;
	}
	$_SESSION['tempSearchTerm'] = $word ;
	$_SESSION['tempSearchCategory'] = $cat ;
	$_SESSION['tempSearchArea'] = $area;
	
?>


<?php
	if($area == ANYAREA  && $cat ==ALL )
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (users.user_id=serviceprovider.user_id)";
		}
	}
	else if($area == ANYAREA)
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (category = '$catEnglish' or category = '$catSinhala' or category = '$catTamil' ) AND (users.user_id=serviceprovider.user_id)";
		}
	}
	else if($cat == ALL)
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE (area = '$areaEnglish' or area='$areaSinhala' or area = '$areaTamil') AND (users.user_id=serviceprovider.user_id)";
		}
	}
	else
	{
		if(1)
		{
		$query = "SELECT * FROM users CROSS JOIN serviceprovider WHERE ((category = '$catEnglish' or category = '$catSinhala' or category = '$catTamil' ) and (area = '$areaEnglish' or area='$areaSinhala' or area = '$areaTamil') ) AND (users.user_id=serviceprovider.user_id)";
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



	<!-- Bootstrap  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- rating  -->
	<link rel="stylesheet" href="star-rating.css" media="all" type="text/css"/>  
    <script src="star-rating.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="css/header.css" rel="stylesheet">
	<link href="css/searchBar.css" rel="stylesheet">

	<!-- Animated advertisement -->
	<link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>

	<style type="text/css">
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
	

input{
	font-family:'Fauna One',serif;
}
#apDivResultBox0 {
	//position: relative;
	//top: 100px;
}

<?php
$distance = 300;
for($i=0; $i<$k;$i++){


echo "
#apDivResultBox{$i} {
	position: relative;
	//left: 50px;
	//top: ". $distance. "px;
	width: 955px;
	//height: 140px;
	z-index: 1;
	border: 1px solid rgba(51,51,51,0.4);
	//border-radius: 20px;
	background-color: #f8f8f8 ;
	margin-bottom: 10px;
}
#apDivResultPic{$i}  {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 40px;
	height: 40px;
	z-index: 2;
	border: 3px solid rgba(153,153,153,1);
}
#apDivResultName{$i}  {
	position: relative;
	left: 55px;
	top: 0px;
	width: 900px;
	height: 38px;
	z-index: 4;
	font-family:'Fauna One',serif;
	font-size: 18px;
	font-weight: bold;
	color: rgba(51,51,51,1);
	
}
#apDivResultDesc{$i}  {
	position: relative;
	left: 0px;
	//top: 45px;
	width: 939px;
	//height: 127px;
	z-index: 2;
	padding: 10px;
}

";
//$distance = $distance + 10;
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

#searchResultContainer{
	position: absolute;
	top: 300px;
	left:20px;
	//width: 1200px;
	min-height: 700px;	
	min-width: 950px;
	padding: 20px;
	background-color: #f0f0f0;
	border: 1px solid rgba(51,51,51,0.1);

}

#searchResultContainerCol2{
	position: absolute;
	//top: 10px;
	left:1000px;
	width: 320px;
	height: 100%;	
	padding: 20px;
	background-color: #f0f0f0;
	border: 1px solid rgba(51,51,51,0.1);

}

#coverPics2{
		position: absolute;
		top: 100px;
		left:800px;
		right:1%;
		height: 300px;	
		background-image: url('images/line-up.svg');
		z-index: 0; 
	}
</style>
</head>

<body>


	<div id='coverPics2'></div>

<!--
<div id='addBox' >Advertisements<hr>
<img src="images/ad.jpg" alt="add" style="width:250px;height:500px;">
</div>
-->
<?php include ("header.php")  ?>
<?php include ("includes/searchBar.php")  ?>





<?php echo "<div id='searchResultContainer'>"; ?>

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
		echo "<div id=\"apDivResultBox{$i}\">";

    	$string = $row["user_name"].$row["user_firstname"].$row["user_lastname"].$row["area"].$row["category"].$row['address'].$row['descr'];
		$string = str_replace(' ','',$string); 
		//$string = "ds";
	  

		if($word== ""){
		
		echo "<div id='apDivResultPic'> <img src='".$row['user_avatar']."' width='40' height='40' alt='facePic' style='border:1px solid rgba(51,51,51,0.1);left:3px;top:3px;position:absolute'></div>";
		echo "<div id=\"apDivResultName{$i}\"><a style='color:rgba(51,51,51,1)' href= \"profile.php?user=". $row['user_id']. "\">".$row["user_firstname"]." ".$row['user_lastname']."</a> || ".$row["area"] . " || ". $row["category"] ;

	
		echo "</div>";
		echo "<div id=\"apDivResultDesc{$i}\">".$row["descr"]  ;

		include('includes/ratingForSearch.php');
		if(isset($_SESSION['Catagory'])){
			if($_SESSION['Catagory']== "sp" or $_SESSION['Catagory']== "customer")
			echo "<hr> <a href= \"profile.php?user=". $row["user_id"]. " \">Click to View Profile</a></div>";
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
			
			echo "<div id='apDivResultPic'> <img src='".$row['user_avatar']."' width='40' height='40' alt='facePic' style='border:1px solid rgba(51,51,51,0.1);left:3px;top:3px;position:absolute'></div>";
			echo "<div id=\"apDivResultName{$i}\"><a style='color:rgba(51,51,51,1)' href= \"profile.php?user=". $row['user_id']. "\">".$row["user_firstname"]." ".$row['user_lastname']."</a> || ".$row["area"] . " || ". $row["category"] ;

		
			echo "</div>";
			echo "<div id=\"apDivResultDesc{$i}\">".$row["descr"]  ;

			include('includes/ratingForSearch.php');
			if(isset($_SESSION['Catagory'])){
			if($_SESSION['Catagory']== "sp" or $_SESSION['Catagory']== "customer")
			echo "<hr> <a href= \"profile.php?user=". $row["user_id"]. " \">Click to View Profile</a></div>";
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
{	echo "<div id=\"apDivResultNull\"> <p style='position:absolute;top:0px;font-size:20px'>".NORESULTS."</p></div>";
	
	}
?>

	
<?php echo "</div'>"; ?>
   






<script>
    jQuery(document).ready(function () {
        $("#input-21f").rating({
            starCaptions: function(val) {
                if (val < 3) {
                    return val;
                } else {
                    return 'high';
                }
            },
            starCaptionClasses: function(val) {
                if (val < 3) {
                    return 'label label-danger';
                } else {
                    return 'label label-success';
                }
            },
            hoverOnClear: false
        });
        
        $('#rating-input').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'lg',
              showClear: false
           });
           
        $('#btn-rating-input').on('click', function() {
            $('#rating-input').rating('refresh', {
                showClear:true, 
                disabled:true
            });
        });
        
        
        $('.btn-danger').on('click', function() {
            $("#kartik").rating('destroy');
        });
        
        $('.btn-success').on('click', function() {
            $("#kartik").rating('create');
        });
        
        $('#rating-input').on('rating.change', function() {
            alert($('#rating-input').val());
        });
        
        
        $('.rb-rating').rating({'showCaption':true, 'stars':'3', 'min':'0', 'max':'3', 'step':'1', 'size':'xs', 'starCaptions': {0:'status:nix', 1:'status:wackelt', 2:'status:geht', 3:'status:laeuft'}});
    });
</script>



<div id='searchResultContainerCol2' style="position:absolute;top:0px">Advertisemets</hr>
	<section class="wrapper" style="position:relative;top:0px;left:0px">
		<div id="ad-2">
			<h2>Lost<br />at<br />sea?</h2>
			<ul id="boat">
				<li>
					<div id="question-mark"></div>
				</li>
			</ul>
			<ul id="water">
				<li id="water-back"></li>
				<li id="water-front"></li>
			</ul>
			<div id="content">
				<h3 style="font-size:20px ;color:rgba(51,51,51,1)">Relax.<br />We've got your rudder.</h3>
				<a href="#"><img src="images/logo.png" style="width:100px;height:100px" ><span style="font-size:14px;color:rgba(51,51,51,1)">baas.lk</span></a>
			</div>
		</div>
    </section> 
<div>

</body>

<?php mysqli_free_result($result); ?>

<?php 
mysqli_close($dbConnection);
?>