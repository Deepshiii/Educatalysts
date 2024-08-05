<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet"  href="../Users/profilestyle.css">
</head>
  <?php
  include '../admin/adminconnect.php';
  session_start();
$name = $_SESSION['name'];
$query=mysqli_query($con,"SELECT * FROM admin where name='$name'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <body>
  <div>
    <h2 class="logo">Educatalysts</h2>
            </div>
            <div>
    <h3 class="content">Your Profile</h3>
            </div>
<div class="container5">
        <form method="post"  >
          <div class="mb-3">
            <label>Name</label>
            <input type="text" readonly class="form-control" name="name" style="width:20em;" placeholder="Enter your Name" value="<?php echo $row['name']; ?>" required />
          </div>
          
            <div class="mb-3">
            <label>Password</label>
            <input type="text" readonly class="form-control" name="password" style="width:20em;" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
          </div>
          <button class="btnn"><a href="adminprofileupdate.php">Update</a></button>
        </form>
      </div>
</body>
      </html>
     