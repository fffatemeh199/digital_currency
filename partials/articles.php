<?php $query = SelectArticles(); ?>
<section class="page-section bg-light" id="articles">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">مقالات</h2>
        </div>
        <div class="row text-center">
            <?php foreach ($query as $articles): ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="show_articles.php?article=<?php echo $articles['id']; ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid w-100 immage"
                                 src="administrator/admin/images/articles/<?php echo $articles['image']; ?>" alt="..."/>
                        </a>
                    </div>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><?php echo $articles['title']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-lg-4 col-sm-6 mb-4">
            </div>
        </div>
    </div>
</section>