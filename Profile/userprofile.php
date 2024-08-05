<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Profile</title>
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
    <div class="menu">
                <ul>
                    <li><a href="../Profile/confirmation.php">Delete Account</a></li>
                </ul>
    </div>
    <div>
        <h1 class="content">Your Profile</h1>
</div>

<div class="container">
        
        <form method="post">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" readonly class="form-control" name="name" style="width:20em;" placeholder="Enter your Name" value="<?php echo $row['name']; ?>" required />
          </div>
          <div class="mb-3">
            <label>Username</label>
            <input type="text" readonly class="form-control" name="username" style="width:20em;" placeholder="Enter your Username" required value="<?php echo $row['username']; ?>" />
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="text" readonly class="form-control" name="password" style="width:20em;" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
          </div>
          
          <div class="mb-3">
            <label>Age</label>
            <input type="text" readonly class="form-control" name="age" style="width:20em;" required placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="text" readonly class="form-control" name="email" style="width:20em;" required placeholder="Enter your Email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="mb-3">
              <button class="btnn"><a href="userprofileupdate.php">Update</a></button>
          </div>
          </div>
        </form>
      </div>
      </html>