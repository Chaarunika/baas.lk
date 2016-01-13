<?php include 'header.php'; ?> 
<?php include "../_database/database.php"; ?>
<?php include "common.php" ;?>


<style>
.createtabel {
	position: absolute;
	left: 20px;
	top: 70px;
	width: 1182px;
	height: 140px;
	z-index: 15;
}
.notfound {
	background-color: rgba(192,192,192,1);	
	position: absolute;
	left: 20px;
	top: 70px;
	width: 1110px;
	height: 169px;
	z-index: 100;
}
.btn {
	cursor:hand;
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  text-decoration: none;
  height:20px;
  width:40px;
  border-radius: 5px;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}




</style>

<div id='show1'>


<?php


//  send message for bid owner and highest bidder
if(isset($_GET['user']))
{
	if($_GET['user']=="win")
	{
		    
	        $id=$_GET['id'];
	
            $ch = curl_init();   
            //$gatewayURL =    "http://".$output.":9090/sendsms?phone=".$row['contactNo']."&text=baas.lk%0a".urlencode($jobDesc)."%0aAddress+:+".urlencode($jobAddress).",+".urldecode($jobArea).".%0a%0acall++".urlencode($jobTel)."%0a"."&password=123456";
            $textitURL = "http://www.textit.biz/sendmsg/index.php?id=94776014365&password=6065&text=You+won+the+bid.&to=$id";
      
            curl_setopt($ch, CURLOPT_URL, $textitURL); 
            $output = curl_exec($ch);          
            curl_close($ch); 
	  
			
   
	
	
	}
	else if($_GET['user']=="bid")
	{
		$id=$_GET['id'];
		
            $ch = curl_init();   
            //$gatewayURL =    "http://".$output.":9090/sendsms?phone=".$row['contactNo']."&text=baas.lk%0a".urlencode($jobDesc)."%0aAddress+:+".urlencode($jobAddress).",+".urldecode($jobArea).".%0a%0acall++".urlencode($jobTel)."%0a"."&password=123456";
            $textitURL = "http://www.textit.biz/sendmsg/index.php?id=94776014365&password=6065&text=Bid+is+over.&to=$id";
      
            curl_setopt($ch, CURLOPT_URL, $textitURL); 
            $output = curl_exec($ch);          
            curl_close($ch);   
		
		
		
	}
}




?>





<?php
//get contact number to array

$sql2 = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";
  	$result2 = $database->query($sql2);
	while($row2 = $result2->fetch_assoc()){
    	$conarray[$row2['user_id']] = $row2['contactNo'];
		
  	}
	
$sql3 = "SELECT * FROM users CROSS JOIN customer WHERE users.user_id=customer.user_id";
$result3 = $database->query($sql3);
	
	while($row3 = $result3->fetch_assoc()){
    	$conarray[$row3['user_id']] = $row3['contactNo'];
		
  	}
	
// get name of the users
$sql8 = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";
  	$result8 = $database->query($sql8);
	while($row8 = $result8->fetch_assoc()){
    	$nnarray[$row8['user_id']] = $row8['user_name'];
		
  	}
	
$sql9 = "SELECT * FROM users CROSS JOIN customer WHERE users.user_id=customer.user_id";
$result9 = $database->query($sql9);
	
	while($row9 = $result9->fetch_assoc()){
    	$nnarray[$row9['user_id']] = $row9['user_name'];
		
  	}





$colorchange=0;
$bgcolor="";
$found =0;

// print table
?>

<div class="createtabel">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="1100" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr >
<td width="10%"  align="center" bgcolor="#999"><strong>Remove</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Owner</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Highest Bidder</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Final Price</strong></td>
<td width="20%"  align="center" bgcolor="#999"><strong>Closing Time</strong></td>
<td width="20%"  align="center" bgcolor="#999"><strong>Owner Contact</strong></td>
<td width="20%"  align="center" bgcolor="#999"><strong>HighestBidderContact</strong></td>



</tr>

<?php
$sql = "SELECT * FROM tblbiditems CROSS JOIN users WHERE tblbiditems.accountno=users.user_id";
$result = $database->query($sql);
if (mysqli_num_rows($result) > 0) {
while($rows = mysqli_fetch_assoc($result)) {
       		$found++;
		   $colorchange=$colorchange+1;
	if($colorchange%2==1)
	{
		$bgcolor="#fff";
	}
	else
	{
		$bgcolor="#EEE";
	}
?>
<tr>
<td bgcolor="<?php echo $bgcolor?>" align="center"><a href= "remove.php?detail=<?php  echo "bid".",".$rows['biditemid'];?>" onClick="msg()"><img src="images/rm.jpg" alt="" border=3 height=30 width=30></img></a></td>
<td align="center" bgcolor="<?php echo $bgcolor?>" ><?php echo $rows['user_name']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor?>" ><?php 
$items=$rows['biditemid'];
$sql5= "SELECT max(bidprice),accountid FROM tblbidhistory WHERE biditemid = $items LIMIT 1";
$result5= mysqli_query($database,$sql5);
$row5=mysqli_fetch_assoc($result5);


if($row5['accountid']=="")
{ echo "";}else{
echo $nnarray[$row5['accountid']];}
?></td>


<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php
if($row5['max(bidprice)']=="")
{ echo "";}else{
echo $row5['max(bidprice)'];} ?>

</td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['closingtime']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php 
if($rows['accountno']=="")
{ echo "";}else{
echo $conarray[$rows['accountno']];}
 ?>
<a href="bid.php?user=bid&id=<?php 
if($rows['accountno']=="")
{ echo "";}else{
echo $conarray[$rows['accountno']];}
 ?>"><div class='btn'>Report</div></a>

 </td>

<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php if($row5['accountid']=="")
{ echo "";}else{
echo $conarray[$row5['accountid']];} ?>
<a href="bid.php?user=win&id=<?php if($row5['accountid']=="")
{ echo "";}else{
echo $conarray[$row5['accountid']];} ?>"><div class='btn'>Report</div></a>
</td>
</tr>
	
 <?php       		   
 }
		    
}

?>
</table>
</td>
</tr>
</table>
</div>

<?php

if($found == 0)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="notfound">
<table width="1000" bgcolor:"#fff">
<tr>
<td width="100%" align="center" bgcolor:"#cccccc"><strong>Not Founded</strong></td>
</tr>
</table>
</div>
<?php
}
mysqli_close($database);
?>
</div>

</div>
<style>
#show1{
	position:absolute;
	left:212px;
	top:79px;
	width:85%;
	height:<?php echo 400+($colorchange+1)*50 ; ?>;
	z-index:2;
	background-color: rgba(192,192,192,1);	
}
</style>