<!DOCTYPE html>
<?php include_once "administrator/config.php";
session_start();
$userON = 'user is in the main page of site';
$_SESSION['userON'] = $userON;
?>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>سایت خانه ارز</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="media/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="dist/bootstrap/css/styles.css" rel="stylesheet"/>
    <!-- toastr-->
    <link rel="stylesheet" href="toastr/toastr.min.css">
</head>
<body id="page-top">
