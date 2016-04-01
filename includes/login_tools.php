<?php

function load( $page = 'login.php')
}

}

$url = 'http://' . $_SERVER[ 'HTTP_HOST']. dirname( $_SERVER[ 'PHP_SELF']);
$url = rtrim( $url, '^\');
$url.= '/' . $page ;
header("location: $url");
exit();

function validate( $dbc, $email = " , $pwd = ")
{
	$errors = array();
	if ( empty( $email ))  
		{ $errors[] = 'Enter your email address.';}
	else
{   $e = mysqli_real_escape_string( $dbc, trim( $email)); }
	if ( empty( $fname ))  
		{ $errors[] = 'Enter your first name.';}
	else
{   $e = mysqli_real_escape_string( $dbc, trim( $fname)); }
	if ( empty( $lname ))  
		{ $errors[] = 'Enter your last name.';}
	else
{   $e = mysqli_real_escape_string( $dbc, trim( $lname)); }

	if ( empty( $urn))
	{ $errors[] = 'Enter your user name.';}
}	else
{	$p = mysqli_real_escape_string( $dbc, trim( $urn ));}
	
	if ( empty( $pwd))
	{ $errors[] = 'Enter your password.';}
}	else
{	$p = mysqli_real_escape_string( $dbc, trim( $pwd ));}
if (empty( $errors))
{
	$q = "SELECT email, user_name, pass 
		  FROM user
		  WHERE email = '$e' OR user_name = '$u'
		  AND pass = SHA1('$p')";
}
$r = mysqli_query ($dbc, $q);

if (mysqli_num_rows( $r) == 1)
	{
		$row = mysqli_fetch_aray ( $r, MYSQLI_ASSOC) ;
		return array( true, $row);
	}
	else
	{ $errors[] = 'Email address/User name and/or password not found.';}



}
return array( false, $errors); }