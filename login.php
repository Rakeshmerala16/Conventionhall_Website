

<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
   
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img src="cg1.jpg" alt="">
             
                
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header>Login account</header>

                   <?php if(isset($_GET['error'])){  ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

                  <?php } ?>

                   <form id="form" method="POST" action="database2.php" onsubmit="return validation()">
                   <div class="input-field">
                        <input type="text" class="input" name="email" id="email" >
                        <label for="email">Email</label> 
                        <span class="error" id="emailerror"></span>
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" name="password" id="password" >
                        <label for="pass">Password</label>
                        <span class="error" id="passerror"></span>
                    </div> 
                   <div class="input-field">
                        
                        <button class="submit" ><a href="index.php">login</a></button>
                   </div> 
                   
                   <div><p>Not registered yet <a href="signup.php">Register Here</a></p></div>
                   </form> 
                </div>  
            </div>
        </div>
    </div>
</div>
        <script>
            var emailerror = document.getElementById("emailerror");
            var passerror = document.getElementById("passerror");
           


        function validation() {
            let email = document.getElementById("email").value;
            let pass = document.getElementById("password").value;

            if(email.length==0){
                emailerror.innerHTML="please Enter Your Email";
                return false;
            }
            if(email.match(/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/)){
                emailerror.innerHTML="";
            }
            if(pass.length < 3){
                passerror.innerHTML="Enter password";
                return false;
            }
            if(pass.match( /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)){
                passerror.innerHTML="";
            }
            

        }
</script>

</body>
</html>