<?php
include_once "../config.php";
AdminIsSet();
$query = SelectContacts();
?>
<?php include_once "../partials/_header.php";?>

<!--make menu-->
<?php include_once "../partials/_menu.php";?>
<!--end make menu-->

<h2 class="pt-7 text-center font-weight-bold b-titr">نظرات کاربران</h2>

<!--table-->
<div class="container">
    <div class="row pt-3">
        <div class="col-8 offset-2">
            <table class="table table-dark table-bordered  table-hover direction_rtl text-right">
                <tr class="bg-secondary">
                    <td>نام و نام خانوادگی</td>
                    <td>پست الکترونیکی</td>
                    <td>شماره تلفن</td>
                    <td>نظرات</td>
                    <td>نمایش</td>
                    <td>حذف</td>
                </tr>
                <?php foreach ($query as $item): ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['email']; ?></td>
                        <td><?php echo $item['phone']; ?></td>
                        <td><?php if (strlen($item['message']) > 85):
                                echo substr($item['message'], 0, 85) . "..."; ?>
                            <?php else: echo $item['message']; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#modelId-<?php echo $item['id']; ?>">نمایش</a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade direction_rtl text-right" id="modelId-<?php echo $item['id']; ?>"
                             tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $item['message']; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">بستن
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <td>
                            <form action="../admin/contacts/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <input type="submit" value="حذف" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<!--end table-->

<?php include_once "../partials/_footer.php";?>
