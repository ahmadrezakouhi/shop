<?php
include './include/header.php';
include './include/nav.php';

?>

<div class="container d-flex justify-content-center ">
    <div class="table-responsive" style="width:100%">
        <table class="table bg-white table-striped table-bordered persian mt-5 shadow text-center" >
            <thead>
                <tr>
                    <th>
                     کد کالا
                    </th>
                    <th>
                     نام کالا
                    </th>
                    <th>
                        تعداد
                    </th>
                    <th>
                        قیمت
                    </th>
                    <th>
                        دسته بندی
                    </th>
                    <th>
                        مجموع </th>
                    <th>
                    <th>
                    گیرنده 
                </th>
                    <!-- <th>
                    </th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123456</td>
                    <td>تی شرت</td>
                    <td>5</td>
                    <td>500000</td>
                    <td>زنانه</td>
                    <td>654</td>
                    <td>564</td>
                    <td><a class="btn btn-danger persian">حذف</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




<?php

include './include/footer.php';

?>