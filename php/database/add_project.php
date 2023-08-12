<?php
session_start();

require_once "database_functions.php";



$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];

$imagePath = '../../portfolio/' . $image;
if (is_uploaded_file($_FILES['image']['tmp_name']))
{       
    //in case you want to move  the file in uploads directory
     move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
     
     
}
// Insert the project details into the database
$insertResult = insertProject($title, $description,'portfolio/'.$image);


    header("Location: ../../index1.php");
    exit;

?>
