<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baaslk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$found =0;
$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";
$result = mysqli_query($conn, $sql);
$word =mysql_real_escape_string(stripslashes($_POST['search']));

if($word=="")
	   {
		  ?>
		   <script>
			alert("please type your search!");
			</script>
       	 <?php
	   }


else if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>

<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
<tr>
<td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="75%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']; ?></strong></td>
</tr>
<tr>
<td width="75%" bgcolor="#F8F7F1"><strong><?php echo $row['sp_catagory']; ?></strong></td>
</tr>
<tr>
<td width="25%" bgcolor="#F8F7F1"><form method='post' action="remove.php"><input name="<?php echo $row['sp_id']; ?>" type="submit" value="Remove User" /></form></td>
</tr>
</table></td>
</tr>
</table><br>

<?php	   
 }
		    
}	//while
if($found == 0)
{
?>
<table width="300" >
<tr>
<td width="100%"><?php echo "Not Founded" ?></td>
</tr>
</table>
<?php
}
}  //elif
mysqli_close($conn);

?>