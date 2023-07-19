<?php
include_once "../config.php";
AdminIsSet();
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$securityPassword = sha1($password);
InsertUsers($fullName, $phoneNumber, $email, $userName, $securityPassword);
header("location:http://localhost/PHP/digital_currency/administrator/users/login.php");
