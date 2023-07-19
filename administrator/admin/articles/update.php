<?php
include_once "../../config.php";
AdminIsSet();
$con = ConnectDB();
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$id = $_POST['id'];
$item = SelectArticlesById($id);
$imageName = UploadConditionImage($image, $item, "articles");
UpdateArticles($title, $description, $imageName, $id);
header("location:http://localhost/PHP/digital_currency/administrator/admin/articles.php");
