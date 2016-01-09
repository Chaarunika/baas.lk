<?php 
include "../config/config.php";
include "../libraries/password_compatibility_library.php";
include "../_database/database.php"; 

$detail = $_GET["id"];
$detailarray = explode("||", $detail);
$descri = $_POST['secondLine1'];
$workhis = $_POST['secondLine2'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $detailarray[0];
$password = $detailarray[1];
$email = $detailarray[2];
$spCategory = $detailarray[3];
$district = $detailarray[4];
$primaryMobile= $detailarray[5];
$optionalMobile= $detailarray[6];
$address = $detailarray[7];
$hash_cost_factor = (defined('HASH_COST_FACTOR') ? HASH_COST_FACTOR : null);
$user_password_hash = password_hash($password, PASSWORD_DEFAULT, array('cost' => $hash_cost_factor));
$url="avatar/default.jpg";
$sp="sp";
$userActive=1;
$db_connection = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		      // write new users data into database
			  
	    $query_new_user_insert = $db_connection->prepare('INSERT INTO users (user_name,user_email,user_password_hash, user_active,user_registration_ip, user_registration_datetime,user_firstname,user_lastname,user_avatar,user_catagory,login_type) VALUES(:user_name,:user_email,:user_password_hash, :user_active, :user_registration_ip, now(),:user_firstname,:user_lastname,:user_avatar,:user_catagory,:login_type)');
		
		$query_new_user_insert->bindValue(':user_name', $username, PDO::PARAM_STR);
	    $query_new_user_insert->bindValue(':user_email', $email, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':user_password_hash', $user_password_hash, PDO::PARAM_STR);
	 
		$query_new_user_insert->bindValue(':user_active', $userActive, PDO::PARAM_BOOL);
	    $query_new_user_insert->bindValue(':user_registration_ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);	
		$query_new_user_insert->bindValue(':user_firstname',$firstname, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':user_lastname',$lastname, PDO::PARAM_STR);	
		$query_new_user_insert->bindValue(':user_avatar',$url, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':user_catagory',$sp, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':login_type',NULL, PDO::PARAM_STR);
	    $query_new_user_insert->execute();
	
					
		$user_id = $db_connection->lastInsertId();
		
					
		$query_new_user_insert = $db_connection->prepare('INSERT INTO serviceprovider(user_id,contactNo,opContactNo,category,area,descr,workInfo,address) VALUES(:user_id,:contactNo,:opContactNo,:category,:area,:descr,:workInfo,:address)');
		$query_new_user_insert->bindValue(':user_id', $user_id, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':contactNo', $primaryMobile, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':opContactNo', $optionalMobile, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':category', $spCategory, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':area', $district, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':descr', $descri, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':workInfo', $workhis, PDO::PARAM_STR);
		$query_new_user_insert->bindValue(':address',$address, PDO::PARAM_STR);
		$query_new_user_insert->execute();



	header('location:createprofile.php');


?>