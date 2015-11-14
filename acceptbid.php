<?php include('header.php'); ?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Land Details</title>

<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">
#apDivContainer {
	position: absolute;
	left: 220px;
	top: 110px;
	width: 1041px;
	height: 600px;
	z-index: 1;
	background-color: #213266;
		
}
#apDivMainInfo {
	position: absolute;
	left: 30px;
	top: 20px;
	width: 1000px;
	height: 173px;
	z-index: 2;
	background-color:#E6E6E6;
	border-radius: 20px;
}

#apDivShortDesc {
	position: absolute;
	left: 31px;
	top: 215px;
	width: 501px;
	height: 173px;
	z-index: 2;
	background-color:#E6E6E6;
	border-radius: 20px;
}

#apDivWorkHistory{
	position: absolute;
	left: 31px;
	top: 411px;
	width: 501px;
	height: 173px;
	z-index: 2;
	background-color: #E6E6E6;
	border-radius: 20px;	
	}
	
#apDivpic {
	position: absolute;
	left: 550px;
	top: 215px;
	width: 400px;
	height: 370px;
	z-index: 1;
	background-color:#E6E6E6;
		
}


.img-circleBid {
	width: 100px;// These are your circle dimensions
    height: 100px;
	border-radius: 50%;
	background-repeat: no-repeat;
	background-position: center center;// Center image in the circle
    background-size: cover; // Make sure it covers the circle, as there is no bg repeat; 	
	border: medium solid rgba(51,51,51,1);
    }
#apDivProfPicBid {
	position: absolute;
	left: 18px;
	top: 29px;
	width: 110px;
	height: 110px;
	z-index: 1;
}
p{
	line-height: 50%;
	}

#apDivTitle {
	position: absolute;
	left: 142px;
	top: 8px;
	width: 323px;
	height: 149px;
	z-index: 2;
}

#apDivContactInfo {
	position: absolute;
	left: 29px;
	top: 14px;
	width: 275px;
	height: 209px;
	z-index: 2;
}
#galleryBox{
	position: absolute;
	left: 639px;
	top: 334px;
	width: 340px;
	height: 343px;
	z-index: 2;
	}
.bidtbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 2em;
    color:#ffcc00;
}

.bidtbl2 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 1em;
	color:#ffcc00;
    
}

.bidtbl3 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 1.5em;
	color:#ffcc00;
    
}
</style>


</head>

<body>





<?php
//db conection &

require_once("_database/database.php");



$accountid=$_SESSION['accountid'];
$itemid=$_GET['itemid'];
$item=$_GET['item'];

?>

<html>
<head><title> accept bid</title></head>

<body>

<?php

$sql="select biditem,biddesc from tblbiditems where biditemid=$itemid";
$result=mysqli_query($sql) or die ("Cannot verify login: ".mysqli_error());

$row=mysqli_fetch_array($result);



?>
  
<div id="fullscreen">
	<div id="fullscreen-inner">
		<div id="fullscreen-inner-left" class="fullscreen-inner-button"><span class="icon-caret-left"></span></div>
		<div id="fullscreen-inner-right" class="fullscreen-inner-button"><span class="icon-caret-right"></span></div>
		<div id="fullscreen-inner-close" class="fullscreen-inner-button"><span class="icon-close"></span></div>
		<div id="fullscreen-image"></div>
	</div>
</div>

<div id="apDivContainer">

    <div id="apDivMainInfo">
    	<div id="apDivTitle">
        <p style="font-size:30px">WIJAYA LANDS</p>    
        <p>member since : Aug 2015</p>    
        <p> </p>
        <p>Area : Colombo</p>  
        </div>
      
      <div id="apDivProfPicBid"><img class="img-circleBid"  src= "images/face.jpg"  > </div>  
    </div>
    
  
    
    
    <div class="bidtbl3" id="apDivShortDesc"><?php echo $row['biddesc'] ?> 
    </div>
    
   
	 <div id="apDivWorkHistory"><form id="form1" method="post" action="acceptbidprocess.php">


<p class="bidtbl">Bid Price:
	<input class="bidtbl2" type="number" name="bidprice" id="bidprice"/><br/>
	<input class="bidtbl2"  type= "hidden" name="itemid" id="itemid" value="<?php echo"$itemid";?>"/>
	
	<br/><input class="bidtbl2"type="submit" name="button" id="button" value="Add to Bid"/>
	</p>
	</form></div>
    
	<div id="apDivpic"><img src="pics/View from House.jpg" alt="Smiley face" height="370px" width="400px"></div>
			

    
</div>



</body>
</html>