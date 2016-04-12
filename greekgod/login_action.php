<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	require '../connect2_db.php';
	require 'login_tools.php';
	list ( $check, $data) = validate ( $dbcon, $_POST[ 'email'], $_POST[ 'pass']);
	
if (empty($check)) {
	echo'';
}
if  ( $check ) {
	session_start();
	$_SESSION['email'] = $data['email'];
	$_SESSION['first_name'] = $data['first_name'];
	$_SESSION['last_name'] = $data['last_name'];
	
	load ( 'home.php');
} else { $errors = $data;}

mysqli_close($dbcon); 
}
require 'index.php';


?>