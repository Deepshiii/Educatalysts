<!DOCTYPE html>
<html lang="en">
<head>
    <title>Educatalysts-Admin Login</title>
    <link rel="stylesheet" href="adminloginstyle.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Educatalysts</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT</a></li>
                    <!-- <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li> -->
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

        </div> 
        <div class="content">
            <h1>Upload & <br><span>Download</span> <br>Files</h1>
            <p class="par">Confused about notes?<br> Don't worry we're are here to help you out. 
                <br>Join Us and enjoy learning.</p>

                <!-- <button class="cn"><a href="#">JOIN US</a></button> -->

                <div class="form">
                    <h2>Admin Login</h2>
                    <form action="adminvalidation.php" method="post">
                      <input type="text" name="name" placeholder="Enter Name" required>
                      <input type="password" name="password" placeholder="Enter Password " required>
                      <!-- <button class="btnn"><a href="admindashboard.php">Login</a></button> -->
                      <input type="submit" name="" value="Login" id="btnn">
                      <!-- <p class="link">Don't have an account<br>
                      <a href="#">Sign up </a> here</a></p> -->
                    
                      <br>
                      <br>

                      <p class="liw">Log in with</p>
                      <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                      </div>
                    </form>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>