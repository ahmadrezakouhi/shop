<?php 

include './include/header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE `id`='$id'";
    $result = mysqli_query($conn , $query);
    $data = mysqli_fetch_assoc($result);
}else {
    header('location: index.php');
}


?>


<div class="container-fluid mt-5">
    <div class="row g-4">
        <div class="col-md-4">
            <img src="./images/<?php echo $data['image'] ?>" alt="" class="img-thumbnail" width="500px">
        </div>
        <div class="col-md-8">
            <h4 class="persian"><?php echo $data['name'] ?></h4>
            <p class="persian mt-5"><?php  echo $data['description']?></p>
            <div class="d-flex justify-content-end   my-5 ">
                <h3 class="persian"><?php echo $data['price'] ?> تومان</h3>
            </div>
            <div class="row d-flex justify-content-end my-5   " >
                <div class="col-md-4 d-grid">
                <a href="" class="btn btn-danger persian align-self-start"> خرید</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php 

include './include/footer.php';
?>