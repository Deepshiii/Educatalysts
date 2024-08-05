<?php
include'adminconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educatalysts-Admin Details</title>
    <link href="../Users/displaystyle.css" rel="stylesheet">
</head>
<body>
<div>
    <h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content">Admin Details</h1>
</div>
    <div class="container">
        
        <table class="table1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                   <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `admin`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        
                        $id = $row['id'];
                        $name = $row['name'];
                        $password = $row['password'];
                        
                        echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class="button"><a href="adminupdate.php?adminupdateid='.$id.'" class="text-light">Update</a></button>
                        <button class="button"><a href="admindelete.php?admindeleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                    </tr>';
                    }
                }
               ?>
                </tbody>
        </table>
        <button class="button2"><a href="adminuser.php" class="text-light">Add Admin</a></button>
    </div>
</body>
</html>