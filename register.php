
<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php');?>
    
<body>
    
    <section class="container">
        <div class="col-lg 8 m-auto d-block">
        <h4 class="text success">Login Form</h4>
        <form action="registerprocess.php" method="POST" class="bg-light">
            <label> Enter your ID:</label>
            <input type="text" name="cid" class="form-control" id="cid" oninput = "return validation()">
            <p id="pcid" class="text-danger font-weight-bold"></p>

            <label> Enter your First name:</label>
            <input type="text" name="cfname" class="form-control" id="cfname" oninput = "return validation()">
            <p id="pcfname" class="text-danger font-weight-bold"></p>

            <label> Enter your Last name:</label>
            <input type="text" name="clname" class="form-control" id="clname" oninput = "return validation()">
            <p id="pclname" class="text-danger font-weight-bold"></p>

            <label> Enter your address:</label>
            <input type="text" name="caddress" class="form-control" id="caddress" oninput = "return validation()">
            <p id="pcaddress" class="text-danger font-weight-bold"></p>

            <label> Enter your password:</label>
            <input type="text" name="cpass" class="form-control" id="cpass" oninput = "return validation()">
            <p id="pcpass" class="text-danger font-weight-bold"></p>
            <br>
            <div class="center">
            <input type="submit" name="submit" value="submit" id = "register_submit_btn" class = "btn btn-success" disabled>
            </div>
        </div>
    </section>
    
    <script type="text/javascript">

            function validation(){
                    var flag = 0;

                    var cid = document.getElementById('cid').value;
                    var cfname = document.getElementById('cfname').value;
                    var clname = document.getElementById('clname').value;
                    var caddress = document.getElementById('caddress').value;
                    var cpass = document.getElementById('cpass').value;
                    
                    //cid valid
                    if(cid == ""){
                        $flag = 0;
                        document.getElementById('pcid').innerHTML="Please fill the ID field";
                    } 
                    else if((cid.length <=2)||(cid.length>=4)){
                        $flag = 0;
                        document.getElementById('pcid').innerHTML="cid length must be 3 digit";
                    }
                    else{$flag = 1;
                        document.getElementById('pcid').innerHTML="";
                    }
                    
                    //fname valid

                    if(cfname == ""){$flag = 0;
                        document.getElementById('pcfname').innerHTML="Please enter your First name";
                    } 
                    else if(!isNaN(cfname)){$flag = 0;
                        document.getElementById('pcfname').innerHTML="Name must contain characters";
                    }
                    else{$flag = 1;
                        document.getElementById('pcfname').innerHTML="";
                    }

                    //lname valid
                    if(clname == ""){$flag = 0;
                        document.getElementById('pclname').innerHTML="Please enter your Last name";
                    } 
                    else if(!isNaN(clname)){$flag = 0;
                        document.getElementById('pclname').innerHTML="Name must contain characters";
                    }
                    else{$flag = 1;
                        document.getElementById('pclname').innerHTML="";
                    }

                    //address valid
                    if(caddress == ""){$flag = 0;
                        document.getElementById('pcaddress').innerHTML="Please enter your address";
                    }
                    else if(!isNaN(caddress)){$flag = 0;
                        document.getElementById('pcaddress').innerHTML="Address must contain characters";
                    } 
                    else{$flag = 1;
                        document.getElementById('pcaddress').innerHTML="";
                    }


                    //password valid
                    if(cpass == ""){$flag = 0;
                        document.getElementById('pcpass').innerHTML="Please enter your password";
                    } 
                    else if((cpass.length <=4)||(cpass.length>=19)){$flag = 0;
                        document.getElementById('pcpass').innerHTML="Password must contain 5 to 20 characters";
                    }
                    else{$flag = 1;
                        document.getElementById('pcpass').innerHTML="";
                    }
                    
                    if($flag==1){
                        document.getElementById('register_submit_btn').disabled=false;
                    }
                return false;
            }
    </script>

</body>
        
    <?php 
    if(@$_GET['register_status'] == true)
			{
                echo "<h3> '".$_GET['register_status']."' </h3>";			
            }
            
            //footer
    include('template/footer.php');?>
</html>