<?php

include './include/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE `category_id` ='$id'";
    $result = mysqli_query($conn,$query);


} else {
    header('location: index.php');
}

?>

<div class="container">
    <div class="row mt-5 " dir='ltr'>

<?php while($row = mysqli_fetch_assoc($result)): ?>

        <div class="col-md-4 ">
            <div class="card shadow" dir="rtl">
                <img class="card-img-top" src="./images/<?php echo $row['image'] ?>" alt="Card image">
                <hr>
                <div class="card-body ">
                    
                    <div class=" ">
                    <h6 class="card-title persian font-weight-bold"><?php echo $row['name'] ?></h6>
                    

                    </div>
                    <div>
                        <div class="d-flex justify-content-end mt-3">
                        <p class="card-text persian  "><b><?php echo $row['price'] ?> تومان</b></p>
                        </div>
                    </div>
                    <div class="d-grid gap-3">
                    <a href="details.php?id=<?php echo $row['id'];?>" class="btn btn-outline-primary persian mt-3">مشاهده جزئيات</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

    

    </div>



</div>


<?php
include './include/footer.php';
?>