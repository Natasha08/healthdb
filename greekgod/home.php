<?php

session_start();
if ( !isset( $_SESSION[ 'email']))
{
	require 'login_tools.php';
	load();
}
$page_title = 'Home';
require 'includes/header.html';

echo "<h1>HOME</h1>
<p>You are now logged in, {$_SESSION['first_name']}</p>";

?>
<!DOCTYPE html>
<html>
   <li><a href="login.php" class="selected">Logout <?php print_r ($_SESSION['first_name']);?></a></li>
        <li><a href="input.php">Workout Input</a></li>
        <li><a href="reports.html">Reports</a></li>
        <li><a href="nutrition.html">Nutrition</a></li>  
</html>
