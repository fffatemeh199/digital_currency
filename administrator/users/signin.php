<?php include_once "../config.php";
include_once "partials/_header.php";
session_start();

?>
<!--body-->
<div class="container-fluid bg-dark">
    <div class="login">
        <form action="insert.php" method="post" class="form-group">
            <div class="form-group">
                <label for="fullName">نام و نام خانوادگی :</label>
                <input type="text" name="fullName" id="fullName" class="form-control"
                       placeholder="لطفا نام و نام خانوادگی خود را وارد کنید ..." required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">شماره موبایل :</label>
                <input type="number" name="phoneNumber" id="phoneNumber" class="form-control"
                       placeholder="لطفا شماره موبایل خود را وارد کنید ..." required>
            </div>
            <div class="form-group">
                <label for="email">ایمیل :</label>
                <input type="email" name="email" id="email" class="form-control"
                       placeholder="لطفا ایمیل خود را وارد کنید ..." required>
            </div>
            <div class="form-group">
                <label for="userName">نام کاربری :</label>
                <input type="text" name="userName" id="userName" class="form-control"
                       placeholder="لطفا نام کاربری خود را وارد کنید ..." required>
            </div>
            <div class="form-group">
                <label for="password">کلمه عبور :</label>
                <input type="password" name="password" id="password" class="form-control"
                       placeholder="لطفا کلمه عبور خود را وارد کنید ..." required>
            </div>
            <div class="form-group mt-5">
                <input type="submit" value="ثبت نهایی" class="btn btn-success btn-block">
            </div>

        </form>
    </div>

</div>

<!--js bootstrap-->
<?php include_once "partials/_footer.php" ?>
