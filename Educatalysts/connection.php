<?php

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];
$email = $_POST['email'];

//Database connection
$conn = new mysqli('localhost','root','','userreg');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into userdetails(name, username, password, age, email)
     values (?,?,?,?,?)");
    $stmt->bind_param("sssss",$name, $username, $password, $age, $email);
    $stmt->execute();
    echo '<script>alert("now please login..")</script>';
    header("Location: login.php");
    $stmt->close();
    $conn->close();
    
}
?>