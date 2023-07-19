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
                <form action="articles/insert.php" method="post" enctype="multipart/form-data" class="direction_rtl">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control"
                               placeholder="لطفا عنوان را وارد کنید ...">
                    </div>
                    <div class="form-group">
                        <label for="description">توضیحات</label>
                        <textarea name="description" id="description" placeholder="لطفا توضیحات را وارد کنید ..."
                                  class="form-control textarea cke"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block" value="ثبت">
                    </div>
                </form>
                <a href="../../administrator/admin/articles.php" class="btn btn-info btn-block">مشاهده
                    جزيیات</a>
            </div>
        </div>
    </div>


</div>
<!--end make admin-->


<script src="../bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="../ckeditor/adapters/jquery.js" type="text/javascript" ></script>
<script src="../ckeditor/config.js" type="text/javascript"></script>

<!--نمایش ایکون های ادیتور به فارسی-->
<script>
    CKEDITOR.replace('description', {
// Load the German interface.
        language: 'fa'
    });
</script>
<!--نمایش ایکون های ادیتور به انگلیسی-->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $('#description').ckeditor();-->
<!--    })-->
<!--</script>-->
</body>
</html>