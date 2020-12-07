<?php include ('connection.php');
include('template/loginheader.php');
?>
<!DOCTYPE html>
<html>
<head>
 	<title>Transaction logs</title>
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body style="background-color: grey lighten-2">
 	<h2 id = "heading" style="text-align: center">Admin Panel</h2>
 		<div>
 			<h2 style="text-align: center">Customer Details</h2>
        <div style="width: 70%; margin-left:auto; margin-right:auto">

 			<table style="border:2px solid;justify-content: center;position: relative;">
 				<tr style="padding: 10px">
                    <th style="padding: 10px">Transaction type</th>
 					<th style="padding: 10px">Amount</th>
 					<th style="padding: 10px">Destination Account</th>
 				</tr>
 			<?php 
                $accno = $_SESSION['acc'];
                $sql = "SELECT type, amount, dest from transactions where main = '".$accno."'";
				$res = mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($res))
				{
					?>
					<tr><td style="padding: 10px"><?php echo $row['type'];?></td>
                        <td style="padding: 10px"><?php echo $row['amount'];?></td>
						<td style="padding: 10px"><?php if($row['type']=='Transfer') {echo $row['dest'];} else{echo "-";}?></td>
					</tr>
					<?php 
				}
				?>
				</table>
				<a href="customer.php" class = "btn btn-success" style=" color: white; border:2px solid; height: 40px; width:100px">Back</a></br>
 		</div>
</body>
</html>
<?php include('template/footer.php');?>