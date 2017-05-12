<?php
/**
 * Template Name: Página de contato
 * Template Post Type: page
 */
 ?>
 <?php get_header() ?>

     <div class="container">
         <h2><?php single_post_title() ?></h2>
         <article class="thumbnail">
             <?php if (has_post_thumbnail()): ?>
                 <?php echo get_the_post_thumbnail($post, 'full') ?>
             <?php endif; ?>
             <div class="caption">
                 <?php if (have_posts()): the_post(); ?>
                     <div class="clearfix">
                         <?php the_content() ?>
                     </div>
                 <?php endif; ?>
             </div>
         </article>
     </div>

 <?php get_footer() ?>
