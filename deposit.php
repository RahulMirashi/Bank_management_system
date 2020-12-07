<?php include('template/loginheader.php');?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Money Transfer Page</title>
 </head>
 <body>
 	<form action="depositprocess.php" method="post">
 	<label>Enter amount</label>
 	<input type="text" name="amount" placeholder="amount">
 	<button type="submit" name = "submit">DEPOSIT</button>
 	</form>
 </body>
</html>