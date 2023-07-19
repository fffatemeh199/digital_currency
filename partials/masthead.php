<header class="masthead">
    <div class="container">

        <div class="masthead-heading text-uppercase"><p><?php
                if (isset($_SESSION['users'])) {
                    echo $_SESSION['users'];
                } ?></p>به سایت خانه ارز خوش آمدی<br>
            <br><a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">درباره ارزها بدانید</a>
        </div>
</header>