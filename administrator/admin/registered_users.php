<?php include_once "../partials/_header.php"; ?>

<?php include_once "../partials/_menu.php"; ?>

<?php include_once "../config.php";
$query = SelectCourses();
?>

<h2 class="pt-7 text-center font-weight-bold b-titr">کاربران ثبت نام شده</h2>

<!--------------------    نمایش جدول به صورت افقی   ----------------->
<div class="container">
    <div class="row pt-3 ">
        <div class="col-12 m-auto">
                <table class="table table-dark table-bordered table-hover direction_rtl text-right ">
                    <?php foreach ($query as $courses): ?>
                        <tr>
                            <?php $id = $courses['id']; ?>
                            <?php $query = SelectUsers_courseByCourse_id($id); ?>
                            <td class="bg-secondary w-auto text-center font-weight-bolder"><?php echo $courses['title']; ?></td>
                            <?php $num = 0; ?>
                            <?php foreach ($query as $item): ?>
                                <td class="text-center"><a href="../../profile.php?username=<?php echo $item['username']; ?>"><?php echo $item['username']; ?></a></td>
                            <?php
                            $num ++;?>
                            <?php endforeach; ?>
                            <td class="text-center font-italic">شرکت کننده: <?php echo $num; ?> نفر</td>
                        </tr>
                    <?php endforeach; ?>

                </table>

        </div>
    </div>
</div>


<!--------------------    نمایش جدول به صورت عمودی   ----------------->

<!--<div class="container">-->
<!--    <div class="row pt-7">-->
<!--        <div class="col-3 m-auto">-->
<!--            <table class="table table-dark table-bordered table-hover direction_rtl text-right ">-->
<!--                --><?php //foreach ($query as $courses): ?>
<!--                    <tr class="d-flex flex-column-reverse">-->
<!--                        --><?php //$id = $courses['id']; ?>
<!--                        --><?php //$query = SelectUsers_courseByCourse_id($id); ?>
<!--                        --><?php //$num = 0; ?>
<!--                        --><?php //foreach ($query as $item): ?>
<!--                            <td class="text-center"><a-->
<!--                                        href="../../profile.php?username=--><?php //echo $item['username']; ?><!--">--><?php //echo $item['username']; ?><!--</a>-->
<!--                            </td>-->
<!--                            --><?php //$num++; ?>
<!--                        --><?php //endforeach; ?>
<!--                        <td class="text-center font-italic">شرکت کننده: --><?php //echo $num; ?><!-- نفر</td>-->
<!--                        <td class="bg-secondary w-auto text-center font-weight-bolder">--><?php //echo $courses['title']; ?><!--</td>-->
<!--                    </tr>-->
<!--                --><?php //endforeach; ?>
<!--            </table>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php include_once "../partials/_footer.php"; ?>
