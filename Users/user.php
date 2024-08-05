<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username =$_POST['username']; 
    $password =$_POST['password']; 
    $age = $_POST['age'];
    $email = $_POST['email'];
    $sql = "insert into `userdetails` (name,username,password,age,email) values('$name','$username','$password','$age','$email')";
    $result = mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="profilestyle.css" rel="stylesheet">
<title>Educatalysts- New User</title>
</head>
<body>
<div>
    <h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content">Add New User</h1>
</div>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label><br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label><br>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label><br>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label><br>
                <input type="age" class="form-control" id="age" name="age" placeholder="Enter your Age">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
            </div>
            <button type="submit" class="btn" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>