<?php 
    include('connection.php');
            
    $cid = $_POST['cid'];

    $sql = "DELETE FROM `customer` WHERE cid = '".$cid."';";
    $res = mysqli_query($conn,$sql);
    // while($row = mysqli_fetch_assoc($res))
    // {
    print_r($res);
    if(($res))
    {
        header("Location:admin.php?register_status=success"); 
    }
    else
    {
        header("Location:delete.php?register_status=Unable to create user check ur cid");
    }
    

?>