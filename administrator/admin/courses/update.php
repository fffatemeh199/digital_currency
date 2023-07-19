<?php
include_once "../../config.php";
AdminIsSet();
$con = ConnectDB();
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$id = $_POST['id'];
$item = SelectCoursesById($id);
$imageName = UploadConditionImage($image, $item, "courses");
UpdateCourses($title, $description, $imageName, $id);
header("location:http://localhost/PHP/digital_currency/administrator/admin/courses.php");
