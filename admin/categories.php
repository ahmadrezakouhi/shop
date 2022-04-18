<?php 
include './include/header.php';
include './include/nav.php';
$query = "SELECT * FROM `categories`";
$result = mysqli_query($conn,$query);
?>

<div class="container d-flex justify-content-center">
    <div class="table-responsive">
    <table class="table table-light table-striped table-bordered persian mt-5 shadow text-center" style="width:500px">
    <thead>
        <tr>
            <th>
                نام
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
       <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><a class="btn btn-danger persian" href="delete_category.php?id=<?php echo $row['id']; ?>">حذف</a></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
    </div>
</div>




<?php 

include './include/footer.php';

?>