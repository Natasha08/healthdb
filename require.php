<?php
if ( $_POST)
{

require '../connect_db.php';

if (!$dbcon) {
     die('Connection Failed');
} else {
     echo "Great Job!";
 } 
}
 ?>