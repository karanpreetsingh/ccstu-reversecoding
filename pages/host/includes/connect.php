<?php
	$configs = include('config.php');
	$conn = mysqli_connect($configs['db_host'], $configs['db_user'], $configs['db_password'], $configs['db_name']);
	if (!$conn) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>