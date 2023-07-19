<?php
include_once "../config.php";
session_start();
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$securityPassword = sha1($password);
$query = SelectUsers();
$flag = false;
while ($item = mysqli_fetch_assoc($query)){
    if ($userName === $item['username'] && $securityPassword === $item['password']){
        $flag = true;
        $_SESSION['users'] = $userName;
       header("location: http://localhost/PHP/digital_currency/administrator/users/login.php");
    }
}
if ($flag == false){
    $_SESSION['wrong'] = "! نام کاربری یا کلمه عبور اشتباه است";
    header("location: http://localhost/PHP/digital_currency/administrator/users/login.php");
}
