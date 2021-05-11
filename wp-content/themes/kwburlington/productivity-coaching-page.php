<?php
/**
 * Template Name: Productivity Coaching Program
 */

get_header('subpage');
?>

<section id="primary" class="content-area">
  <div id="main" class="site-main" role="main">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <h1 class="subpage-heading"><?php the_title(); ?></h1>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="entry-content row">
          <?php if ( have_rows('productivity_coach_profiles') ) { ?>
            <div class="col-12 col-lg-6">
              <?php while ( have_rows('productivity_coach_profiles') ) : the_row(); ?>
              <div class="pc-coach-container">
                <img src="<?php the_sub_field('productivity_coach_headshot'); ?>" />
                <div class="pc-program-text">
                  <p class="pc-program-name"><?php the_sub_field('productivity_coach_name'); ?></p>
                  <p class="pc-program-phone"><?php the_sub_field('productivity_coach_phone'); ?></p>
                  <p class="pc-program-email"><?php the_sub_field('productivity_coach_email'); ?></p>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          <?php } ?>
          <div class="col-12 col-lg-6">
            <?php the_content(); ?>
          </div>
        </section><!-- .entry-content -->
      </article><!-- #post-## -->
    <?php endwhile; // End of the loop. ?>
    </div>
  </div><!-- #main -->
</section><!-- #primary -->

<?php get_footer();
