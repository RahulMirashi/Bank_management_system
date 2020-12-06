<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php');?>
    
<body>
    <section class="container">
        <div class="col-lg 8 m-auto d-block">
        <h4 class="text success text-center">Login Form</h4>

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
        
        <form action="loginprocess.php" method="POST" class="bg-light">
            <label> Enter your ID:</label>
            <input type="text" name="cid" class="form-control" id="cid">
            <p id="pcid" class="text-danger font-weight-bold"></p>

            <label> Enter your password:</label>
            <input type="password" name="cpass" class="form-control" id="cpass">
            <p id="pcpass" class="text-danger font-weight-bold"></p>
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