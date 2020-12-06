<?php 
    session_start();

    if(isset($_GET['logout'])){
        $sql = "UPDATE customer SET isloggedin=0 where isloggedin=1";
        $dummy = mysqli_query($conn,$sql);
        session_destroy();
        header("location:login.php");
    }

?>