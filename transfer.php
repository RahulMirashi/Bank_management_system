<?php include('template/loginheader.php');?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Money Transfer Page</title>
 </head>
 <body>
 	<form action="transferprocess.php" method="post">
 	<label>Enter amount</label>
 	<input type="text" name="amount" placeholder="amount">
    <label>Enter destination account number</label>
 	<input type="text" name="dest" placeholder="Destination account number">
 	<button type="submit" name = "submit">TRANSFER</button>
 	</form>
 </body>
</html>