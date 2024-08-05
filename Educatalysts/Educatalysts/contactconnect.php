<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];


 
  
//Database connection
$conn = new mysqli('localhost','root','','userreg');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contactus(username, email, message)
     values (?,?,?)");
    $stmt->bind_param("sss",$username, $email, $message);
    $stmt->execute();
    echo '<script>alert("Thankyou for contacting us.")</script>';
    header("Location: contact.php");
    $stmt->close();
    $conn->close();
    
} 


?>