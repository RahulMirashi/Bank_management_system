<!DOCTYPE html>
 <html>
 <head>
 	<title>Customer page</title>
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
 </head>
 <body>
 <?php 

if (isset($_GET["Status"]) && $_GET["Status"] == "True")
{
	?>

	<h3 style="color: green; text-align: center"><?php echo $_GET['Status']; ?></h3>

	<?php 
}
if($_GET['invalid'] == "True")
{
	?>

	<h3 style="color: red; text-align: center"><?php echo $_GET['invalid']; ?></h3>

	<?php 
}
?>
<?php 
	echo "Before";
	var_dump($_GET);
	if($_GET['login_status'] == "True")
	{
		echo "after";
	?>
		<h3 style="color: green; text-align: center"><?php echo $_GET['login_status']; ?></h3>;

	<?php 
}
?>
 		<div>
 			<h2>Account Details</h2>		
 			<?php 
 				$test = $_GET['name'];
 				$a = (int)$test;
			 	$sql = "SELECT balance FROM bank_account WHERE cid = '".$a."'";
				$res = mysqli_query($conn,$sql);
			?>
				
				<a href="myaccount.php"style=" color: white;background-color: black; border:2px solid; height: 20px; width:300px">MyAccount</a>
				<a href="deposit.php" style=" color: white;background-color: black; border:2px solid; height: 20px; width:300px">Deposite</a>
				<a href="withdraw.php"style=" color: white;background-color: black; border:2px solid; height: 20px; width:300px">Withdraw</a>
				<a href="transfer.php" style=" color: white;background-color: black; border:2px solid; height: 20px; width:300px">Transfer</a>
				<a href="transactionlog.php" style=" color: white;background-color: black; border:2px solid; height: 20px; width:300px">Log</a>
				
 		</div>
 </body>
 </html>