<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>User Profile</title>
    </head>
    <body>
	<?php include 'navbar/navigation.php'?>
    	<div class="header">
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />	
	    </div>
        <div class="content">
<?php
//We check if the users ID is defined
if(isset($_GET['user_id']))
{
	$user_id = intval($_GET['user_id']);
	//We check if the user exists
	$dn = mysql_query('select user_name, user_email, user_avatar from users where user_id="'.$user_id.'"');
	if(mysql_num_rows($dn)>0)
	{
		$dnn = mysql_fetch_array($dn);
		//We display the user datas
?>
This is the profile of "<?php echo htmlentities($dnn['user_name']); ?>" :
<table style="width:500px;">
	<tr>
    	<td><?php
if($dnn['user_avatar']!='')
{
	echo '<img src="'.htmlentities($dnn['user_avatar'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:100px;max-height:100px;" />';
}
else
{
	echo 'This user do not have an avatar.';
}
?></td>
    	<td class="left"><h1><?php echo htmlentities($dnn['user_name'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['user_email'], ENT_QUOTES, 'UTF-8'); ?><br />
    </tr>
</table>
<?php
//We add a link to send a pm to the user
if(isset($_SESSION['user_name']))
{
?>
<br /><a href="new_pm.php?recip=<?php echo urlencode($dnn['user_name']); ?>" class="big">Send a PM to "<?php echo htmlentities($dnn['user_name'], ENT_QUOTES, 'UTF-8'); ?>"</a>
<?php
}
	}
	else
	{
		echo 'This user do not exist.';
	}
}
else
{
	echo 'The user ID is not defined.';
}
?>
		</div>
		<div class="foot"><a href="users.php">Go to the users list</a></div>
	</body>
</html>