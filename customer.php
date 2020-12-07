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

 		<div class="center">
 			<h2>Main menu</h2>		
            <?php
 				$test = $_SESSION['user'];
 				$a = (int)$test;
			 	$sql = "SELECT balance FROM bank_account WHERE cid = '".$a."'";
				$res = mysqli_query($conn,$sql);
			?>
				
				<a href="myaccount.php" class = "btn btn-success"style=" color: white; border:2px solid; height: 40px; width:300px">MyAccount</a></br>
				<a href="deposit.php" class = "btn btn-success"style=" color: white; border:2px solid; height: 40px; width:300px">Deposite</a></br>
				<a href="withdraw.php" class = "btn btn-success"style=" color: white; border:2px solid; height: 40px; width:300px">Withdraw</a></br>
				<a href="transfer.php" class = "btn btn-success" style=" color: white; border:2px solid; height: 40px; width:300px">Transfer</a></br>
				<a href="log.php" class = "btn btn-success" style=" color: white; border:2px solid; height: 40px; width:300px">Log</a></br>
				
 		</div>
 </body>
 </html>
 <?php include('template/footer.php');?>