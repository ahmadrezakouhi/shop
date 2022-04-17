<?php 
include './include/header.php';

if(isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['password'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password =md5($_POST['password']);
    $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' AND `admin`=1";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['email']=$email;
        header('location: products.php');
    }else {
        $message = 'ایمیل و یا پسورد اشتباه است .';
    }
 

}


?>

<div class="container justify-content-center my-5" style="width: 500px;">
    <div class="card shadow">
        <div class="card-header bg-white p-5">
            <h2 class="persian text-center">Admin Login</h2>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form-group mt-3">
                    <label for="email" class="persian">ایمیل</label>
                    <input id="email" class="form-control" type="email" name="email" dir="ltr">
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="persian">پسورد</label>
                    <input id="password" class="form-control" type="password" name="password" dir="ltr">
                </div>
                <div class="d-grid gap-2 mt-3">
                    <input type="submit" value="ورود" class="btn btn-primary persian" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php if(isset($message)) :?>
    <div class="container mt-3">
<div class="alert alert-danger alert-dismissible fade show persian">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   <?php echo $message; ?>
  </div>
</div>
    <?php endif;?>



<?php include './include/footer.php'; ?>