<?php
include'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educatalysts-User Details</title>
    <link href="displaystyle.css" type="text/css" rel="stylesheet">
</head>
<body>
<div>
    <h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content-1">User Details</h1>
</div>
    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `userdetails`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        
                        $id = $row['id'];
                        $name = $row['name'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $age = $row['age'];
                        $email = $row['email'];

                        echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$username.'</td>
                        <td>'.$password.'</td>
                        <td>'.$age.'</td>
                        <td>'.$email.'</td>
                        <td>
                        <button class="button"><a href="update.php?updateid='.$id.'">Update</a></button>
                        <button class="button"><a href="delete.php?deleteid='.$id.'" >Delete</a></button>
                        </td>
                    </tr>';
                    }
                }

                ?>
                </tbody>
        </table>
        <button class="button1"><a href="user.php" >Add User</a></button>
    </div>
        </body>
</html>