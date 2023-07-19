<?php
include_once "../config.php";
AdminIsSet();
?>
<?php include_once "../partials/_header.php";?>

<!--make admin-->
<div class="admin container-fluid p-0">
    <!--make menu-->
    <?php include_once "../partials/_menu.php";?>
    <!--end make menu-->
    <div class="container">
        <div class="row pt-7">
            <div class="col-8 offset-2">
                <form action="courses/insert.php" method="post" enctype="multipart/form-data" class="direction_rtl">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control"
                               placeholder="لطفا عنوان را وارد کنید ...">
                    </div>
                    <div class="form-group">
                        <label for="description">توضیحات</label>
                        <textarea name="description" id="description" placeholder="لطفا توضیحات را وارد کنید ..."
                                  class="form-control textarea"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block" value="ثبت">
                    </div>
                </form>
                <a href="../../administrator/admin/courses.php" class="btn btn-info btn-block">مشاهده
                    جزيیات</a>
            </div>
        </div>
    </div>


</div>
<!--end make admin-->


<?php include_once "../partials/_footer.php";?>
