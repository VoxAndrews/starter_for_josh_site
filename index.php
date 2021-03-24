<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>

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
                    <img class="img-responsive" src="http://206.189.45.97/~mesh22/sub4/wp-content/themes/starter_for_josh_site/images/img-3.jpg" alt="Fantasy Portrait of Female Bowman">

                    <h4> A PORTRAIT </h4>
                    <p class="date"> Friday, November 10. 2019</p>

                    <p> STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>

                    <p class="readmore"> CONTINUE READING </p>
                </div>
                <!--Column Medium 4-->

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" src="http://206.189.45.97/~mesh22/sub4/wp-content/themes/starter_for_josh_site/images/img-2.jpg" alt="3D Render of Glowing Robot Suit">

                    <h4> A MODEL </h4>
                    <p class="date"> Friday, November 10. 2019</p>

                    <p> STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>

                    <p class="readmore"> CONTINUE READING </p>
                </div>
                <!--Column Medium 4-->

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" src="http://206.189.45.97/~mesh22/sub4/wp-content/themes/starter_for_josh_site/images/img-1.jpg" alt="Overhead view of Racing Track">

                    <h4> GAMES DESIGN </h4>
                    <p class="date"> Friday, November 10. 2019</p>

                    <p> STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>

                    <p class="readmore"> CONTINUE READING </p>
                </div>
                <!--Column Medium 4-->
            </div>
            <!--Row-->
        </div>
        <!--Container-->
    </section>
    <!--Fluid Container-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>