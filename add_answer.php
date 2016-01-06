<?php
include 'sessioncheck.php';
include "_database/database.php";
if($_SESSION["username"]){
	
$user= $_SESSION['username'];
$usercatagory=$_SESSION['Catagory'];
$userphoto=$_SESSION['url'];

$tbl_name="fanswer"; // Table name 
 
// Get value of id that sent from hidden field 
$id=$_POST['id'];
 
// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysqli_query($database,$sql);
$rows=mysqli_fetch_array($result);
 
// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}
 
// get values that sent from form 
$a_answer=$_POST['a_answer']; 
 
$datetime=date("d/m/y H:i:s"); // create date and time
 
// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id,user,userphoto,a_answer, a_datetime,user_catagory)VALUES('$id', '$Max_id','$user', '$userphoto','$a_answer', '$datetime','$usercatagory')";
$result2=mysqli_query($database,$sql2);
 
if($result2){
// If added new answer, add value +1 in reply column 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysqli_query($database,$sql3);
header('Location: view_topic.php?id='.$id.'');
   exit();
}
else {
echo "ERROR";
}
 
// Close connection
mysqli_close($database);
}

?>