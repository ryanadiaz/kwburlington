<?php
/**
* Template Name: Homepage
 */

get_header(); ?>

<section id="primary" class="content-area col-sm-12">
  <div id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="">
 
      </div>
    </article>

    <?php endwhile; // End of the loop. ?>
  </div><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
