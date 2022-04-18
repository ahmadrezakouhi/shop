<?php 
include './include/header.php';

?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="./images/init/c3cb03ad20d0bfc225349aff8e3c531c6b1caa03_1650225113.jpg"  class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="./images/init/b1bd4e0a830bc58ce51b0f6fa45d01fad97abf8c_1650095443.jpg"  class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="./images/init/ff62eec76eda8ecdac91b7e904e40d0441ec64de_1650095157.jpg"  class="d-block" style="width:100%">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>


<div class="container persian border text-center rounded shadow mt-5 p-5">
    <h1>فروشگاه  ....</h1>
    <p>این فروشگاه عالی است</p>
</div>

<div class="container mt-5 persian">
    <div class="row justify-content-center">
        <div class="col-md-3 card p-4 text-center bg-success text-white mx-2">
<h2>            تنوع محصول
</h2>
    </div>
        <div class="col-md-3 card p-4 text-center bg-danger text-white mx-2">
<h2>            خرید راحت
</h2>
    </div>
        <div class="col-md-3 card p-4 text-center bg-primary text-white mx-2">
<h2>           قیمت مناسب
</h2>
    </div>
      
    </div>
</div>


<?php 

include './include/footer.php';


?>

