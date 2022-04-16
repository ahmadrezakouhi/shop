<?php 

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','1271414521k$');
define('DB_DATABASE','shop');


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
mysqli_set_charset($conn,"utf8");
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);

}