<?php include ('connection.php');
include('template/loginheader.php');
?>
<!DOCTYPE html>
<html>
<head>
 	<title>Personal and account details</title>
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
 </head>
 <body style="background-color: grey lighten-2">
 	
 	<!-- <h2 id = "heading" style="text-align: center">Personal and account details</h2> -->
 	
 		<div>

 			<h2 style="text-align: center">Customer Details</h2>
        <div style="width: 70%; margin-left:auto; margin-right:auto">

 			<table style="border:2px solid;justify-content: center;position: relative;">
 				<tr style="padding: 10px"><th>Customer ID</th>
                    <th>Account no.</th>
 					<th>First Name</th>
 					<th>Last Name</th>
 					<th>Address</th>
 					<th>Balance</th>
 				</tr>
 			<?php
                $cid = $_SESSION['user'];
                $accno = $_SESSION['acc'];
			 	$sql = "SELECT c.cid,b.accno,c.cfname,c.clname,c.caddress,b.balance,b.cardno FROM customer c, bank_account b WHERE c.cid='".$cid."' AND b.accno='".$accno."'";
				$res = mysqli_query($conn,$sql);
				
				while($row1=mysqli_fetch_assoc($res))
				{
					?>
					<tr><td style="padding: 10px"><?php echo $row1['cid'];?></td>
                        <td style="padding: 10px"><?php echo $row1['accno'];?></td>
						<td style="padding: 10px"><?php echo $row1['cfname'];?></td>
						<td style="padding: 10px"><?php echo $row1['clname'];?></td>
						<td style="padding: 10px"><?php echo $row1['caddress'];?></td>
                        <td style="padding: 10px"><?php echo $row1['balance'];?></td>
                        <td style="padding: 10px"><?php echo $row1['cardno'];?></td>
					</tr>
					<?php
				}
				 ?>
				 </table>
 		</div>
 </body>
 </html>
 <?php include('template/footer.php');?>