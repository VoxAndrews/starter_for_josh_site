<?php
    /*
    Template Name: Home Page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2 class="animated fadeInLeft"><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle animated fadeInRight"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
        <div class="blocker"></div>
        </div>
        <!--Container-->
    </section>
    <!--Fluid Container-->

    <section class="container-fluid articlebg">
        <div class="container">
            <div class="row">
                <div class="article-title text-center wow bounceInUp">
                    <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>
                </div>

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
                    <h4><?php the_field('articletitle'); ?></h4>
                    <p><?php the_field('articleexcerpt'); ?> </p>
                    <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <!--Column Medium 4-->

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" alt=“portait” src="<?php the_field('articleimagetwo'); ?>">
                    <h4><?php the_field('articletitletwo'); ?></h4>
                    <p><?php the_field('articleexcerpttwo'); ?> </p>
                    <a href="<?php the_field('readmoretwo'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <!--Column Medium 4-->

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" alt=“portait” src="<?php the_field('articleimagethree'); ?>">
                    <h4><?php the_field('articletitlethree'); ?></h4>
                    <p><?php the_field('articleexcerptthree'); ?> </p>
                    <a href="<?php the_field('readmorethree'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <!--Column Medium 4-->
            </div>
            <!--Row-->
        </div>
        <!--Container-->
    </section>
    <!--Fluid Container-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>