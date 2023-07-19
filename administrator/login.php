<?php include_once "config.php";
include_once "partials/_header.php";
session_start();
$con = ConnectDB();
$query = SelectAdmin();
if (empty(mysqli_fetch_assoc($query))) {
    $userName = "mahmoodi";
    $password = "12345";
    $securityPassword = sha1($password);
    $query = InsertAdmin($userName, $securityPassword, 1);
}
if (isset($_SESSION['admin'])) {
    header("location:admin/admin.php");
}
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>خانه ارز</title>
    <!--link bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--link AdminCss-->
    <link rel="stylesheet" href="bootstrap/css/admin.css">

</head>
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

        </form>
    </div>

</div>

<!--js bootstrap-->
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>