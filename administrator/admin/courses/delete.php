<?php
include_once "../../config.php";
AdminIsSet();
$id = $_POST['id'];
$item = SelectCoursesById($id);
DeleteCourses($id);
unlink("../images/courses/".$item['image']);
header("location:http://localhost/PHP/digital_currency/administrator/admin/courses.php");
