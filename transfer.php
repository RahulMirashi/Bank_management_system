<!DOCTYPE html>
 <html>
 <head>
 	<title>Money Transfer Page</title>
 </head>
 <body>
 	<form method="post">
 	<label>Enter amount</label>
 	<input type="text" name="amount" placeholder="amount">
    <label>Enter destination account number</label>
 	<input type="text" name="dest" placeholder="Destination account number">
 	<button type="submit" name = "submit">TRANSFER</button>
 	</form>
 </body>
</html>

<?php 
    include ('connection.php');
    if(isset($_POST['submit']))
    {

        $cid = "101";
        $sql = "SELECT accno FROM bank_account WHERE cid = '".$cid."'";
        $src_sql = mysqli_query($conn,$sql);
        $src = 0;
        while($row = mysqli_fetch_assoc($src_sql))
        {
            $src = $row['accno'];
        };

        // validate if dest exists or not

        $dest = $_POST['dest'];
        $dest = (int)$dest;
        echo($dest);
        $amt = $_POST['amount'];
        $amount = (int)$amt;
        $sql = "SELECT balance FROM bank_account WHERE cid = '".$cid."'";
        $cust_bal = mysqli_query($conn,$sql);
        $sql = "SELECT balance FROM bank_account WHERE accno = '".$dest."'";
        $dest_bal = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($cust_bal))
        {
            $cbal = $row['balance'];
        };
        while($row = mysqli_fetch_assoc($dest_bal))
        {
            $dbal = $row['balance'];
        };
        echo ("hii");
        echo ($cbal);
        echo ("hii");
        echo ($dbal);
        echo ("hii");
        if ($cbal-$amount<0)
        {
            header("Location:customer.php?invalid=Insuffient Funds!!");
        }
        
        else
        {
            $dbal_f = $dbal + $amount;
            $cbal_f = $cbal - $amount;
            $sql = "SELECT max(tid) AS maxval FROM transactions";
            $id_sql = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($))
            {
                $id = $row['maxval'];
            };
            $id = $id + 1;
            $sql = "UPDATE bank_account SET balance='".$dbal_f."' WHERE accno = '".$dest."'";
            $dummy = mysqli_query($conn,$sql);
            $sql = "UPDATE bank_account SET balance='".$cbal_f."' WHERE cid = '".$cid."'";
            $dummy = mysqli_query($conn,$sql);
            $sql = "INSERT INTO 'transactions'('tid', 'type', 'amount', 'src', 'dest') VALUES ('".$id."', 'Transfer', '".$amount."', '".$src."', '".$dest."')";
            //header("Location:customer.php?Status=Transaction Successful");
        }
   }
?>