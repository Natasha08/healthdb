<?php

function load( $page = 'index.php') {

$url = 'http://' . $_SERVER[ 'HTTP_HOST']. dirname( $_SERVER[ 'PHP_SELF']);
$url = rtrim( $url, '/\\');
$url.= '/' . $page ;
header("location: $url");
exit();

}

function validate( $dbcon, $email = "" ,$pwd = "") {

	$errors = array();
	if ( empty( $email ))  
		{ $errors[] = 'Enter your email address.';}
	else   
{   $e = mysqli_real_escape_string( $dbcon, trim( $email)); 
}
	if ( empty( $pwd))
	{ echo '';}
	else
{	$p = mysqli_real_escape_string( $dbcon, trim( $pwd ));

}

if (empty( $errors))
{
	$q = "SELECT email, first_name, last_name, pass FROM otstudyc_users.user WHERE email = '$e' AND pass = '$p'";
	$r = mysqli_query($dbcon, $q);
	  if (mysqli_num_rows( $r ) == 1){
		$row = mysqli_fetch_array ($r, MYSQLI_ASSOC) ;
		return array( true, $row);
	}
	else
	{ $errors[] = 'Email address and/or password not found.';}
}
}

return array( false, $errors); 


?>
