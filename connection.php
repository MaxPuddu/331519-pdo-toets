<?php 

$conn = mysqli_connect("localhost", "root", "", "pdo_toets");

		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

 ?>