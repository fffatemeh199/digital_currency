<?php
include_once "../../config.php";
AdminIsSet();
$id = $_POST['id'];
DeleteContacts($id);;
header("location:http://localhost/PHP/digital_currency/administrator/admin/comments.php");
