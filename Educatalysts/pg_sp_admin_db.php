<?php

$conn = mysqli_connect("localhost","root","","userreg");

$sql = "SELECT * FROM programsamplepaper";

$result = mysqli_query($conn,$sql);

$files = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['save']))
{
    $filename = $_FILES['myfile']['name'];

    $destination = 'programuploads/' . $filename;

    $extension = pathinfo($filename,PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];

    $size = $_FILES['myfile']['size'];

    if(!in_array($extension,['zip','pdf','png','jpg']))
    {
        echo "Your file extension must be .zip, .pdf, .png or .jpg";
    }
    elseif($_FILES['myfile']['size'] > 10000000)
    {
        echo "File is too large";
    }
    else{
        if(move_uploaded_file($file,$destination))
        {
            $sql = "INSERT INTO programsamplepaper (filename,size,downloads)
            VALUES('$filename','$size',0)
            ";

            if(mysqli_query($conn,$sql))
            {
                header('location:pg_sp_admin_dwnld.php');
            }
            else{
                echo "failed to upload file";
            }
        }
    }
}


if(isset($_GET['file_id']))
{

$id = $_GET['file_id'];

$sql="SELECT * FROM programsamplepaper WHERE id=$id";

$result = mysqli_query($conn,$sql);

$file = mysqli_fetch_assoc($result);

$filepath = 'programuploads/' . $file['filename'];

if(file_exists($filepath))
{
    header('Content-Type: application/octet-stream');

    header('Content-Description: File Transfer;');

    header('Content-Disposition: attachment; filename=' . basename($filepath));

    header('Expires: 0');

    header('Cache-Control: must-revalidate');
    header('Pragma:public');

    header('Content-Length:' . filesize('programuploads/'.$file['filename']));

    readfile('programuploads/' . $file['filename']);

    $newCount = $file['downloads'] + 1;

    $updatQuery = "UPDATE programsamplepaper SET downloads=$newCount WHERE id=$id";

    mysqli_query($conn,$updatQuery);

    exit;
}
}







?>