<?php
include_once "_header.php";
if (isset($_SESSION['users'])){
    $username = $_SESSION['users'];
}else{
    $username = $_GET['username'];
}
$query = SelectUsers_courseByUsername($username);

?>
<?php include_once "partials/menu.php";?>


    <div class="container">
        <div class="row ">
            <div class="mt-12 ">
                <table class="table text-right direction_rtl">
                    <?php foreach ($query as $item): ?>
                        <tr>
                            <?php $id = $item['course_id']; ?>
                            <?php $item = SelectCoursesById($id); ?>
                            <td><img src="administrator/admin/images/courses/<?php echo $item['image']; ?>"
                                     width="100px"
                                     height="100px"
                                     alt=""></td>
                            <td><?php echo $item['title']; ?>
                            <br>
                            <?php echo $item['description']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

<?php include_once "_footer.php"; ?>