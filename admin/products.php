<?php
include './include/header.php';
include './include/nav.php';

if(!isset($_SESSION['email'])){
    header('location: login.php');
}


$query = "SELECT `products`.`id` AS `id`, `products`.`name` AS `product_name` , `categories`.`name` AS `category_name`
,`price`,`description`,`image` FROM `products`INNER JOIN `categories` ON `products`.`category_id`=`categories`.`id`";
$result = mysqli_query($conn,$query);
?>

<div class="container d-flex justify-content-center">
    <div class="table-responsive" style="width:100%">
        <table class="table bg-white table-striped table-bordered persian mt-5 shadow text-center" >
            <thead>
                <tr>
                    <th>
                        نام
                    </th>
                    <th>
                        توضیحات
                    </th>
                    <th>
                        قیمت
                    </th>
                    <th>
                        دسته بندی
                    </th>
                    <th>
                        عکس </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr >
                    <td ><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['category_name'] ?></td>
                    <td><img src="../images/<?php echo $row['image'] ?>" class="img-thumbnail" alt="" width="100px" height="100px"></td>
                    <td><a class="btn btn-danger persian" href="delete_product.php?id=
                    <?php echo $row['id'];?>">حذف</a></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</div>




<?php

include './include/footer.php';

?>