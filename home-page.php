<?php
    /*
    Template Name: Home page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
      
<section class="container-fluid aboutbg text-center">
    <div class="container">
<h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
<p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="abouttext"><?php the_field('paragraphforaboutme'); ?></p>
        
        <div class="blocker"></div>
      </div>
    </section>
      
      <section class="container-fluid articlebg">
          <div class="container">
          <div class="row">
           <div>
            <h3 class="text-center articleT "><?php the_field('titleforarticles'); ?></h3>
              </div>
            <div class="col-md-4 articlecent">
  
                <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
                <h4><?php the_field('articletitle'); ?></h4>
                <p><?php the_field('articleexcerpt'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                
              </div>
              
            <div class="col-md-4 articlecent">
                
                <!--placehold for collumn-->
                
                <img class="img-responsive" alt=“model” src="<?php the_field('articleimage2'); ?>">
                <h4><?php the_field('articletitle2'); ?></h4>
                <p><?php the_field('articleexcerpt'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                
              </div>
              
            <div class="col-md-4 articlecent">

                <!--placehold for collumn-->
                <img class="img-responsive" alt=“gamedesign” src="<?php the_field('articleimage3'); ?>">
                <h4><?php the_field('articletitle3'); ?></h4>
                <p><?php the_field('articleexcerpt'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>

              </div>
            </div>
          </div>
      </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>