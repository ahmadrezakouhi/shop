<?php include './include/header.php'; ?>

<div class="container justify-content-center mt-5" style="width: 500px;">
    <div class="card shadow">
        <div class="card-header bg-white p-5">
            <h2 class="persian text-center">ورود</h2>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group mt-3">
                    <label for="email" class="persian">ایمیل</label>
                    <input id="email" class="form-control" type="email" name="email" dir="ltr">
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="persian">پسورد</label>
                    <input id="password" class="form-control" type="password" name="password" dir="ltr">
                </div>
                <div class="d-grid gap-2">
<button type="submit" class="btn btn-primary  persian mt-3">ورود</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include './include/footer.php'; ?>