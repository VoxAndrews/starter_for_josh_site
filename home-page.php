<?php
    /*
    Template Name: Home Page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
        <div class="blocker"></div>
        </div>
        <!--Container-->
    </section>
    <!--Fluid Container-->

    <section class="container-fluid articlebg">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="text-center article-title"> LATEST ARTICLES </h3>
                </div>

                <div class="col-md-4 article-cent">
<!--Placeholder for col1-->
                </div>
                <!--Column Medium 4-->

                <div class="col-md-4 article-cent">
<!--Placeholder for col1-->
                </div>
                <!--Column Medium 4-->

                <div class="col-md-4 article-cent">
<!--Placeholder for col1-->
                </div>
                <!--Column Medium 4-->
            </div>
            <!--Row-->
        </div>
        <!--Container-->
    </section>
    <!--Fluid Container-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>