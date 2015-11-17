<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/chat.css" rel="stylesheet" title="Style" />
        <title>Personal Messages</title>
		<link href="css/header.css" rel="stylesheet">
    </head>
    <body>
	<?php include 'header.php'?>
    	<div class="header">
        	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	    </div>
        <div class="content">
<?php
//We check if the user is logged
if(isset($_SESSION['username']))
{
//We list his messages in a table
//Two queries are executes, one for the unread messages and another for read messages
$req1 = mysql_query('select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, users.user_id as userid, users.user_name from pm as m1, pm as m2,users where ((m1.user1="'.$_SESSION['userID'].'" and m1.user1read="no" and users.user_id=m1.user2) or (m1.user2="'.$_SESSION['userID'].'" and m1.user2read="no" and users.user_id=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc');
$req2 = mysql_query('select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, users.user_id as userid, users.user_name from pm as m1, pm as m2,users where ((m1.user1="'.$_SESSION['userID'].'" and m1.user1read="yes" and users.user_id=m1.user2) or (m1.user2="'.$_SESSION['userID'].'" and m1.user2read="yes" and users.user_id=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc');

?>

<h1>Personal messages</h1><br /><br/>
<a href="new_pm.php" class="link_new_pm">Compose New Message</a><br />
<h3>Unread Messages(<?php echo intval(mysql_num_rows($req1)); ?>):</h3>
<table>
	<tr>
    	<th class="title_cell">Title</th>
        <th>No of Replies</th>
        <th>Participant</th>
        <th>Date of creation</th>
    </tr>
<?php
//We display the list of unread messages
while($dn1 = mysql_fetch_array($req1))
{
?>
	<tr>
    	<td class="left"><a href="read_pm.php?id=<?php echo $dn1['id']; ?>"><?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td><?php echo $dn1['reps']-1; ?></td>
    	<td><a href="profile.php?user=<?php echo $dn1['userid']; ?>"><?php echo htmlentities($dn1['user_name'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td><?php echo date('Y/m/d H:i:s' ,$dn1['timestamp']); ?></td>
    </tr>
<?php
}
//If there is no unread message we notice it
if(intval(mysql_num_rows($req1))==0)
{
?>
	<tr>
    	<td colspan="4" class="center">You have no unread message.</td>
    </tr>
<?php
}
?>
</table>
<br />
<h3>Read Messages(<?php echo intval(mysql_num_rows($req2)); ?>):</h3>
<table>
	<tr>
    	<th class="title_cell">Title</th>
        <th>No. of Replies</th>
        <th>Participant</th>
        <th>Date of creation</th>
    </tr>
<?php
//We display the list of read messages
while($dn2 = mysql_fetch_array($req2))
{
?>
	<tr>
    	<td class="left"><a href="read_pm.php?id=<?php echo $dn2['id']; ?>"><?php echo htmlentities($dn2['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td><?php echo $dn2['reps']-1; ?></td>
    	<td><a href="profile.php?user=<?php echo $dn2['userid']; ?>"><?php echo htmlentities($dn2['user_name'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td><?php echo date('Y/m/d H:i:s' ,$dn2['timestamp']); ?></td>
    </tr>
<?php
}
//If there is no read message we notice it
if(intval(mysql_num_rows($req2))==0)
{
?>
	<tr>
    	<td colspan="4" class="center">You have no read message.</td>
    </tr>
<?php
}
?>
</table>
<?php
}
else
{
	echo 'You must be logged to access this page.';
}
?>
		</div>
		<div class="foot"><a href="profile.php">Back to My Profile</a></div>
	</body>
</html>