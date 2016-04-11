<?php

$page_title = 'Register';
include ('header.html');

if($_Server['REQUEST_METHOD'] == 'POST') {
	require ('../connect_db.php');
	$errors = array();

}
?>