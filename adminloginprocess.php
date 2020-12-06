<?php
    session_start();
    include('connection.php');

    if(isset($_POST['login'])){

        if(empty($_POST['bssn']) || empty($_POST['bpass'])){
            header("location:adminlogin.php?Empty=Please fill the form");
        }
        else{
            $query = "SELECT * FROM banker WHERE bssn = '".$_POST['bssn']."' and bpass = '".$_POST['bpass']."'";

            $result = mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result)){
                $_SESSION['user']=$_POST['bssn'];
                header("Location:home.php");
 		    }
 		    else{
 				header("Location:adminlogin.php?invalid=Invalid Username Or Password!!");
 			}
        }
    }
    else{
        echo 'Not working';
    }
?>
