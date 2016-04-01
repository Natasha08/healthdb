<?php

$page_title = 'Register';
include ('includes/header.html');

if($_Server['REQUEST_METHOD'] == 'POST') {
	require ('../connect_db.php');
	$errors = array();

}
?>