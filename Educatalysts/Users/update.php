<?php
include('connect.php');
$id=$_GET['updateid'];
$sql = "Select * from `userdetails` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$username = $row['username'];
$password = $row['password'];
$age = $row['age'];
$email = $row['email'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username =$_POST['username']; 
    $password =$_POST['password']; 
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "update `userdetails` set name='$name',username='$username',password='$password',age='$age',email='$email' where id='$id'";
    $result = mysqli_query($con,$sql);
    
    if($result){
       // echo "Data updated successfully";
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
<title>Educatalysts-Profile Update</title>
</head>
<body>
<div>
    <h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content">Update User Details</h1>
</div>
    <div class="container1">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" value=<?php echo $username;?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" value=<?php echo $password;?>>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="age" class="form-control" id="age" name="age" placeholder="Enter your Age" value=<?php echo $age;?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" value=<?php echo $email;?>>
            </div>
            <button type="submit" class="btn" name="submit">Update</button>
        </form>
    </div>
</body>
</html>