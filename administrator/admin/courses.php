<?php
include_once "../config.php";
AdminIsSet();
ConnectDB();
$query = SelectCourses();
?>
<?php include_once "../partials/_header.php";?>

<!--make menu-->
<?php include_once "../partials/_menu.php";?>
<!--end make menu-->

<h2 class="pt-7 text-center font-weight-bold b-titr">دوره های حضوری</h2>

<!--table-->
<div class="container">
    <div class="row pt-3">
        <div class="col-8 offset-2">
            <table class="table table-dark table-bordered  table-hover direction_rtl text-right">
                <tr class="bg-secondary">
                    <td>عنوان</td>
                    <td>توضیحات</td>
                    <td>تصاویر</td>
                    <td>ویرایش</td>
                    <td>حذف</td>
                </tr>
              <?php if (is_array($query) ||  is_object($query)): ?>
                <?php foreach ($query as $item): ?>
                    <tr>
                        <td><?php echo $item['title']; ?></td>
                        <td><?php if (strlen($item['description']) > 85):
                                echo substr($item['description'], 0, 85) . "..." ?>
                            <?php else:echo $item['description']; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <img src="../admin/images/courses/<?php echo $item['image']; ?>"
                                 width="50px" height="50px"></td>
                        <td><a class="btn btn-warning"
                               href="edit_courses.php?id=<?php echo $item['id']; ?>">ویرایش</a>
                        </td>
                        <td>
                            <form action="../admin/courses/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <input type="submit" value="حذف" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
            </table>
            <a href="create_courses.php" class="btn btn-success btn-block">افزودن
                مورد جدید</a>
        </div>
    </div>
</div>
<!--end table-->

<?php include_once "../partials/_footer.php";?>

