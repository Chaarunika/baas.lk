<?php
$detail = $_GET["detail"];
$detailarray = explode(",", $detail);
include 'dbconnect.php';

if($detailarray[0]=='sp')
{
	
	$sql1="DELETE FROM serviceprovider WHERE sp_id=$detailarray[1]";
	$result1 = mysqli_query($conn, $sql1);
	
	$sql2="DELETE FROM users WHERE user_id=$detailarray[2]";
	$result2 = mysqli_query($conn, $sql2);
	
	header("location:/BAAS_LK/systemadmin/spremove.php");
}
else if($detailarray[0]=='customer')
{
	
	$sql1="DELETE FROM customer WHERE customer_id=$detailarray[1]";
	$result1 = mysqli_query($conn, $sql1);
	
	$sql2="DELETE FROM users WHERE user_id=$detailarray[2]";
	$result2 = mysqli_query($conn, $sql2);
	
	header("location:/BAAS_LK/systemadmin/cmremove.php");
}
else if($detailarray[0]=='forum')
{
	$sql1="DELETE FROM fanswer WHERE question_id=$detailarray[1]";
	$result1 = mysqli_query($conn, $sql1);
	
	$sql2="DELETE FROM fquestions WHERE id=$detailarray[1]";
	$result2 = mysqli_query($conn, $sql2);
	
	header("location:/BAAS_LK/systemadmin/forumremove.php");
}

else if($detailarray[0]=='job')
{
	$sql1="DELETE FROM postjob2 WHERE job_id=$detailarray[1]";
	$result1 = mysqli_query($conn, $sql1);
	
	
	header("location:/BAAS_LK/systemadmin/jobremove.php");
}


mysqli_close($conn);

?>