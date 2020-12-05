<?php 

    // if(isset($_POST['submit'])){

    //     if(empty($_POST['cid'])){
    //         echo 'cid is required <br/>';
    //     }else{

    //     }
    //     if(empty($_POST['cfname'])){
    //         echo 'First name is required <br/>';
    //     }else{
            
    //     }
    //     if(empty($_POST['clname'])){
    //         echo 'Last name is required <br/>';
    //     }else{
            
    //     }
    //     if(empty($_POST['caddress'])){
    //         echo 'Address is required <br/>';
    //     }else{
            
    //     }
    //     if(empty($_POST['cpass'])){
    //         echo 'Password is required <br/>';
    //     }else{
            
    //     }
    // }


?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php');?>
<body>
    
    <section class="container">
        <div class="col-lg 8 m-auto d-block">
        <h4 class="text success">Login Form</h4>
        <form action="register.php" onsubmit="return validation()" method="POST" class="bg-light">
            <label> Enter your ID:</label>
            <input type="text" name="cid" class="form-control" id="user">

            <label> Enter your First name:</label>
            <input type="text" name="cfname" class="form-control" id="cfname">

            <label> Enter your Last name:</label>
            <input type="text" name="clname" class="form-control" id="clname">

            <label> Enter your address:</label>
            <input type="text" name="caddress" class="form-control" id="caddress">

            <label> Enter your password:</label>
            <input type="text" name="cpass" class="form-control" id="cpass">
            <br>
            <div class="center">
            <input type="submit" name="submit" value="submit" class = "btn btn-success">
            </div>
        </div>
    </section>
    
    <script type="text/javascript">

            function validation(){
                    

            }
    </script>
</body>
    <?php include('template/footer.php');?>
</html>s