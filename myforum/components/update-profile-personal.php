<?php
    ini_set("display_errors",1);
    session_start();
    $temp=$_SESSION['user_name'];
    if(isset($_POST)){
        require '../_database/database.php';
		
		
     
        $description=$_REQUEST['description'];
		$sp_contact_NO=$_REQUEST['sp_contact_NO'];
		$sp_catagory=$_REQUEST['sp_catagory'];
		$sp_area=$_REQUEST['sp_area'];
		$sp_dob=$_REQUEST['sp_dob'];
		$sp_gender=$_REQUEST['sp_gender'];
		$sp_address=$_REQUEST['sp_address'];
		$sp_website=$_REQUEST['sp_website'];
		$sp_previous_work=$_REQUEST['sp_previous_work'];
		
		$sql = "SELECT * FROM users where user_name='$temp'";
		$result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
		$rws = mysqli_fetch_array($result);
	
      
        $sql3="UPDATE serviceprovider SET description='$description',sp_contact_NO='$sp_contact_NO', sp_catagory='$sp_catagory', sp_area='$sp_area',sp_dob='$sp_dob',sp_gender='$sp_gender', sp_address='$sp_address',sp_website ='$sp_website',sp_previous_work='$sp_previous_work' WHERE user_id = '$rws[user_id]'";
        mysqli_query($database,$sql3)or die(mysqli_error($database));
        header("location:../edit-profile.php?user_name=$temp&request=profile-update&status=success");
			
			
			
			 
    }    
?>