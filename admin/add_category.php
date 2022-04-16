<?php 
include '../include/header.php';
include '../include/nav.php';
?>



<div class="container d-flex justify-content-center">
<div class="card shadow mt-5" style="width: 800px;">
    <div class="card-header persian">
        <h1>افزودن دسته بندی</h1>
    </div>
    <div class="card-body">
       <form method="post" action="">
           <div class="form-group mt-3">
               <label for="name" class="form-label persian">نام</label>
               <input id="name" class="form-control" type="text" name="name">
           </div>

           <div class="d-flex justify-content-end mt-3">
           <button type="submit" class="btn btn-lg btn-success persian ">ثبت</button>
           </div>
       </form>
    </div>
</div>
</div>






<?php 

include '../include/footer.php';

?>