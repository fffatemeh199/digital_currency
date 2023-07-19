<?php
include_once "../../config.php";
AdminIsSet();
$id = $_POST['id'];
$item = SelectArticlesById($id);
DeleteArticles($id);
unlink("../images/articles/".$item['image']);
header("location:http://localhost/PHP/digital_currency/administrator/admin/articles.php");
