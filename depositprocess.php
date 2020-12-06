<?php 
    include ('connection.php');
    if(isset($_POST['submit']))
    {

        $cid = $_SESSION['user'];
        $sql = "SELECT accno FROM bank_account WHERE cid = '".$cid."'";
        $dest_sql = mysqli_query($conn,$sql);
        $dest = 0;
        while($row = mysqli_fetch_assoc($dest_sql))
        {
            $dest = $row['accno'];
        };
        $amt = $_POST['amount'];
        $amount = (int)$amt;
        $sql = "SELECT balance FROM bank_account WHERE cid = '".$cid."'";
        $cust_bal = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($cust_bal))
        {
            $cbal = $row['balance'];
        };
        $cbal_f = $cbal + $amount;
        $sql = "SELECT max(tid) AS maxval FROM transactions";
        $id_sql = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($id_sql))
        {
            $id = $row['maxval'];
        };
        $id = $id + 1;
        $sql = "UPDATE bank_account SET balance='".$cbal_f."' WHERE cid = '".$cid."'";
        $dummy = mysqli_query($conn,$sql);
        $sql = "INSERT INTO transactions (tid, type, amount, main, src, dest) VALUES ('".$id."', 'Deposit', '".$amount."', '".$dest."', '0', '0')";
        echo ($sql);
        $dummy = mysqli_query($conn,$sql);
        header("Location:customer.php?status_good=Transaction Successful!");
    }
?>