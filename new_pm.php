<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<title>baas.lk</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/chat.css" rel="stylesheet" title="Style" />
        <title><?php echo NEWMESSAGE ; ?></title>
		<link href="css/header.css" rel="stylesheet">
    </head>
    <body>
	<?php include 'header.php'?>
    	<div class="header">
        	<br /><br /><br /><br />
	    </div>
<?php
//We check if the user is logged
if(isset($_SESSION['username']))
{
$form = true;
$otitle = '';
$orecip = '';
$omessage = '';
//We check if the form has been sent
if(isset($_POST['title'], $_POST['recip'], $_POST['message']))
{
	$otitle = $_POST['title'];
	$orecip = $_POST['recip'];
	$omessage = $_POST['message'];
	//We remove slashes depending on the configuration
	if(get_magic_quotes_gpc())
	{
		$otitle = stripslashes($otitle);
		$orecip = stripslashes($orecip);
		$omessage = stripslashes($omessage);
	}
	//We check if all the fields are filled
	if($_POST['title']!='' and $_POST['recip']!='' and $_POST['message']!='')
	{
		//We protect the variables
		$title = mysql_real_escape_string($otitle);
		$recip = mysql_real_escape_string($orecip);
		$message = mysql_real_escape_string(nl2br(htmlentities($omessage, ENT_QUOTES, 'UTF-8')));
		//We check if the recipient exists

		$dn1 = mysql_fetch_array(mysql_query('select count(user_id) as recip, user_id as recipid, (select count(*) from pm) as npm from users where user_name="'.$recip.'"'));
		


		if($dn1['recip']==='1')
		{
			//We check if the recipient is not the actual user
			if($dn1['recipid']!=$_SESSION['userID'])
			{
				$id = $dn1['npm']+1;
				//We send the message
				if(mysql_query('insert into pm (id, id2, title, user1, user2, message, timestamp, user1read, user2read)values("'.$id.'", "1", "'.$title.'", "'.$_SESSION['userID'].'", "'.$dn1['recipid'].'", "'.$message.'", "'.time().'", "yes", "no")'))
				{
?>
<div class="message"><?php echo THEMESSAGESENDSUCCESSFULLY ; ?>.
</div>
<?php
					$form = false;
				}
				else
				{
					//Otherwise, we say that an error occured
					$error = 'An error occurred while sending the message';
				}
			}
			else
			{
				//Otherwise, we say the user cannot send a message to himself
				$error = 'You cannot send a message to yourself.';
			}
		}
		else
		{
			//Otherwise, we say the recipient does not exists
			$error = 'The recipient does not exist.';
		}
	}
	else
	{
		//Otherwise, we say a field is empty
		$error = 'A field is empty. Please fill all the fields.';
	}
}
elseif(isset($_GET['recip']))
{
	//We get the username for the recipient if available
	$orecip = $_GET['recip'];
}
if($form)
{
//We display a message if necessary
if(isset($error))
{
	echo '<div class="error">'.$error.'</div>';
}
//We display the form
?>
<div class="content">
	<h1><?php echo NEWMESSAGE ; ?></h1><br/><br/>
    <form action="new_pm.php" method="post">
		<font face="Trebuchet MS, Arial, Helvetica, sans-serif">
		<label for="title"><?php echo TITLE ; ?></label><input type="text" value="<?php echo htmlentities($otitle, ENT_QUOTES, 'UTF-8'); ?>" id="title" name="title" /><br /><br/>
        <label for="recip"><?php echo RECIPIENT ; ?><span class="small">(<?php echo USERNAME ; ?>)</span></label><input type="text" value="<?php echo htmlentities($orecip, ENT_QUOTES, 'UTF-8'); ?>" id="recip" name="recip" /><br /><br/>
        <label for="message"><?php echo MESSAGE ; ?></label><textarea cols="40" rows="5" id="message" name="message"><?php echo htmlentities($omessage, ENT_QUOTES, 'UTF-8'); ?></textarea><br /><br/></font>
        <input type="submit" value="<?php echo SEND ; ?>" />
    </form>
</div>
<?php
}
}
else
{
	echo '<div class="error">You must be logged to access this page.</div>';
}
?>
		<div class="foot"><a href="list_pm.php"><?php echo GOTOMYPERSONALMESSAGES ; ?></a></div>
	</body>
</html>