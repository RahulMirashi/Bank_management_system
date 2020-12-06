
<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php');?>
    
<body>
    
    <section class="container">
        <div class="col-lg 8 m-auto d-block">
        <h4 class="text success text-center">Feedback Form</h4>
        <form action="feedbackprocess.php" method="POST" class="bg-light">
            <label> Enter your ID:</label>
            <input type="text" name="cid" class="form-control" id="cid">

            <label> Enter any comments:</label>
            <input type="text" name="comment" class="form-control" id="comment">

            <label> Enter rating:</label>
            <input type="number" name="rating" class="form-control" id="rating" placeholder="From 1 to 10">
            
            <br>
            <div class="center">
            <input type="submit" name="submit" value="submit" id = "register_submit_btn" class = "btn btn-success" >
            </div>
        </div>
    </section>

</body>
        
    <?php     
            //footer
	include('template/footer.php');
	?>
</html>