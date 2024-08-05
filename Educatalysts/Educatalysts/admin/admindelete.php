<?php
include('adminconnect.php');
if(isset($_GET['admindeleteid'])){
    $id = $_GET['admindeleteid'];
    $sql = "delete from `admin` where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
       // echo "Deleted Successfully";
        header('location:admindisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>