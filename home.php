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
        <!-- <img src="img/bank_logo.jpg" alt="Bank"> -->
        <img src="img/mazebank.jpg" alt="Bank" style="height :80%">
        <!-- <img src="img/Mazebanktrans.png" alt="Bank"> -->
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
    
       <p style="font-size:30px; text-align:center"> WELCOME TO OUR WEBSITE </p>
   
    </br>
</body>
<?php include('template/footer.php');?>  