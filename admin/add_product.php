<?php 
include './include/header.php';
include './include/nav.php';
?>



<div class="container d-flex justify-content-center ">
<div class="card mt-5 shadow" style="width: 700px;">
    <div class="card-header persian">
        <h1>افزودن کالا</h1>
    </div>
    <div class="card-body">
       <form method="post" action="">
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

              <div class="form-group mt-3">
                  <label for="category" class="form-label persian">دسته بندی</label>
                  <select id="category" class="form-select persian" name="category">
                      <option>لباس زنانه</option>
                  </select>
              </div>

              <div class="d-flex justify-content-end ">
              <button type="submit" class="btn btn-lg btn-success mt-3 persian ">ثبت</button>
              </div>
           
       </form>
    </div>
</div>
</div>






<?php 

include './include/footer.php';

?>