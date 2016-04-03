<?php
				include_once('_database/database.php');
				session_start();

				$id=$_SESSION['username'];
				$email=$_SESSION['email'];
				$firstname=$_SESSION['firstname'];
				$lastname=$_SESSION['lastname'];
				$url=$_SESSION['url'];
				$userCatagory=$_SESSION['Catagory'];
				$loginType=$_SESSION['loginType'];
				$userActive=1;

				$db_connection = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
				      // write new users data into database
			    $query_new_user_insert = $db_connection->prepare('INSERT INTO users (user_name,user_email,user_active,user_registration_ip, user_registration_datetime,user_firstname,user_lastname,user_avatar,user_catagory,login_type) VALUES(:user_name,:user_email,:user_active, :user_registration_ip, now(),:user_firstname,:user_lastname,:user_avatar,:user_catagory,:login_type)');
				
				$query_new_user_insert->bindValue(':user_name', $id, PDO::PARAM_STR);
			    $query_new_user_insert->bindValue(':user_email', $email, PDO::PARAM_STR);
				$query_new_user_insert->bindValue(':user_active', $userActive, PDO::PARAM_BOOL);
			    $query_new_user_insert->bindValue(':user_registration_ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);		
				$query_new_user_insert->bindValue(':user_firstname',$firstname, PDO::PARAM_STR);
				$query_new_user_insert->bindValue(':user_lastname',$lastname, PDO::PARAM_STR);
				$query_new_user_insert->bindValue(':user_avatar',$url, PDO::PARAM_STR);
				$query_new_user_insert->bindValue(':user_catagory',$userCatagory, PDO::PARAM_STR);
				$query_new_user_insert->bindValue(':login_type',$loginType, PDO::PARAM_STR);
			    $query_new_user_insert->execute();
							
				$user_id = $db_connection->lastInsertId();

				if($userCatagory == "sp")
				{				
				$query_new_user_insert = $db_connection->prepare('INSERT INTO serviceprovider(user_id) VALUES(:user_id)');
				$query_new_user_insert->bindValue(':user_id', $user_id, PDO::PARAM_STR);
				$query_new_user_insert->execute();
				$_SESSION['Catagory']	= "sp" ;
				}

				else if($userCatagory == "customer"){
				$query_new_user_insert = $db_connection->prepare('INSERT INTO customer(user_id) VALUES(:user_id)');
				$query_new_user_insert->bindValue(':user_id', $user_id, PDO::PARAM_STR);
				$query_new_user_insert->execute();
				$_SESSION['Catagory']	= "customer" ;
				}

		

				$sql = "SELECT * FROM users where user_name=$id";
			    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
			    $rws = mysqli_fetch_array($result);

			    if($id==$rws['user_name'])
				{
				//user catagory for session for previously signed fb users$_SESSION['catagory']	= $rws['user_catagory'] ;
				$_SESSION['userID']	= $rws['user_id'] ;
				
			    }

			    header('Location:../index.php');
?>