<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Sign up</title>
    </head>
    <body>
	<?php include 'navbar/navigation.php'?>
    	<div class="header">
        	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	    </div>
<?php
//We check if the form has been sent
if(isset($_POST['user_name'], $_POST['user_password_hash'], $_POST['passverif'], $_POST['user_email'], $_POST['user_avatar']) and $_POST['user_name']!='')
{
	//We remove slashes depending on the configuration
	if(get_magic_quotes_gpc())
	{
		$_POST['user_name'] = stripslashes($_POST['user_name']);
		$_POST['user_password_hash'] = stripslashes($_POST['user_password_hash']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['user_email'] = stripslashes($_POST['user_email']);
		$_POST['user_avatar'] = stripslashes($_POST['user_avatar']);
	}
	//We check if the two passwords are identical
	if($_POST['user_password_hash']==$_POST['passverif'])
	{
		//We check if the password has 6 or more characters
		if(strlen($_POST['user_password_hash'])>=6)
		{
			//We check if the email form is valid
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['user_email']))
			{
				//We protect the variables
				$user_name = mysql_real_escape_string($_POST['user_name']);
				$user_password_hash = mysql_real_escape_string($_POST['user_password_hash']);
				$user_email = mysql_real_escape_string($_POST['user_email']);
				$user_avatar = mysql_real_escape_string($_POST['user_avatar']);
				//We check if there is no other user using the same username
				$dn = mysql_num_rows(mysql_query('select user_id from users where user_name="'.$user_name.'"'));
				if($dn==0)
				{
					//We count the number of users to give an ID to this one
					$dn2 = mysql_num_rows(mysql_query('select user_id from users'));
					$user_id = $dn2+1;
					//We save the informations to the databse
					if(mysql_query('insert into users(user_id, user_name, user_password_hash, user_email, user_avatar) values ('.$user_id.', "'.$user_name.'", "'.$user_password_hash.'", "'.$user_email.'", "'.$avatar.'")'))
					{
						//We dont display the form
						$form = false;
?>
<div class="message">You have successfuly been signed up. You can log in.<br />
<a href="connexion.php">Log in</a></div>
<?php
					}
					else
					{
						//Otherwise, we say that an error occured
						$form = true;
						$message = 'An error occurred while signing up.';
					}
				}
				else
				{
					//Otherwise, we say the username is not available
					$form = true;
					$message = 'The username you want to use is not available, please choose another one.';
				}
			}
			else
			{
				//Otherwise, we say the email is not valid
				$form = true;
				$message = 'The email you entered is not valid.';
			}
		}
		else
		{
			//Otherwise, we say the password is too short
			$form = true;
			$message = 'Your password must contain at least 6 characters.';
		}
	}
	else
	{
		//Otherwise, we say the passwords are not identical
		$form = true;
		$message = 'The passwords you entered are not identical.';
	}
}
else
{
	$form = true;
}
if($form)
{
	//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>
<div class="content">
    <form action="sign_up.php" method="post">
        Please fill the following form to sign up:<br />
        <div class="center">
            <label for="username">Username</label><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="password">Password<span class="small">(6 characters min.)</span></label><input type="password" name="password" /><br />
            <label for="passverif">Password<span class="small">(verification)</span></label><input type="password" name="passverif" /><br />
            <label for="email">Email</label><input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
			<label for="avatar">Avatar<span class="small">(optional)</span></label><input type="text" name="avatar" value="<?php if(isset($_POST['user_avatar'])){echo htmlentities($_POST['user_avatar'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <input type="submit" value="Sign up" />
		</div>
    </form>
</div>
<?php
}
?>
		<div class="foot"><a href="<?php echo $url_home; ?>">Back</a></div>
	</body>
</html>