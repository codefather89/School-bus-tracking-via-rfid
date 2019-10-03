<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "minor");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
    }

	// connect to database
       // coming soon...

	define('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/test/');
?>