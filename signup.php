
<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="sign.css">
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
                   
                   <header>Register account</header>
                   <form id="form" action="database.php" method="POST" onsubmit="return validation() ">
                   <div class="input-field">
                        <input type="text" class="input"  id="userName" name="userName"  >
                        <label for="name">Name</label> 
                        <span class="error" id="userNameerror"></span>
                        

                    </div> 
                   <div class="input-field">

                        <input type="email" class="input" id="email" name="email"  >
                        <label for="email">Email</label> 

                        <span class="error" id="emailerror"></span>

                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="password" name="password" >
                        <label for="pass">Password</label>
                        <span class="error" id="passworderror"></span>

                        
                    </div> 
                    <div class="input-field">
                        <input type="password" class="input" id="cpassword" name="cpassword" >
                        <label for="cpass">Confirm Password</label>
                        <span class="error" id="cpassworderror"></span>

                        
                    </div> 
                   
                    <div class="input-field">
                        <input type="tel" class="input" id="mobile" name="mobile" >
                        <label for="num">Mobile</label>
                        <span class="error" id="mobileerror"></span>

                    </div> 
                   <div class="input-field">
                        
                   <button class="submit"><a href="index.php">Register</a></button>
                   </div> <div><p>Aleady have an account <a href="login.php">Login Here</a></p></div>
                   </form>
                </div>  
            </div>
        </div>
    </div>
</div>
<script >
            var nameerror = document.getElementById("userNameerror");
            var emailerror = document.getElementById("emailerror");
            var passerror = document.getElementById("passworderror");
            var cpasserror = document.getElementById("cpassworderror");
            var mobileerror = document.getElementById("mobileerror");

            function validation() {
            let name = document.getElementById("userName").value;
            let email = document.getElementById("email").value;
            let pass = document.getElementById("password").value;
            let cpass = document.getElementById("cpassword").value;
            let mobile = document.getElementById("mobile").value;


            if (name.length == 0) {
                nameerror.innerHTML="Name is required";
                return false;
            }
            if(name.match(/^[A-za-z][A-Za-z_ ]{3,29}$/)){
                nameerror.innerHTML="";
                
            }
            else{
                nameerror.innerHTML="Enter correct name and name should have cap letters";
                return false;
             }

            if(email.length==0){
                emailerror.innerHTML="please Enter Your Email";
                return false;
            }
            if(email.match(/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/)){
                emailerror.innerHTML="";


            }
            else{
                emailerror.innerHTML="Enter correct Email";
                return false;
            }

            if(pass.length < 3){
                passerror.innerHTML="Enter password";
                return false;
            }
            if(pass.match( /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)){
                passerror.innerHTML="";
            

            }
            else{
                passerror.innerHTML="passsword must contains one captial,small,digit,symbol";
                return false;   
            }

            if(!pass==cpass){
                cpasserror.innerHTML="Confirm password and password shoud be same";
                return false;
            }
            else{
                cpasserror.innerHTML="";

            }

            if(mobile.length==0){
                mobileerror.innerHTML="Enter mobile number"
            }
            if(mobile.length < 10){
                mobileerror.innerHTML="Enter 10 digit Mobile Number";
                return false;
            }
            if(mobile.match(/^[6-9][0-9]{9}$/))
            {
                mobileerror.innerHTML="";
            }
            else{
                mobileerror.innerHTML="Mobile Number can contain atleast 10 digits";
                return false;   
            }
       
        }
           
</script>

</body>
</html>
