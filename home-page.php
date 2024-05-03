<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->

<section class="container-fluid aboutbg text-center">
    <div class="container">
    <lottie-player id="twelfthLottie" src="http://170.187.231.66/~mesh9/wp-content/themes/starter_for_josh_site/images/rocketman.json" background="transparent" speed="1" style="margin:auto width: 200px; height: 200px" direction="1"></lottie-player>
    <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
    <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

    <div class="blocker"></div>
    </div> <!-- container -->
</section>

<section class="container-fluid articlesbg">
    <div class="container">
    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
        <div class="row">

<div class="col-md-4">
<img class="img-fluid" src="<?php the_field('articleimage');?>" alt="woman">
<h4 class="article-title"><?php the_field('articletitle'); ?></h4>
<p class="date"><?php the_field('articledate'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt'); ?> </p>

   
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
    
</div>

<div class="col-md-4">
    <img class="img-fluid" src="<?php the_field('modellingimage');?>" alt="woman">
    <h4 class="article-title"><?php the_field('modellingtitle'); ?></h4>
    <p class="date"><?php the_field('modellingdate'); ?></p>
    <p class="article-p"><?php the_field('modellingexcerpt'); ?> </p>
    <a href="<?php the_field('modellingreadmore'); ?>" class="readmore">CONTINUE READING</a>
        
    </div>

<div class="col-md-4">
<img class="img-fluid" src="<?php the_field('designimage');?>" alt="woman">
    <h4 class="article-title"><?php the_field('designtitle'); ?></h4>
    <p class="date"><?php the_field('designdate'); ?></p>
    <p class="article-p"><?php the_field('designexcerpt'); ?> </p>
    <a href="<?php the_field('designreadmore'); ?>" class="readmore">CONTINUE READING</a>
    
</div>


        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->