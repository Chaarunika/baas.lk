<?php

if(isSet($_POST['username']))
{
$username = $_POST['username'];

$dbHost = 'localhost'; 
$dbUsername = 'root';
$dbPassword = '';
$dbDatabase = 'baaslk';

$db = $database=mysqli_connect($dbHost,$dbUsername,$dbPassword ,$dbDatabase);
$sql="select user_id from users where user_name='".$username."'";
$sql_check = mysqli_query($db,$sql) or die(mysql_error());

if(mysqli_num_rows($sql_check))
{
echo '<font color="red">The Username <STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>