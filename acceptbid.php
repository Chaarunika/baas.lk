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
	height: 1000px;
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
	  
	  <div id="listofbids">

	  
	    <?php
			$out1="<table width='500' class='tg' style='border-width:10px'>"; 
			$out1 .="<tr>";
			$out1 .="<th class='tg-031e' colspan='3'>Latest Bids</th>";
			$out1 .="</tr>";
			$out1 .="<tr>";
			$out1 .="<td class='tg-b7b8'>Bid id</td>";
			$out1 .="<td class='tg-b7b8'>Bid value</td>";
			$out1 .="<td class='tg-b7b8'>Time of bid</td>";
			$out1 .="</tr>";
	
			echo ($out1) ;
	
			while($row3=mysqli_fetch_array($result3)){
		
	
  

			$out="<tr>";
			$out .= "<td class='tg-b7b8'>".$row3['bidhistoryid']. "</td>";
			$out .="<td class='tg-b7b8'>".$row3['bidprice']."</td>";
			$out .= "<td class='tg-b7b8'>".$row3['dtesubmitted']."</td>";
			$out .="</tr>";
 
  
  
  
			echo ($out);
  
  }
   echo ('</table>');
    
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
	  
	  <div id="time" class="tg"  onload="countdown()">
	  
	  <script type="text/javascript">


 var hour = '<?php echo $hours_remaining; ?>';
 var min = '<?php echo $minutes_remaining; ?>'; 
 var sec = '<?php echo $seconds_remaining; ?>'; 

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
  if(hour <= 0 ) {
  hour = 23;
  
 }
 
 
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 
 
 document.getElementById('time').innerHTML =" <?php echo $days_remaining; ?> Days "+hour+" Hours "+min+" minutes "+sec+" seconds ";
 setTimeout("countdown()",1000);
 }
 countdown();
</script>
	  
	  </div>
	  
	    <div id="addbid" >
	  <?php
	  
	 /* echo $row3['bidprice'] ;
	  echo "<br>";
	  echo $row['closingtime'] ;
	  
	  

	  
	  <form  method="post" action="acceptbidprocess.php">

<p >Bid Price:
	<input  type="number" name="bidprice" id="bidprice"/><br/>
	<input   type= "hidden" name="itemid" id="itemid" value="<?php echo"$itemid";?>"/>
	
	<br/><input type="submit" name="button" id="button" value="Add to Bid"/>
	</p>


</form>*/

?>



	<table width="400" class="tg" style="border-width:10px">
  
  <tr>
    <td class="tg-b7b8">Current Highest Bid</td>
    <td class="tg-b7b8"><?php  echo $row5['max(bidprice)']; ?></td>
   
  </tr>
  
 <form  method="post" action="acceptbidprocess.php">
  <tr>
    <td class="tg-yw4l">Bid price</td>
    <td class="tg-yw4l">Rs. <input  type="number" name="bidprice" id="bidprice" required min= <?php echo ($row['minimumbid'])  ?> /><br/>
	<input   type= "hidden" name="itemid" id="itemid" value="<?php echo"$itemid";?>"/> </td>
   
  </tr>
  
  <tr>
    <td class="tg-b7b8"><input type="submit" name="button" id="button" value="Add to Bid"/></td>
    <td class="tg-b7b8"><input type="reset" name="button2" id="button2" value="Cancel"/></td>
   
    </tr>
	<?php
	if(isset($_POST['bidprice'])){
	
	$bidprice=$_POST['bidprice'];

$sql= "insert into tblbidhistory(accountid,biditemid,bidprice,dtesubmitted) values($accountid, $itemid,$bidprice, NOW())";
$result=mysqli_query($database,$sql) or die ("Error in adding bid for item: ".mysqli_error());

header('location:listbiditems.php');

}
else{}
	?>
 
  </table>



 
</div>
	  
	  
	  
     <div id="apDivProfPicBid"><img class="img-circleBid"  src= <?php echo $row2['user_avatar'] ?> > </div>  
    </div>
    
  
    
    
    <
    
   
	
    
	
			

    
</div>



</body>
</html>