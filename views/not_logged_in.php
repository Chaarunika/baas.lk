
<form method="post" action="login.php" name="loginform">
    <label for="user_name"><?php echo USERNAME_OR_EMAIL; ?></label> <br>
    <input id="user_name" type="text" name="user_name" required /><br>
    <label for="user_password"><?php echo PASSWORD; ?></label><br>
    <input id="user_password" type="password" name="user_password" autocomplete="off" required /><br>
    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
    <label for="user_rememberme"><?php echo REMEMBER_ME; ?></label><br><br>
    <input type="submit" name="login" value="<?php echo LOGIN; ?>" />
</form>
<br>
<a href="selectUser.php"><?php echo REGISTER; ?></a>


