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
	 </br>
	 <a href="customer.php" class = "btn btn-success " style=" color: white; border:0px solid; height: 35px; width:80px; margin-top: 30px !important;">Back</a></br>
 	</form>
 </body>
</html>
<?php include('template/footer.php');?>