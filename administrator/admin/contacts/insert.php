<?php
include_once "../../config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

try{
    InsertContacts($name, $email, $phone, $message);
    echo 1;
}catch (Exception $e){
    echo 0;
}