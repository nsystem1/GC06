<?php
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
	$connection = mysqli_connect('localhost', 'root', '');
	if (!$connection){
	    die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'auction_platform3');
	if (!$select_db){
	    die("Database Selection Failed" . mysqli_error($connection));
	}
?>