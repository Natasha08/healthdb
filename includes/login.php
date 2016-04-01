<?php

$page_title = 'Login';
include ('../header.html');

if ( isset($errors) && !empty($errors))
{
	echo'<p id="err_msg">Our Apologies! There was a problem:<br>';
	foreach ($errors as $msg)
	{
		echo"-$msg<br>";
	}
	echo 'Please try again or <a href="register.php">Register</a></p>';
}
?>

<h1 class="loginheading">Login</h1>
<form action="login_action.php" method="POST" class="loginpage class="loginheading"">
<p>Email Address: <input type="text" name="email"></p>
<p>Password: <input type="password" name="pass"></p>
<p><input type="submit" value="Login"></p>
</form>

<?php include ('../footer.html');?>