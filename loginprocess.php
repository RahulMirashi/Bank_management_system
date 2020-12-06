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
                $sql = "SELECT accno from bank_account where cid='".$_POST['cid']."'";
                $res = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($res))
                {
                    $_SESSION['acc'] = $row['accno'];
                }; 
                header("Location:customer.php");
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
