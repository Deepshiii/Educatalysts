<?php
include('adminconnect.php');
$id=$_GET['adminupdateid'];
$sql = "Select * from `admin` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$password = $row['password'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password =$_POST['password']; 
    $sql = "update `admin` set name='$name',password='$password' where id='$id'";
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
<title>Profile Update</title>
</head>
<body>
<div>
    <h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content-2">Update Admin Details</h1>
</div>
    <div class="container4">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" value=<?php echo $name;?>>
            </div>
           
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>