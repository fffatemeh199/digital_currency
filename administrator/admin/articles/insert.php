<?php
include_once "../../config.php";
AdminIsSet();
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$imageName = UploadFile($image, "articles");
InsertArticles($title, $description, $imageName);
header("location:http://localhost/PHP/digital_currency/administrator/admin/articles.php");
