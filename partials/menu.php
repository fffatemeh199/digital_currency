<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="media/img/navbar-logo.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            منو
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">

                <?php if (isset($_SESSION['users'])): ?>


                <li class="nav-item  aabb"><a class="nav-link text-center" href="administrator/users/logout.php">خروج از
                        حساب کاربری</a></li>
                <li class="nav-item aabb"><a class="nav-link text-center" href="profile.php?id=<?php echo $_SESSION['users']; ?>">دوره
                        های من</a></li>
                <?php endif; ?>

                <?php if (!isset($_SESSION['users'])): ?>
                    <li class="nav-item  aabb"><a class="nav-link text-center" href="administrator/users/login.php">ورود
                            / ثبت نام</a></li>
                <?php endif; ?>

                <li class="nav-item aabb"><a class="nav-link text-center" href="#contact">ارتباط با ما</a></li>
                <li class="nav-item aabb"><a class="nav-link text-center" href="#about">درباره ما</a></li>
                <li class="nav-item  aabb"><a class="nav-link text-center" href="#articles">مقالات</a></li>
                <li class="nav-item  aabb"><a class="nav-link text-center" href="#courses">دوره های حضوری</a></li>
                <li class="nav-item"><a class="nav-link text-center" href="index.php">صفحه اصلی</a></li>
                <?php if (isset($_SESSION['admin']) && !isset($_SESSION['users'])): ?>
                    <li class="nav-item  aabb"><a class="nav-link text-center btn btn-info" href="administrator/admin/admin.php">پنل مدیریت</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>