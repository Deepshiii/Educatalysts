<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Profile</title>
  <link rel="stylesheet" href="../Users/profilestyle.css">
  </head>
  <?php
  include '../admin/adminconnect.php';
  session_start();
$name = $_SESSION['name'];
$query=mysqli_query($con,"SELECT * FROM admin where name='$name'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <div>
  <h2 class="logo">Educatalysts</h2>
            </div>
            <div>
    <h3 class="conte">Update Your Profile</h3>
            </div>
<div class="container4">
        <form method="post"  >
          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Name" value="<?php echo $row['name']; ?>" required />
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" name="password" style="width:20em;" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
          </div>
          <div class="mb-3">
              <button type="submit" name="submit" class="btn">Submit</button
            </div>
       </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "UPDATE admin SET name = '$name',
                 password = '$password'
                   WHERE name = '$name'";
                   $result = mysqli_query($con , $query) or die(mysqli_error($con));
                   ?>
                   <Script type="text/javascript">
                   window.location = "adminprofile.php";
                   </script>
                   <?php
      }
      ?>