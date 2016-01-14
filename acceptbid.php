<?php include('header.php'); ?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>baas.lk</title>

<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">

#apDivContainer {
	position: absolute;
	left: 220px;
	top: 110px;
	width: 1041px;
	height: 600px;
	z-index: 1;
	background-color: #f0f0f0;
		
}
#apDivMainInfo {
	position: absolute;
	left: 30px;
	top: 20px;
	width: 1000px;
	height: 173px;
	z-index: 2;
	background-color:rgba(255,255,255,.5);
	border-radius: 20px;
}

#landimage1{
	position: absolute; //asa
	left: 2px;
	top: 200px;
	width: 500px;
	height: 300px;
	z-index: 11;
	background-color:rgba(255,255,255,.5);
	border-radius: 20px;	
	}
#landimage2{
	position: absolute;
	left: 510px;
	top: 200px;
	padding: 2px;
	width: 495px;
	height: 300px;
	z-index: 12;
	background-color:rgba(255,255,255,.5);
	border-radius: 20px;	
	}	
	
#listofbids{
	position: absolute;
	left: 2px;
	top: 505px;
	width: 500px;
	height: 400px;
	z-index: 13;
	background-color:rgba(255,255,255,.5);
	border-radius: 20px;	
	}
	
#addbid{
	position: absolute;
	left: 550px;
	top: 700px;
	width: 400px;
	height: 200px;
	z-index: 14;
	background-color:rgba(255,255,255,.5);
	border-radius: 20px;	
	}
	
#time{
	position: absolute;
	left: 550px;
	top: 550px;
	width: 400px;
	height: 50px;
	z-index: 33;
	background-color:rgba(255,255,255,.5);
	border-radius: 20px;
	
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

.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color: #f0f0f0;
}







.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;border-width:1px;border-style:solid;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-b7b8{background-color:#f9f9f9;vertical-align:top}



.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color: #f0f0f0;
}






</style>


</head>

<body>





<?php


require_once("_database/database.php");
$accountid=$_SESSION['accountid'];
$itemid=$_GET['itemid'];
?>

<body>

<?php

$sql="select * from tblbiditems where biditemid=$itemid LIMIT 1";
$result=mysqli_query($database,$sql) or die ("Cannot verify login: ".mysqli_error() );
$row=mysqli_fetch_array($result);

$sql2="select * from users where user_id=".$row['accountno'] ;
$result2=mysqli_query($database,$sql2) or die ("Cannot verify login: ".mysqli_error());
$row2=mysqli_fetch_array($result2);

$sql3="select * from tblbidhistory where  biditemid=$itemid order by bidhistoryid DESC limit 10 "  ;
$result3=mysqli_query($database,$sql3) or die ("Cannot verify login: ".mysqli_error());
$row3=mysqli_fetch_array($result3);

$sql4="select * from serviceprovider where  user_id=".$row['accountno']  ;
$result4=mysqli_query($database,$sql4) or die ("Cannot verify login: ".mysqli_error());
$row4=mysqli_fetch_array($result4);

?>
  


<div id="apDivContainer">

    <div id="apDivMainInfo">
    	<div id="apDivTitle">
	
		<table width="500" class="tg" style="border-width:0px">
		<tr>
		<td class="tg-b7b8">Vendor Name :</td>
		<td class="tg-b7b8"><?php  echo "<a href=http://localhost/BAAS_LK/profile.php?user=".$row['accountno'].">".$row2['user_name']."</a>" ; ?></td>
		</tr>
		
		<tr>
		<td class="tg-b7b8">Address</td>
		<td class="tg-b7b8"><?php echo $row4['address'] ; ?></td>
		</tr>
		
		<tr>
		<td class="tg-b7b8">Web site</td>
		<td class="tg-b7b8"><?php echo "<a href=http://www.google.lk>".$row4['website']."</a>"  ; ?> </td>
		</tr>
 
		</table> 
        </div>
		
      <div id="landimage1">
	  <img width="500px" height="300px" src="uploaded_img/<?php echo($row['image_path'])	  ?>">
	  </div>
	  
		<div id="landimage2">	
		<table max width="500" class="tg" style="border-width:0px">
		<tr>
		<td class="tg-b7b8" maxwidth="500" > <?php echo $row['biddesc'] ;?></td>
		</tr>
		</table>
		</div>
	  
	
 ?>

	  
	  
	  </div>
	  
	  
<?php

$sql5="SELECT max(bidprice) FROM baaslk.tblbidhistory WHERE biditemid =$itemid LIMIT 1";
$result5= mysqli_query($database,$sql5);
$row5=mysqli_fetch_array($result5); 

$date= strtotime($row['closingtime']);
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining = floor((($remaining % 86400) % 3600)/60);
$seconds_remaining = floor(((($remaining % 86400) % 3600)%60));

?>




	

</body>
</html>