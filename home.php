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
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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
    
       <p class="card container-fluid" style="font-size:30px; width:40%; text-align:center; text-align:center; font-style: italic;font-family:'Montserrat', sans-serif;"> "Invest in the red, it's in your interest" </p>
   
    </br>
    <div class="container-fluid bg-dark " style="font-size:17px; width:60%; text-align:center; font-family:'Montserrat', sans-serif;">
        Maze has been the target from more boycotts, demonstrations and civil right lawsuits than any other bank in America. Access to that wealth of experience doesn't come cheap, but a good education is an investment worth any price.
    </div>
    <br/>
</body>

<footer class="page-footer font-small blue pt-4" style="position:absolute; width: 100%;">
  <div class="container">
    
    <div class="row">
     
      <div class="col-md-4 mb-md-0 mb-3">
        <h5>BANK</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">About us</a>
          </li>
          <li>
            <a href="#!">Developers</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 mb-md-0 mb-3">
        
        <h5 class="More">Links</h5>
        <ul class="list-unstyled">
          <li>
            <a href="<?php echo SROOT."#!"; ?>">Something here</a>
          </li>
          <li>
            <a href="<?php echo SROOT."#!"; ?>">Something here</a>
          </li>
          <li>
            <a href="<?php echo SROOT."#!"; ?>">Something here</a>
          </li>
        </ul>
      </div>
      
      <div class="col-md-4 mb-md-0 mb-3">
        
        <h5 class="">Get in touch</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Toll Free no. </a>
          </li>
        </ul>
      </div>
      
    </div>
    
  </div>  