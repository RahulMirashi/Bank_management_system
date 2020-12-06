<?php 
    include('connection.php');
            
    $cid = $_POST['cid'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO `feedback`(`cid`, `comment`, `rating` ) VALUES ('".$cid."','".$comment."','".$rating."')";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    
    if($res)
    {
        header("Location:home.php?register_status=success"); 
    }
    else
    {
        header("Location:feedback.php?register_status=");
    }
    
?>