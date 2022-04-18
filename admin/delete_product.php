<?php 

require_once '../config/config.php';

if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "SELECT * FROM `products` WHERE `id`='$id'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);

if(isset($data['image'])){
    unlink('../images/'.$data['image']);
 
}

$query = "DELETE FROM `products`WHERE `id`='$id'";
$result = mysqli_query($conn,$query);

header('location: products.php');
}else {
    header('location: products.php');
}