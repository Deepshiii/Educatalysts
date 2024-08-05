<!DOCTYPE html>
<html lang="en">
<head>
    <title>Educatalysts-User Register</title>
    <link rel="stylesheet" href="registrationstyle.css">
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
                <br>
                <p class="head">Already Registered? Log In Here</p><br>
                <button class="cn"><a href="login.php">Login</a></button>

                <div class="form">
                    <h2>Register Here</h2>
                    <form action="connection.php" method="post">
                      <input type="text" name="name" placeholder="Enter Name" required>
                      <input type="text" name="username" placeholder="Enter Username" required>
                      <input type="password" name="password" placeholder="Enter Password " required>
                      <input type="number" name="age" id="name" placeholder="Enter Your Age" required>
                      <input type="email" name="email" id="name" placeholder="Enter Email" required>
                      <!-- <button class="btnn"><a href="login.php">Register</a></button> -->
                    <input type="submit" name="" value="Register" id="btnn">
                      <br>
                      <br>

                      <p class="liw">Register with</p>
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