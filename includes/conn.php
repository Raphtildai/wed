<?php
    $servername = "localhost";
    $username = "tildaite_wedding_user";
    $password = "f}i{]F!DzayZ";
    $dbname = "tildaite_wedding";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>