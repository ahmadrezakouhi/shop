<?php
include './include/header.php';
include './include/nav.php';

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
                <tr>
                    <td>تی شرت</td>
                    <td>این یک تی شرت است</td>
                    <td>500000</td>
                    <td>زنانه</td>
                    <td><img src="" alt=""></td>
                    <td><a class="btn btn-danger persian">حذف</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




<?php

include './include/footer.php';

?>