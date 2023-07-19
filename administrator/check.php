<?php
include_once "config.php";
session_start();
$userName = $_POST['userName'];
$password = $_POST['password'];
$securityPassword = sha1($password);
$query = SelectAdmin();
$flag = false;
while ($item = mysqli_fetch_assoc($query)){
    if ($userName === $item['username'] && $securityPassword === $item['password']){
        $flag = true;
        $_SESSION['admin'] = $userName;
       header("location: http://localhost/PHP/digital_currency/administrator/login.php");
    }
}
if ($flag == false){
    $_SESSION['wrong'] = "! نام کاربری یا کلمه عبور اشتباه است";
    header("location: http://localhost/PHP/digital_currency/administrator/login.php");
}
