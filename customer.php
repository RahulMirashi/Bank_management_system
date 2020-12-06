<?php 
    include('template/loginheader.php');
    include('connection.php');
?>
<!DOCTYPE html>
<html>
 	<head>
 		<title>Customer page</title>
 		<link rel="stylesheet" type="text/css" href="css/admin.css">
    </head>
    <body>
<?php 

if (isset($_GET["status_good"]))
{
	?>

	<h3 style="color: green; text-align: center"><?php echo $_GET['status_good']; ?></h3>

	<?php 
}
if(isset($_GET['status_bad']))
{
	?>
	<h3 style="color: red; text-align: center"><?php echo $_GET['status_bad']; ?></h3>

	<?php 
}
?>

 		<div>
 			<h2>Account Details</h2>		
            <?php
 				$test = $_SESSION['user'];
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
 <?php include('template/footer.php');?>