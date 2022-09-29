<?php

    while(have_posts()) {
         the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?=the_content(); ?>
        
   <?php }

?>
 