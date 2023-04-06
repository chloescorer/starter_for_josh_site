<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   
<!-- About Section -->
<section class="container-fluid aboutbg text-center">
  <div class="container">
  <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
  <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
    </div> <!-- Container -->
  </section> <!-- Fluid Container -->

<!-- Articles Section -->
<section class="container-fluid articlesbg">
  <div class="container">
    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
    <div class="row">
      <div class="col-md-4 text-center">
      <img class="img-fluid" alt=“portrait” src="<?php the_field('articleimage');?>">
        <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
        <p class="date" ><?php the_field('articledate'); ?></p>
        <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
        <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
      </div>  <!-- Column -->

      <div class="col-md-4 text-center">
      <img class="img-fluid" alt=“portrait” src="<?php the_field('articleimage2');?>">
      <h4 class="article-title2"><?php the_field('articletitle'); ?></h4>
      <p class="date" ><?php the_field('articledate2'); ?></p>
      <p class="article-p"><?php the_field('articleexcerpt2'); ?> </p>
      <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>
      </div> <!-- Column -->

      <div class="col-md-4 text-center">
      <img class="img-fluid" alt=“portrait” src="<?php the_field('articleimage3');?>">
      <h4 class="article-title2"><?php the_field('articletitle'); ?></h4>
      <p class="date" ><?php the_field('articledate3'); ?></p>
      <p class="article-p"><?php the_field('articleexcerpt3'); ?> </p>
      <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>
      </div> <!-- Column -->
    </div> <!-- Row -->
  </div> <!-- Container -->
</section> <!-- Fluid Container -->
<?php get_footer();?>