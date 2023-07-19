<!--header-->
<?php include_once "_header.php"; ?>

<!-- menu-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav1">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="media/img/navbar-logo.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            منو
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link text-center" href="index.php">صفحه اصلی</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Services-->
<?php
include_once "administrator/config.php";
$id = $_GET['article'];
$item = SelectArticlesById($id);
?>

<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><?php echo $item['title']; ?></h2>

        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <div class="col-8 offset-2">
                    <img class="img-fluid w-100 pp" src="administrator/admin/images/articles/<?php echo $item['image']; ?>"
                         alt="..."/>
                </div>
                <br>

                <p class="text-muted pa"><?php echo $item['description']; ?></p>
            </div>

        </div>
    </div>
</section>


<!-- Footer-->
<?php include_once "partials/footer.php"; ?>

<!-- scripts-->
<?php include_once "_footer.php"; ?>


