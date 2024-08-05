<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educatalysts-Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="contactstyle.css">
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <br>
            <p>We'd Love to Hear From You,</p>
                  <p>We're ready to answer any and all questions.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><img src="./image/map.jpg" alt="home.png" height="40px" width="40px" ></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Patna Women's College,<br>Bailey Road, Kidwaipuri,<br>Patna - 800001</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="./image/phone.jpg" alt="home.png" height="40px" width="40px" ></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>0123456789</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="./image/mail.jpg" alt="home.png" height="40px" width="40px" ></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>educatalysts00@gmail.com</p>
                    </div>
                </div> 
            </div>
            <div class="contactForm">
                <form id="contactForm" method="post" action="contactconnect.php">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="username" required="required">
                        <span>Username</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type Your Query</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>