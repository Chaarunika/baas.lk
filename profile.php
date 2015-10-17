<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="Gallery/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />


<link href="Gallery/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
<link href="Gallery/_css/main.css" rel="stylesheet" type="text/css"/>
<link href="Gallery/_css/pop-up-gallery3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Gallery/_scripts/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="Gallery/_scripts/pop-up-gallery3.js"></script>


<link href="header.css" rel="stylesheet" />

<style type="text/css">
#apDivContainer {
	position: absolute;
	left: 50px;
	top: 100px;
	width: 1041px;
	height: 2322px;
	z-index: 1;
	background-color: #f0f0f0;
		
}
#apDivMainInfo {
	position: absolute;
	left: 30px;
	top: 20px;
	width: 501px;
	height: 173px;
	z-index: 2;
	background-color: rgba(255,255,255,0.5);
	border-radius: 20px;
}

#apDivShortDesc {
	position: absolute;
	left: 31px;
	top: 215px;
	width: 501px;
	height: 173px;
	z-index: 2;
	background-color: rgba(255,255,255,0.5);
	border-radius: 20px;
}

#apDivWorkHistory{
	position: absolute;
	left: 31px;
	top: 411px;
	width: 501px;
	height: 173px;
	z-index: 2;
	background-color: rgba(255,255,255,0.5);
	border-radius: 20px;	
	}
#apDivContactBox {
	position: absolute;
	left: 585px;
	top: 16px;
	width: 330px;
	height: 247px;
	z-index: 2;
	background-color: rgba(255,255,255,0.5);
	border-radius: 20px;
}

.img-circle2 {
	width: 100px;// These are your circle dimensions
    height: 100px;
	border-radius: 50%;
	background-repeat: no-repeat;
	background-position: center center;// Center image in the circle
    background-size: cover; // Make sure it covers the circle, as there is no bg repeat; 	
	border: medium solid rgba(51,51,51,1);
    }
#apDivProfPic2 {
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

</style>

   
   

</head>

<body>

<?php include('header.php'); ?>

<?php 
	include_once('_database/database.php'); 

	$userID = $_SESSION['userID']; 
	
	$query = "SELECT * FROM serviceprovider WHERE user_id =$userID " ;

	$result = mysqli_query($database,$query);
	if(!$result){
		die("Database query failed.");
	}

	$query2 = "SELECT * FROM users WHERE user_id =$userID " ;

	$result2 = mysqli_query($database,$query2);
	if(!$result2){
		die("Database query failed.");
	}

	$k=0;

	while($row1 = mysqli_fetch_assoc($result))
	{
	$k++;
	}

		
	$result = mysqli_query($database,$query);




$i=0;
if($k !=0)
{

while($row=mysqli_fetch_assoc($result2) )
{

	$firstName = $row["user_firstname"];
	$lastName = $row["user_lastname"];
	$email = $row["user_email"];
	$regDate = $row["user_registration_datetime"];

}

$fullName = $firstName.$lastName ; 
while($row=mysqli_fetch_assoc($result) )
{
	$catagory = $row["category"] ;
	$area = $row["area"];
	$descr = $row["descr"] ;
	$workInfo = $row["workInfo"];	
	$address = $row["address"];	
	$contactNo = $row["contactNo"];
	$opContactNo = $row["opContactNo"];
	$opEmail = $row["opEmail"];

$i++;
}
}


else
{	echo "No Results" ;
	
}
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
        <p style="font-size:30px"><?php echo $fullName ?></p>    
        <p>member since : <?php echo $regDate ?></p>    
        <p>Catagory : <?php echo $catagory ?></p>
        <p>Area : <?php echo $area ?></p>  
        </div>
      
      <div id="apDivProfPic2"><img class="img-circle2"  src= " <?php echo $_SESSION['url'] ?> "  > </div>  
    </div>
    
    <div id="apDivContactBox">
    	<div id="apDivContactInfo">
        <p style="font-size:20px">Contact Details</p>    
        <p>Contact No : <?php echo $contactNo ?></p>    
        <p>Email : <?php echo $email ?></p>
        <p>Address : <?php echo $address ?></p>  
        <p>Optional Contact No : <?php echo $opContactNo ?></p>    
        <p>Optional Email : <?php echo $opEmail ?></p>       
        </div>      
      
    </div>
    
    
    <div id="apDivShortDesc"> 
    <p style="font-size:20px">About Us</p>  
    <p style="line-height: 130%;"><?php echo $descr ?></div>
    
    <div id="apDivWorkHistory"> 
    <p style="font-size:20px">Work History</p>  
    <p style="line-height: 130%;"> <?php echo $workInfo ?></div>
    

		<div id="galleryBox">

			<div class="wrapper-inner-content-image">    
				<img src="Gallery/_assets/9.jpg"/>
				<img src="Gallery/_assets/8.jpg"/>
				<img src="Gallery/_assets/7.jpg"/>
				<img src="Gallery/_assets/6.jpg"/>
				<img src="Gallery/_assets/5.jpg"/>
				<img src="Gallery/_assets/4.jpg"/>
				<img src="Gallery/_assets/3.jpg"/>
				<img src="Gallery/_assets/2.jpg"/>   
				<img src="Gallery/_assets/1.jpg"/>    
    			
				<div class="wrapper-inner-content-image-hover">
					<div class="wrapper-inner-content-image-hover-cercle"><span class="icon-search"></span></div>
                   
				</div>  
			</div>
		</div>	

    
</div>


        

</body>
</html>
