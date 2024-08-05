<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educatalysts- Programming Videos</title>
    <link rel="stylesheet" href="videostyle.css">
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
       
        <a href="userdashboard.php" class="edu" >Educatalysts</a>
          </div>
        <div class="btn_two">
          <label for="check">
            <i class="fas fa-times"></i>
          </label>
        </div>
      <div class="menu-1">
        <ul>
          <li><i class="fas fa-solid fa-user"></i>
            <a href="./Profile/userprofile.php">Profile</a>
          </li>
          
          <!-- <li>
            <i class="fas fa-calendar-week"></i>
            <a href="#">Events</a>
          </li> -->
          <li>
            <i class="fas fa-question-circle"></i>
            <a href="aboutus.php">About Us</a>
          </li>

          <li>
            <i class="fas fa-phone-volume"></i>
            <a href="contact.php">Contact Us</a>
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
                    <li><a href="userdashboard.php">HOME</a></li>
                    <!-- <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li> -->
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>


        </div> 
        <div class="content">
            <h1>Watch <br><span>PROGRAMMING</span> <br>Videos here</h1>  


            <div class=row>
     <table>
          <thead>
              <th>ID</th>
            <th>CHAPTERS</th>
           
          </thead>
         <tbody>
              
                <tr>
                     <td>1</td>
                     <td> <a style="text-decoration:none;" href="https://youtu.be/Edsxf_NBFrw"> <button class="button">CSS</button></a></td>
                </tr>
                <tr>
                     <td>2</td>
                     <td> <a style="text-decoration:none;" href="https://youtu.be/gfDE2a7MKjA"> <button class="button">PYTHON</button></a></td> 
                </tr>
         </tbody>
              </table>
  </div>
                     
        </div> 
    </div>                
</body>
</html>