<?php 
    session_start();

    // if(isset($_SESSION['user'])){
    //     echo 'Welcome '.$_SESSION['user'].'<br/>';
    //     echo '<a href="logout.php?logout">LOGOUT</a>';
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php');?>
<body>
    <div class="center">
        <img src="img/bank_logo.jpg" alt="Bank">
    </div>
    <div class="text-center">
        <?php
            if(isset($_SESSION['user'])){
                echo 'Welcome '.$_SESSION['user'].'<br/>';
                echo '<a href="logout.php?logout">LOGOUT</a>';
        }       
        ?>
    </div>
    <br/>
    <div class="container-fluid bg-dark text-center">
       <p> WELCOME TO MAZE BANK </p>
    </div>
    </br>
</body>
    <?php include('template/footer.php');?>
</html>