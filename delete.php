<?php include('template/loginheader.php');
include('connection.php');?>

<!DOCTYPE html>
    <html>
    <head>
 	<title>Remove Customer</title>
        </head>
        <body>
            <form action="deleteprocess.php" method="post">
                <label>Enter cid</label>
                <input type="text" name="cid" placeholder="cid">
                <button type="submit" name = "submit">DELETE</button>
            </form>
        </body>
</html>

<?php include('template/footer.php');?>