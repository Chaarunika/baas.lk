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
</style>

<div id='show1'>
<?php
//getting customer and user name

$sql1 = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";

  	$result1 = $database->query($sql1);
	while($row1 = $result1->fetch_assoc()){
    	$sparray[$row1['user_id']] = $row1['user_name'];
		
  	}
	
	
$sql2 = "SELECT * FROM users CROSS JOIN customer WHERE users.user_id=customer.user_id";
$result2 = $database->query($sql2);
	
	while($row2 = $result2->fetch_assoc()){
    	$cusarray[$row2['user_id']] = $row2['user_name'];
		
  	}


$colorchange=0;
$bgcolor="";
$found =0;
$sql = "SELECT * FROM complain CROSS JOIN calendar WHERE complain.job_id=calendar.calendar_id";
$result = $database->query($sql);


//print complain table
?>

<div class="createtabel">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="1100" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr >
<td width="10%"  align="center" bgcolor="#999"><strong>Remove</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Customer</strong></td>
<td width="15%"  align="center" bgcolor="#999"><strong>Service Provider</strong></td>
<td width="30%"  align="center" bgcolor="#999"><strong>Description</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>CustomerContNO</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Location</strong></td>
<td width="8%"  align="center" bgcolor="#999"><strong>JobDate</strong></td>
<td width="8%"  align="center" bgcolor="#999"><strong>AddedDate</strong></td>

</tr>

<?php
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
<td bgcolor="<?php echo $bgcolor?>" align="center"><a href= "remove.php?detail=<?php  echo "complain".",".$rows['complain_id'];?>" onClick="msg()"><img src="images/rm.jpg" alt="" border=3 height=30 width=30></img></a></td>
<td align="center" bgcolor="<?php echo $bgcolor?>" ><?php echo $cusarray[$rows['customer_id']]; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php  echo $sparray[$rows['sp_id']]; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['description']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['contactno']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['location']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['jobDate']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['dateAdded']; ?></td>
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