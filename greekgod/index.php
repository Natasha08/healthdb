<?php 
$page_title = 'Login';
include 'includes/header.html';
?>
<!DOCTYPE html>
<div class="modal">
	<form action="login_action.php" method="POST">
	<h2 class="loginheading" id="loginPage">Login</h2>
	<p>Email Address: <input type="text" name="email" class="sess_data"></p>
	<p>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" class="sess_data"></p>
	<a href="privacy.html">Privacy Policy</a>&nbsp;&nbsp;&nbsp;<a href="useragree.html">User Agreement</a><br><br>
	<input type="checkbox" value="true"><em>I have read and understood the <br>privacy notice and user agreement.</em>
	<p><input type="image" src="img/loginbutton.png" value="Login" class="loginButton" alt="submit"></p>
	</form>
</div>
<?php
    if ( isset( $errors) && !empty( $errors))
  {
    	echo'<p id="err_msg">Oops! There was a problem:</p>';

    	foreach ($errors as $msg)
    	{
    	  echo "<p>- $msg<br></p>";
    	  }
    	  echo '<p>Please try again or <a href="register.php">Register</a></p>';
  }
  
 include 'includes/footer.html';
?> 