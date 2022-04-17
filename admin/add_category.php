<?php 
include './include/header.php';
include './include/nav.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn , $_POST['name']);
    $query  = "INSERT INTO `categories`(`name`)value('$name')";
    $result = mysqli_query($conn,$query);
    
}


?>

<?php if(isset($result)&& $result): ?>
<div class="container-fluid mt-3 persian">

<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close " data-bs-dismiss="alert"></button>
    دسته بندی مورد نظر افزوده شد.
  </div>

</div>
<?php endif;?>

<div class="container d-flex justify-content-center">
    
<div class="card shadow mt-5" style="width: 800px;">
    <div class="card-header persian">
        <h1>افزودن دسته بندی</h1>
    </div>
    <div class="card-body">
       <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
           <div class="form-group mt-3">
               <label for="name" class="form-label persian">نام</label>
               <input id="name" class="form-control persian" type="text" name="name">
           </div>

           <div class="d-flex justify-content-end mt-3">
           <button type="submit" class="btn btn-lg btn-success persian " name="submit">ثبت</button>
           </div>
       </form>
    </div>
</div>

</div>





<?php 

include './include/footer.php';

?>