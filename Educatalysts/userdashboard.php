<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=], initial-scale=1.0">
  <title>Edu-User Dashboard</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="dropmenu.css">
  <script src="icons.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="test.css"> -->
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
      <div class="logo">
        <img class="logo-edu" src="image\educatalysts.png" alt="Educatalysts">

        <a class="edu" href="userdashboard.php">Educatalysts</a>
      </div>
      <div class="btn_two">
        <label for="check">
          <i class="fas fa-times"></i>
        </label>
      </div>
      <div class="menu">
        <ul>
          <li><i class="fas fa-solid fa-user"></i>
            <a href="./Profile/userprofile.php">Profile</a>
          </li>
         
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


    <!-- <div class="menu-1">
      <ul class="navbar-2">
        <li><a href="userdashboard.php">DASHBOARD</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div> -->



    <div class="content">
      <div class="col">
        <h1>Educatalysts</h1>
        <p>Looking materials for particular course ?<br><br> Choose Course to Upload and Download Files.</p>
        <div class="dropdown">
          <button class="dropdbtn">JEE</button>
          <div class="dropdown-content">
            <a href="jeeuploaduser.php">Notes</a>
            <a href="jee_video_user.php">Videos</a>
            <a href="jee_sp_user_upload.php">Sample Paper</a>

          </div>
        </div>

        <div class="dropdown">
          <button class="dropdbtn">JEE ADVANCED</button>
          <div class="dropdown-content">
            <a href="advnc_notes_user_upload.php">Notes</a>
            <a href="advnc_video_user.php">Videos</a>
            <a href="advnc_sp_user_upload.php">Sample Paper</a>

          </div>
        </div>
        <div class="dropdown">
          <button class="dropdbtn">PROGRAMMING</button>
          <div class="dropdown-content">
            <a href="pg_notes_user_upload.php">Notes</a>
            <a href="pg_video_user.php">Videos</a>
            <a href="pg_sp_user_upload.php">Sample Paper</a>

          </div>
        </div>
        <div class="dropdown">
          <button class="dropdbtn">NEET</button>
          <div class="dropdown-content">
            <a href="neet_notes_user_upload.php">Notes</a>
            <a href="neet_video_user.php">Videos</a>
            <a href="neet_sp_user_upload.php">Sample Paper</a>

          </div>
        </div>
        <div class="dropdown">
          <button class="dropdbtn">NDA</button>
          <div class="dropdown-content">
            <a href="nda_notes_user_upload.php">Notes</a>
            <a href="nda_video_user.php">Videos</a>
            <a href="nda_sp_user_upload.php">Sample Paper</a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <!-- <h5>Knowledge is the only Treasure that increases on sharing so learn
           and share your knowledge</h5> -->
          <p>Knowledge is the only Treasure that increases on sharing so learn
            and share your knowledge</p>
        </div>
        <div class="card">
          <h5>Share your own material</h5>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero 
        eos vel ea porro odit,</p> -->
        </div>
        <div class="card">
          <h5>Search for the notes and sample paper you are looking for </h5>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero 
        eos vel ea porro odit,</p> -->
        </div>
        <div class="card">
          <h5>Search for the videos you are looking for</h5>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero 
        eos vel ea porro odit,</p> -->
        </div>
      </div>
    </div>
  </div>

</body>

</html>