<?php
include_once "../config.php";
session_start();
$username = $_SESSION['users'];
$course_id = $_GET['course_id'];
$query = SelectUsers_courseByUsername($username);
$flag = true;
foreach ($query as $item){
    if ($item['course_id'] === $course_id) {
        $flag = false;
        $_SESSION['used'] = 'شما قبلا در این دوره ثبت نام کرده اید';
        header("location:http://localhost/PHP/digital_currency");

    }
}
if ($flag == true){
    InsertUsers_course($username, $course_id);
    header("location:http://localhost/PHP/digital_currency/profile.php");
}


