<?php include_once "../config.php";
include_once "partials/_header.php";
session_start();
$con = ConnectDB();

if (isset($_SESSION['users'])) {
    header("location:http://localhost/PHP/digital_currency");
}
?>
<!--body-->
<div class="container-fluid bg-dark">
    <div class="wrong">
        <?php if (isset($_SESSION['wrong'])): ?>
            <div class="text-center alert alert-danger col-6 offset-3 position-absolute mt-3">
                <h3><?php echo $_SESSION['wrong']; ?></h3>
            </div>
        <?php endif; ?>
    </div>
    <div class="login">
        <form action="check.php" method="post" class="form-group">
            <div class="form-group">
                <label for="userName">نام کاربری :</label>
                <input type="text" name="userName" id="userName" class="form-control"
                       placeholder="لطفا نام کاربری خود را وارد کنید ...">
            </div>
            <div class="form-group">
                <label for="password">کلمه عبور :</label>
                <input type="password" name="password" id="password" class="form-control"
                       placeholder="لطفا کلمه عبور خود را وارد کنید ...">
            </div>
            <div class="form-group mt-5">
                <input type="submit" value="ورود" class="btn btn-success btn-block">
            </div>
            <div>
                <a href="signin.php" class="btn btn-warning btn-block">تاکنون ثبت نام نکرده ام</a>
            </div>
        </form>
    </div>

</div>

<!--js bootstrap-->
<?php include_once "partials/_footer.php" ?>
