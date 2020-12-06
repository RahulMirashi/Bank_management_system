<?php 

	$conn = new mysqli("localhost","root","","bank");

	if(!$conn){
		die('Please check yout connection'.mysqli_error());
	}
?>

