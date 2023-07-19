<?php
$query = SelectCourses();
?>

<section class="page-section" id="courses">
    <?php if (isset($_SESSION['used'])){
        echo "<script>alert('شما قبلا در این دوره ثبت نام کرده اید!')</script>";
        $_SESSION['used'] = null;
    } ?>
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">دوره های حضوری</h2>
            <h3 class="section-subheading text-muted">برای شرکت در دوره ها لطفا اطلاعات خود را برای ما ارسال کنید </h3>
        </div>
        <div id="portfolio">
            <div class="row text-center">
                <?php foreach ($query as $courses): ?>

                    <div class="col-md-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="<?php if (isset($_SESSION['users']) && (!isset($_SESSION['used']))): ?>
                                 http://localhost/PHP/digital_currency/administrator/cart/cartController.php?course_id=<?php echo $courses['id']; ?>

                             <?php else: ?>

                                 <?php echo 'http://localhost/PHP/digital_currency'; ?>

                             <?php endif; ?>">

                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x font-weight-bold">شرکت
                                            در این دوره</i>
                                    </div>
                                </div>
                                <img class="img-fluid w-100 immage"
                                     src="administrator/admin/images/courses/<?php echo $courses['image']; ?>"
                                     alt="..."/>
                            </a>
                        </div>
                        <h4 class="my-3"><?php echo $courses['title']; ?></h4>
                        <p class="text-muted p1"><?php echo $courses['description']; ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

