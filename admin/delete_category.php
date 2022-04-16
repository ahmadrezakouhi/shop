<?php 
include '../config/config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `categories` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    header('location: categories.php');
}else {
    header('location: categories.php');
}



?>




