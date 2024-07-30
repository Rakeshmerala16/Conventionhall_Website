

<?php
$con = mysqli_connect("localhost", "root", "", "login_register");

$email = $_POST['email'];
$pass = $_POST['password'];


$query4 = "select * from users where email='$email' and pass='$pass'";

$result = mysqli_query($con, $query4);

$count = mysqli_num_rows($result);

if ($count > 0) {

    echo"Login successful";
    header("Location:index.php");


} else {
    echo 'not successful';
    header("Location:login.php?error=Invalid email or password");
    exit();
}

?>