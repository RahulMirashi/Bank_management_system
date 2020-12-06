<?php 
	session_start();
	$conn = new mysqli("localhost","root","","bank");
	if(!$conn){
		die('Please check your connection'.mysqli_error());
	}
?>
