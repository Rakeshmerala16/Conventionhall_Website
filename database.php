<?php
$conn = mysqli_connect("localhost","root","","login_register");

$name = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$mobile = $_POST['mobile'];


$query = "INSERT INTO users(userId,userName,email,pass,cpass,mobile) Values(NULL,'$name','$email','$password','$cpassword','$mobile')" ;
$result = mysqli_query($conn,$query);

  header("Location:index.php");
?>