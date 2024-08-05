<?php include 'neet_notes_admin_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Educatalysts- NEET Uploads</title>    
    <link rel="stylesheet" type="text/css" href="uploadstyle.css">
    <link rel="stylesheet" href="sidebar_left.css">
    <script src="icons.js" crossorigin="anonymous"></script> 
</head>
<body>
<div class="main_box">
    <input type="checkbox" id="check">
    <div class="btn_one">
      <label for="check">
        <i class="fas fa-bars"></i>
      </label>
    </div>
    <div class="sidebar_menu">
      <div class="logo-1">
        <img class="logo-edu"src="image\educatalysts.png" alt="Educatalysts">
       
        <a href="#" class="edu" >Educatalysts</a>
          </div>
        <div class="btn_two">
          <label for="check">
            <i class="fas fa-times"></i>
          </label>
        </div>
      <div class="menu-1">
        <ul>
          <li><i class="fas fa-solid fa-user"></i>
            <a href="./Profile/adminprofile.php">Admin Profile</a>
          </li>
          <li>
            <i class="fas fa-solid fa-users"></i>
            <a href="./admin/admindisplay.php">Admin Details</a>
          </li>
          <li>
            <i class="fas fa-solid fa-users"></i>
            <a href="./Users/display.php">User Details</a>
          </li>
          <!-- <li>
            <i class="fas fa-calendar-week"></i>
            <a href="#">Events</a>
          </li> -->
          <li>
            <i class="fas fa-question-circle"></i>
            <a href="aboutus.php">About Us</a>
          </li>

          <!-- <li>
            <i class="fas fa-phone-volume"></i>
            <a href="contact.php">Contact Us</a>
          </li> -->
          <li>
            <i class="fas fa-envelope-open-text"></i>
            <a href="contactdisplay.php">Queries</a>
          </li>
          <li>
          <i class="fas fa-sign-out-alt"></i>
            <a href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      <div class="social_media">
        <ul>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          
        </ul>
        </div>
      <div class="rights">
          <p>All Copyrights Reserved &copy;2022</p>
      </div>
    </div>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Educatalysts</h2>
            </div>

            <div class="menu">
                <ul class="navbar-2">
                    <!-- <li><a href="userdashboard.php">DASHBOARD</a></li> -->
                    <li><a href="neet_notes_admin_dwnld.php">DOWNLOAD</a></li>
                    <!-- <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li> -->
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>


        </div> 
        <div class="content">
            <h1>Upload &<br><span>Download NEET </span> <br>Files here</h1>
           
                <div class="form">
                    <h2>Upload NEET Notes</h2>
                    <form action="neet_notes_admin_dwnld.php" method="post" enctype="multipart/form-data">
                        <br>
                      <input type="file" name="myfile"> 
                    <br>
                      <button type="submit" class="btnn" name="save">Upload</a></button>
                       <br>
                      <p class="link">Want to Download NEET Notes?<br>
                      <br>
                      <a href="neet_notes_admin_dwnld.php">Download NEET Notes</a> here</a></p>
                    
                    </form>
                </div>
                    </div>
                </div>
        </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>