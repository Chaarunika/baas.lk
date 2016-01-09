<?php include 'header.php'; ?> 
<?php include "../_database/database.php"; ?>
<?php include "common.php" ;?>
<style>
#show1{
	position:absolute;
	left:212px;
	top:79px;
	width:85%;
	height:600;
	z-index:2;
	background-color: rgba(192,192,192,1);
	padding-left:50px;	
}
#basic {
	position:absolute;
	left:270px;
	top:60px;
	width:430px;
	height:420px;
	z-index:3;
	background-color: rgba(255,255,255,1);
	padding-left:50px;
}

</style>

<div id='show1'>
<h3>  <a href="home.php">Remove User</a> || <a href="createprofile.php">Create User</a></h3>
<div id="basic">
<h3>EXTRA INFORMATION   </h3>
<form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 	<p>Brief Description</p>
      <p>
      <textarea name="secondLine" id="secondLine" rows=6 cols="50%" /></textarea>
      </p>
      
    <p>Work History</p>
      <p>
      <textarea name="secondLine" id="secondLine" rows=6 cols="50%" /></textarea>
      </p>
      <table><tr><td width="300px">
      <input type="submit" name="Back" id="saveContact" value="BACK"/></td>
      <td width="20px">
      <input type="submit" name="finish" id="saveContact" value="FINISH" /></td></tr></table>

</form>
</div>
</div>


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if ( isset($_POST['Back']))
{
	header("location:createprofile.php");
}
else if( isset($_POST['finish']))
{
}
}

?>
