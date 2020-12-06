<?php 

<<<<<<< Updated upstream
	$conn = new mysqli("localhost","root","","bank");

<<<<<<< Updated upstream
?>
=======
	$conn = new mysqli("localhost","root","","test");

 ?>
>>>>>>> Stashed changes
=======
	if(!$conn){
		die('Please check yout connection'.mysqli_error());
	}

>>>>>>> Stashed changes
