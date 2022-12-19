<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];


	// Database connection
	$conn = new mysqli('localhost','root','','tests');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
?>