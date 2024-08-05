<?php

session_start();
header('location:adminlogin.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userreg');

$name = $_POST['name'];
$password = $_POST['password'];

$s = " select * from admin where name = '$name' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['name'] = $name;
    header('location:admindashboard.php');
}
else{
    header('location:adminlogin.php');
}
?>