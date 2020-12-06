<?php 
	$conn =mysqli_connect("localhost","root","","bank");	
 ?>
<?php include('template/loginheader.php');?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Panel</title>
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
 </head>
 <body style="background-color: grey lighten-2">
 	
 	<h2 id = "heading" style="text-align: center">Admin Panel</h2>
 	
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
			 	$sql1 = "SELECT c.cid,b.accno,c.cfname,c.clname,c.caddress,b.balance FROM customer c, bank_account b WHERE c.cid=b.cid";
			 	
				$res1 = mysqli_query($conn,$sql1);
				
				while($row1=mysqli_fetch_assoc($res1))
				{
					?>
					<tr><td style="padding: 10px"><?php echo $row1['cid'];?></td>
                        <td style="padding: 10px"><?php echo $row1['accno'];?></td>
							 <td style="padding: 10px"><?php echo $row1['cfname'];?></td>
							 <td style="padding: 10px"><?php echo $row1['clname'];?></td>
							 <td style="padding: 10px"><?php echo $row1['caddress'];?></td>
                             <td style="padding: 10px"><?php echo $row1['balance'];?></td>
					</tr>

					<?php 
				}
				 ?>

				 </table>
                 <a href="home.php" id = "logout">Logout</a>
 		</div>
 		
 		
 </body>
 </html>
 <?php include('template/footer.php');?>