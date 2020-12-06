<?php 
    include('connection.php');
            
    $cid = $_POST['cid'];
    $cfname = $_POST['cfname'];
    $clname = $_POST['clname'];
    $caddress = $_POST['caddress'];
    $cpass = $_POST['cpass'];

    //  $a = (int)$cid;
    $sql = "INSERT INTO `customer`(`cid`, `cfname`, `clname`, `caddress`, `cpass`) VALUES ('".$cid."','".$cfname."','".$clname."','".$caddress."','".$cpass."')";
    $res = mysqli_query($conn,$sql);
    // while($row = mysqli_fetch_assoc($res))
    // {
    print_r($res);
    if(!mysqli_error($res))
    {
        header("Location:home.php?register_status=success"); 
    }
    else
    {
        header("Location:register.php?register_status=Unable to create user check ur cid");
    }
    

?>