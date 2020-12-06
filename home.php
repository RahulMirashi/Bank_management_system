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
    <div class="container-fluid bg-dark">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
</body>
    <?php include('template/footer.php');?>
</html>