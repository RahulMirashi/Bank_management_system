<!DOCTYPE html>
 <html>
 <head>
 	<title>Withdrwal Page</title>
 </head>
 <body>
 	<form method="post">
 	<label>Enter amount</label>
 	<input type="text" name="amount" placeholder="amount">vv
    <label>Enter destination account number</label>
 	<input type="text" name="ds_accno" placeholder="Destination account number">
 	<button type="submit" name = "submit">TRANSFER</button>
 	</form>
 </body>
</html>

<?php 
    include ('connection.php');
    if(isset($_POST['submit']))
    {
        $dest = $_POST['ds_accno'];
        $ds_accno = (int)$dest;
        $amt = $_POST['amount'];
        $amount = (int)$amt;
        $sql = "SELECT balance FROM bank_account WHERE cid = '".$cid."'";
        $cust_bal = mysqli_query($conn,$sql);
        $sql = "SELECT balance FROM bank_account WHERE accno = '".$ds_accno."'";
        $dest_bal = mysqli_query($conn,$sql);
        $cbal=0;
        $dbal=0;
        while($row = mysqli_fetch_assoc($cust_bal)){
            $cbal = $row['balance'];
        };
        while($row = mysqli_fetch_assoc($dest_bal)){
            $dbal = $row['balance'];
        };
        if ($cbal-$amount<0)
        {
            header("Location:customer.php?invalid=Insuffient Funds!!");
        }
        else
        {
            $dbal_f =$dbal + $amount;
            $cbal_f =$cbal - $amount;
            $sql = "UPDATE bank_account SET balance='".$dbal_f."' WHERE accno = '".$ds_accno."'";
            $dummy = mysqli_query($conn,$sql);
            $sql = "UPDATE bank_account SET balance='".$cbal_f."' WHERE cid = '".$cid."'";
            $dummy = mysqli_query($conn,$sql);
            header("Location:customer.php?Status=Transaction Successful");
        }
    }
?>