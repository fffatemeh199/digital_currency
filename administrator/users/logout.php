<?php
session_start();
if (isset($_SESSION['userON'])){
    $_SESSION['users'] = null;
    $_SESSION['userON'] = null;
    $_SESSION['wrong'] = null;
    $_SESSION['used'] = null;
    header("location:http://localhost/PHP/digital_currency");
}elseif (isset($_SESSION['admin'])){
    $_SESSION['admin'] = null;
    $_SESSION['wrong'] = null;
    header("location:login.php");
}

