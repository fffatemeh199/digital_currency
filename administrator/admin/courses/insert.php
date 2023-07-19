<?php
include_once "../../config.php";
AdminIsSet();
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$imageName = UploadFile($image, "courses");
InsertCourses($title, $description, $imageName);
header("location:http://localhost/PHP/digital_currency/administrator/admin/courses.php");
