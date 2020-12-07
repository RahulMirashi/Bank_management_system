<?php 
    include('connection.php');
    $cid = $_POST['cid'];
    $cfname = $_POST['cfname'];
    $clname = $_POST['clname'];
    $caddress = $_POST['caddress'];
    $cpass = $_POST['cpass'];
    $dupli = "";

    $sql = "SELECT * FROM customer WHERE cid='".$cid."'";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res))
    {
        $dupli = $row['cid'];
        
    };

    if($dupli=="")
    {
        $sql = "INSERT INTO `customer`(`cid`, `cfname`, `clname`, `caddress`, `cpass`) VALUES ('".$cid."','".$cfname."','".$clname."','".$caddress."','".$cpass."')";
        $res = mysqli_query($conn,$sql);

        $sql = "SELECT max(accno) AS maxacc FROM bank_account";
        $accno_sql = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($accno_sql))
        {
            $accno = $row['maxacc'];
        };
        $accno = $accno + 1;
        echo $accno;
        $sql = "SELECT max(cardno) AS maxcard FROM bank_account";
        $cardno_sql = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($cardno_sql))
        {
            $cardno = $row['maxcard'];
        };
        $cardno = $cardno + 1;

        $sql = "INSERT INTO `bank_account` (`accno`, `balance`, `cid`, `cardno`) VALUES ('".$accno."','0','".$cid."','".$cardno."');";
        $res = mysqli_query($conn,$sql);

        header("Location:home.php?register_status=success"); 
     }
    // if(!$res)
    // {
    //     header("Location:home.php?register_status=success"); 
    // }
    else
    {
        header("Location:register.php?register_status=cid already exist");
    }
    

?>