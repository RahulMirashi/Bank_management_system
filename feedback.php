
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

            <label>1.What was your first impression when you entered the website?</label>
            <input type="text" name="comment" class="form-control" id="comment">

            <label>2. How did you first hear about us?</label>
            <input type="text" name="comment" class="form-control" id="comment">

            <label>3. Is there anything missing on this page?</label>
            <input type="text" name="comment" class="form-control" id="comment">

            <label>4. How likely are you to recommend us to a friend or colleague?</label>
            <input type="text" name="comment" class="form-control" id="comment">

            <br>
            <div class="center">
            <input type="submit" name="submit" value="submit" id = "register_submit_btn" class = "btn btn-success" >
            </div>
        </div>
    </section>  
</html>
            <?php include('template/footer.php');?>