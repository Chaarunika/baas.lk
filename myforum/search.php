<?php include 'myforumheader.php'; ?>
<link href="forum.css" rel="stylesheet">
<link href="main.css" rel="stylesheet">
<style type="text/css">
.createtabel {
	position: absolute;
	left: 272px;
	top: 167px;
	width: 724px;
	height: 140px;
	z-index: 10;	
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baaslk";
$tbl_name="fquestions"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$found =0;
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";;
$result = mysqli_query($conn, $sql);
$word =mysql_real_escape_string(stripslashes($_POST['textfield']));
$word = str_replace(' ','',$word);
if($word=="")
	   {
		  ?>
		   <script>
			alert("please type your search!");
			</script>
            <?php
			header('location:forum.php');
				   }


else if (mysqli_num_rows($result) > 0) {
?>
<div class="createtabel">
<table width="100%"  border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="100%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Username</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>
<?php

    while($rows = mysqli_fetch_assoc($result)) {
       $string = $rows["topic"].$rows["detail"];
	   $string = str_replace(' ','',$string);
	   $string = strtolower($string);
	   if(strpos($string,strtolower($word))>-1) 
	   {	++$found;

?>
<tr>
<td bgcolor="#FFFFFF" align="center"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><strong><?php echo $rows['topic']; ?></strong></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['user'];?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>
</table>
<?php	   
 }
		    
}	//while
if($found == 0)
{
?>
<table width="300" >
<tr>
<td width="100%"><?php echo "<br>.<br>.<br>.Not Founded" ?></td>
</tr>
</table>
<?php
}
}  //elif

mysqli_close($conn);
?>