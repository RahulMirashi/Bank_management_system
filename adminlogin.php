<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php');?>
    
<body>
    <section class="container">
        <div class="col-lg 8 m-auto d-block">
        <h4 class="text success text-center">Admin Login Form</h4>

        <?php 
            if(@$_GET['Empty']==true)
            {
        ?>
        <div class="alert-light text-danger text-center">
                <?php echo $_GET['Empty']; ?>
        </div>
        <?php       
            }
        ?>

        <?php 
            if(@$_GET['invalid']==true)
            {
        ?>
        <div class="alert-light text-danger text-center">
                <?php echo $_GET['invalid']; ?>
        </div>
        <?php       
            }
        ?>
        
        <form action="adminloginprocess.php" method="POST" class="bg-light">
            <label> Enter your ID:</label>
            <input type="text" name="bssn" class="form-control" id="bssn">       

            <label> Enter your password:</label>
            <input type="password" name="bpass" class="form-control" id="bpass">
            
            <br>
            <div class="center">
            <input type="submit" name="login" value="Login" id = "register_submit_btn" class = "btn btn-success">
            </div>
        </div>
    </section>

</body>
        
    <?php
            //footer
    include('template/footer.php');?>
</html>