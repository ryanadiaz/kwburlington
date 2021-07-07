<?php
/**
 * Template Name: Leadership Team
 */

get_header('subpage');
?>

<section id="primary" class="content-area">
  <div id="main" class="site-main" role="main">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <h1 class="subpage-heading"><?php the_field('page_heading'); ?></h1>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="entry-content row team-members-container">
          <?php $args = array('post_type' => 'team_members', 'posts_per_page' => -1, 'order' => 'ASC'); ?>
          <?php $the_query = new WP_Query($args); ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-12 col-lg-3 team-member-container">
            <img src="<?php the_field('headshot'); ?>" />
            <p class="team-member-name"><?php the_title(); ?></p>
            <p class="team-member-title"><?php the_field('title'); ?></p>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </section><!-- .entry-content -->
      </article><!-- #post-## -->
    <?php endwhile; // End of the loop. ?>
    </div>
  </div><!-- #main -->
</section><!-- #primary -->

<?php get_footer();
