<?php

    $hostname = "localhost";
	//$username = "androida_andyc";
	//$password = "mYsqlp4ss.";
	//$database = "androida_cart";

    $username = "root";
	$password = "root";
	$database = "cart";     

	$link = mysqli_connect($hostname, $username, $password, $database);
	
	if (mysqli_connect_error()) {
		
		die("There was an error connecting to the database");
		
	}

?>
