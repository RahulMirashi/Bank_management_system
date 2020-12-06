<?php 
    include ('connection.php');
    if(isset($_POST['submit']))
    {

        $cid = $_SESSION['user'];
        $sql = "SELECT accno FROM bank_account WHERE cid = '".$cid."'";
        $src_sql = mysqli_query($conn,$sql);
        $src = 0;
        while($row = mysqli_fetch_assoc($src_sql))
        {
            $src = $row['accno'];
        };
        $dest = $_POST['dest'];
        $dest = (int)$dest;
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
        $sql = "SELECT * FROM bank_account WHERE accno='".$dest."'";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $res_check = $row['balance'];
        };
        echo $res_check;
        if ($cbal-$amount<0)
        {
            header("Location:customer.php?status_bad=Transaction failed! Insuffient Funds!");
        }
        else if($res_check == '')
        {
            header("Location:customer.php?status_bad=Transaction failed! Destination account does not exist!!"); 
        }
        else
        {
            $dbal_f = $dbal + $amount;
            $cbal_f = $cbal - $amount;
            $sql = "SELECT max(tid) AS maxval FROM transactions";
            $id_sql = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($id_sql))
            {
                $id = $row['maxval'];
            };
            $id = $id + 1;
            $sql = "UPDATE bank_account SET balance='".$dbal_f."' WHERE accno = '".$dest."'";
            $dummy = mysqli_query($conn,$sql);
            $sql = "UPDATE bank_account SET balance='".$cbal_f."' WHERE cid = '".$cid."'";
            $dummy = mysqli_query($conn,$sql);
            $sql = "INSERT INTO transactions (tid, type, amount, main, src, dest) VALUES ('".$id."', 'Transfer', '".$amount."', '".$src."', '".$src."', '".$dest."')";
            $dummy = mysqli_query($conn,$sql);
            header("Location:customer.php?status_good=Transaction Successful!");
        }
    }
?>