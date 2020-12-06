<?php
    session_start();
    include('connection.php');

    if(isset($_POST['login'])){

        if(empty($_POST['cid']) || empty($_POST['cpass'])){
            header("location:login.php?Empty=Please fill the form");
        }
        else{
            $query = "SELECT * FROM customer WHERE cid = '".$_POST['cid']."' and cpass = '".$_POST['cpass']."'";

            $result = mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result)){
                $_SESSION['user']=$_POST['cid'];
                header("Location:home.php");
 		    }
 		    else{
 				header("Location:login.php?invalid=Invalid Username Or Password!!");
 			}
        }
    }
    else{
        echo 'Not working';
    }
?>
