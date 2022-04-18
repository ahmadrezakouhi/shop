<?php
include './include/header.php';
include './include/nav.php';

if (!isset($_SESSION['email'])) {
    header('location: login.php');
}



if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    $query = "INSERT INTO `products`(`name`,`description`,`price`,`category_id`)VALUE('$name'
,'$description','$price','$category_id')";



    if (isset($_FILES['image'])) {
        $target_dir = '../images/';
        $file_name_uploaded = basename($_FILES['image']['name']);
        $target_file = $target_dir . $file_name_uploaded;
        move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
        $query = "INSERT INTO `products`(`name`,`description`,`price`,`category_id`,`image`)VALUE('$name'
        ,'$description','$price','$category_id','$file_name_uploaded')";
      
    }
        $result = mysqli_query($conn, $query);
}



?>
<?php if(isset($result)&& $result): ?>
<div class="container-fluid mt-3 persian">

<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close " data-bs-dismiss="alert"></button>
    کالای  مورد نظر افزوده شد.
  </div>

</div>
<?php endif;?>


<div class="container d-flex justify-content-center ">
    <div class="card mt-5 shadow" style="width: 700px;">
        <div class="card-header persian">
            <h1>افزودن کالا</h1>
        </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group mt-3">
                    <label for="name " class="form-label persian">نام</label>
                    <input id="name" class="form-control persian" type="text" name="name">
                </div>

                <div class="form-group mt-3">
                    <label for="description" class="form-label  persian">توضیحات</label>
                    <textarea id="description" class="form-control persian" name="description" rows="3"></textarea>
                </div>

                <div class="form-group mt-5">
                    <label for="price" class="form-label persian">قیمت</label>
                    <input id="price" class="form-control" type="text" name="price">
                </div>

                <div class="form-group mt-3">
                    <label for="image" class="form-label persian">عکس</label>
                    <input id="image" class="form-control" type="file" name="image">
                </div>
                <?php
                $query = "SELECT * FROM `categories`";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="form-group mt-3">
                    <label for="category_id" class="form-label persian">دسته بندی</label>
                    <select id="category_id" class="form-select persian" name="category_id">
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn btn-lg btn-success mt-3 persian " name="submit">ثبت</button>
                </div>

            </form>
        </div>
    </div>
</div>






<?php

include './include/footer.php';

?>