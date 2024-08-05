<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userreg');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from userdetails where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:userdashboard.php');
}
else{
    header('location:login.php');
}
?>