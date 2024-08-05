<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Profile Update</title>
  <link rel="stylesheet" href="../Users/profilestyle.css">
  </head>
  <?php
  include '../Users/connect.php';
  session_start();
$username=$_SESSION['username'];
$query=mysqli_query($con,"SELECT * FROM userdetails where username='$username'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <div>
  <h2 class="logo">Educatalysts</h2>
            </div>
            <div>
    <h3 class="cont">Update Your Profile</h3>
            </div>
<div class="container1">
        <form method="post">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Name" value="<?php echo $row['name']; ?>" required />
          </div>
          <div class="mb-3">
            <label>Username</label>
            <input type="text" class="form-control" name="username" style="width:20em;" placeholder="Enter your Username" required value="<?php echo $row['username']; ?>" />
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" name="password" style="width:20em;" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
          </div>
          <div class="mb-3">
            <label>Age</label>
            <input type="text" class="form-control" name="age" style="width:20em;" required placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" required placeholder="Enter your Email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="mb-3">
              <button type="submit" name="submit" class="btn">Submit</button
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $query = "UPDATE userdetails SET name = '$name',
                   username = '$username', password = '$password', age = '$age', email = '$email'
                   WHERE username = '$username'";
                   $result = mysqli_query($con , $query) or die(mysqli_error($con));
                   ?>
                   <Script type="text/javascript">
                   window.location = "userprofile.php";
                   </script>
                   <?php
      }
      ?>
     