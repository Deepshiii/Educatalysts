<?php
include'./Users/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link href="./Users/displaystyle.css" rel="stylesheet">
</head>
<body>
<h2 class="logo">Educatalysts</h2>
            </div>
    <div>
        <h1 class="content-2">Queries</h1>
</div>
    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `contactus`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        
                        $id = $row['id'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $message = $row['message'];

                        echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$username.'</td>
                        <td>'.$email.'</td>
                        <td>'.$message.'</td>
                       
                    </tr>';
                    }
                }

                ?>
                <!--tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr-->
                
            </tbody>
        </table>
    
    </div>
        
        
    
</body>
</html>