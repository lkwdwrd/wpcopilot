<?php
get_header(); ?>

<div>
  <?php if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>
     <h1><?php the_title(); ?></h1>
     <?php the_content(); 
     endwhile;
    else: 
      echo 'nothing here';
    endif;?>
</div>

<?php
get_footer();