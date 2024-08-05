<?php
include('../Users/connect.php');
session_start();
$username=$_SESSION['username'];
$query=mysqli_query($con,"delete FROM userdetails where username='$username'")or die(mysqli_error());

header('location:../index.php');
?>