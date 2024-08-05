<?php
include 'adminconnect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
   $password =$_POST['password']; 
  $sql = "insert into `admin` (name,password) values('$name','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
       header('location:admindisplay.php');
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
 <link href="../Users/profilestyle.css" rel="stylesheet">
<title>Educatalysts-New Admin</title>
</head>
<body>
<div>
    <h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content-1">Add New Admin</h1>
</div>
    <div class="container3">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
            </div>
           
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>