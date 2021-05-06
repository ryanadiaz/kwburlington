<?php
/**
* Template Name: Homepage
 */

get_header(); ?>

<div id="post-<?php the_ID(); ?>" class="content-area col-sm-12">
  <?php while ( have_posts() ) : the_post(); ?>
  
  <?php if ( get_field('section_one_heading') ) { ?>
  <section id="section-one">
    <h2 id="section-one-heading"><?php the_field('section_one_heading'); ?></h2>
    <?php if ( have_rows('section_one_links') ) { ?>
    <?php while ( have_rows('section_one_links') ) : the_row(); ?>
    <div class="row">
      <a href="<?php the_sub_field('section_one_link'); ?>">
        <i class="<?php the_sub_field('section_one_icon'); ?>"></i>
        <?php the_sub_field('section_one_title'); ?>
      </a>
    </div>
    <?php endwhile; ?>
    <?php } ?>
  </section>
  <?php } ?>

  <?php if ( have_rows('section_two_top') ) { ?>
  <?php while ( have_rows('section_two_top') ) : the_row(); ?>
  <section id="section-two-top">
    <h2 id="section-two-top-heading"><?php the_sub_field('section_two_top_heading'); ?></h2>
    <?php if ( have_rows('section_two_top_links'))  { ?>
    <?php while ( have_rows('section_two_top_links') ) : the_row(); ?>
    <div class="row">
      <a href="<?php the_sub_field('section_two_top_link'); ?>"><?php the_sub_field('section_two_top_title'); ?></a>
    </div>
    <?php endwhile; ?>
    <?php } ?>
  </section>
  <?php endwhile; ?>
  <?php } ?>

  <?php if ( have_rows('section_two_middle') ) { ?>
  <?php while ( have_rows('section_two_middle') ) : the_row(); ?>
  <section id="section-two-middle">
    <h2 id="section-two-middle-heading"><?php the_sub_field('section_two_middle_heading'); ?></h2>
    <?php if ( have_rows('section_two_middle_links'))  { ?>
    <?php while ( have_rows('section_two_middle_links') ) : the_row(); ?>
    <div class="row">
      <a href="<?php the_sub_field('section_two_middle_link'); ?>"><?php the_sub_field('section_two_middle_title'); ?></a>
    </div>
    <?php endwhile; ?>
    <?php } ?>
  </section>
  <?php endwhile; ?>
  <?php } ?>

  <?php if ( have_rows('section_two_bottom') ) { ?>
  <?php while ( have_rows('section_two_bottom') ) : the_row(); ?>
  <section id="section-two-bottom">
    <h2 id="section-two-bottom-heading"><?php the_sub_field('section_two_bottom_heading'); ?></h2>
    <?php if ( have_rows('section_two_bottom_links'))  { ?>
    <?php while ( have_rows('section_two_bottom_links') ) : the_row(); ?>
    <div class="row">
      <a href="<?php the_sub_field('section_two_bottom_link'); ?>"><?php the_sub_field('section_two_bottom_title'); ?></a>
    </div>
    <?php endwhile; ?>
    <?php } ?>
  </section>
  <?php endwhile; ?>
  <?php } ?>

  <?php if ( have_rows('section_three_announcement_area') ) { ?>
  <?php while ( have_rows('section_three_announcement_area') ) : the_row(); ?>
  <section id="section-three-announcement-area">
    <h2 id="section-three-announcement-area-heading"><?php the_sub_field('section_three_announcement_area_heading'); ?></h2>
    <?php the_sub_field('section_three_announcement_area_announcements'); ?>
  </section>
  <?php endwhile; ?>
  <?php } ?>

  <?php if ( have_rows('section_three_main_content_area') ) { ?>
  <?php while ( have_rows('section_three_main_content_area') ) : the_row(); ?>
  <section id="section-three-main-content-area">
    <?php the_sub_field('section_three_main_content'); ?>
  </section>
  <?php endwhile; ?>
  <?php } ?>

  <?php if ( get_field('section_four') ) { ?>
  <section id="section-four">
    <?php the_field('section_four'); ?>
  </section>
  <?php } ?>

  <!-- <div>
  <?php // the_content(); ?>
  </div> -->
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
