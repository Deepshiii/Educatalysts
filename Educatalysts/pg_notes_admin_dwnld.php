<?php include 'pg_notes_admin_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Educatalysts-Programming Downloads</title>
    <link rel="stylesheet" type="text/css" href="downloadstyle.css">
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
        <ul class="sidebar-list">
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
                    <li><a href="pg_notes_admin_upload.php">UPLOAD</a></li>
                    <!-- <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li> -->
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>

            <!-- <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div> -->

        </div> 
        <div class="content">
            <h1>Upload & Download<br><span>Programming</span> <br>Advance Files here</h1>

            <!-- <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div> -->

            
    <div class=row>
      <table>
           <thead>
             <th>ID</th>
             <th>FileName</th>
             <!-- <th>Size (in mb)</th> -->
             <th>Downloads</th>
             <th>Action</th>
           </thead>
          <tbody>
               <?php foreach($files as $file): ?>
                  <tr>
                      <td><?php echo $file['id'];?>)</td>
                      <td><?php echo $file['filename'];?></td>
                      <!-- <td><?php echo $file['size'];?></td> -->
                      <td><?php echo $file['downloads'];?></td>
                      <td>
                          <a style="text-decoration: none;"href="pg_notes_admin_dwnld.php?file_id=<?php echo $file['id']?>"><button class="download_button">Download</a></button>
                      </td>
                  </tr>
                     <?php endforeach ;?>
          </tbody>
      </table>
                    <div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>