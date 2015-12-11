<?php

	$servername = "localhost";
	$user = "root";
	$pass = "Redredred321";
	$dbname = "gh";
	 	$conn = new mysqli($servername, $user, $pass, $dbname);

 		if ($conn->connect_error) 
 		{
 	 		 die("Connection failed: " . $conn->connect_error);
		} 

?>