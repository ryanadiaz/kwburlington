<?php
/**
* Template Name: Homepage
 */

get_header(); ?>

<section id="primary" class="content-area col-sm-12">
  <div id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="row link-cards" style="justify-content: center;">

        <section class="col-lg-2" id="resources-section">
          <h2 class="section-title" style="color: #CE011F;">Resources</h2>
          <div class="resources-container">
            <?php if (have_rows('resources')) { ?>
            <?php while ( have_rows('resources') ) : the_row(); ?>
            <?php if (have_rows('resource')) { ?>
            <?php while ( have_rows('resource') ) : the_row(); ?>
            <a href="<?php the_sub_field('resource_link'); ?>" class="resources-link" target="_blank">
              <div class="resources-card">
                <div class="resources-card-title">
                  <?php the_sub_field('resource_title'); ?>
                </div>
              </div>
            </a>
            <?php endwhile; ?>
            <?php } ?>
            <?php endwhile; ?>
            <?php } ?>
          </div>
        </section>

        <section class="col-lg-2" id="forms-section">
          <h2 class="section-title" style="color: #254677;">Forms</h2>
          <div class="forms-container">
            <?php if (have_rows('forms')) { ?>
            <?php while ( have_rows('forms') ) : the_row(); ?>
            <?php if (have_rows('form')) { ?>
            <?php while ( have_rows('form') ) : the_row(); ?>
            <a href="<?php the_sub_field('form_link'); ?>" class="forms-link" target="_blank">
              <div class="forms-card">
                <div class="forms-card-title">
                  <?php the_sub_field('form_title'); ?>
                </div>
              </div>
            </a>
            <?php endwhile; ?>
            <?php } ?>
            <?php endwhile; ?>
            <?php } ?>
          </div>
        </section>

        <section class="col-lg-2" id="requests-section">
          <h2 class="section-title" style="color: #CE011F;">Requests</h2>
          <div class="requests-container">
            <?php if (have_rows('requests')) { ?>
            <?php while ( have_rows('requests') ) : the_row(); ?>
            <?php if (have_rows('request')) { ?>
            <?php while ( have_rows('request') ) : the_row(); ?>
            <a href="<?php the_sub_field('request_link'); ?>" class="requests-link" target="_blank">
              <div class="requests-card">
                <div class="requests-card-title">
                  <?php the_sub_field('request_title'); ?>
                </div>
              </div>
            </a>
            <?php endwhile; ?>
            <?php } ?>
            <?php endwhile; ?>
            <?php } ?>
          </div>
        </section>

        <section class="col-lg-2" id="tech-section">
          <h2 class="section-title" style="color: #254677;">TECH</h2>
          <div class="tech-container">
            <?php if (have_rows('tech_links')) { ?>
            <?php while ( have_rows('tech_links') ) : the_row(); ?>
            <?php if (have_rows('tech_link')) { ?>
            <?php while ( have_rows('tech_link') ) : the_row(); ?>
            <a href="<?php the_sub_field('tech_link'); ?>" class="tech-link" target="_blank">
              <div class="tech-card">
                <div class="tech-card-title">
                  <?php the_sub_field('tech_link_title'); ?>
                </div>
              </div>
            </a>
            <?php endwhile; ?>
            <?php } ?>
            <?php endwhile; ?>
            <?php } ?>
          </div>
        </section>

        <section class="col-lg-3">
          <div class="row">
            <article class="col-12" id="action-items-section">
              <h2 class="section-title">Action Items</h2>
              <div class="action-items-container">
              <?php if (have_rows('action_items')) { ?>
                <?php while ( have_rows('action_items') ) : the_row(); ?>
                <p><i class="fas fa-clipboard-check"></i><?php the_sub_field('action_item'); ?></p>
                <?php endwhile; ?>
              <?php } ?>
              </div>
            </article>
            <article class="col-12" id="calendars-section">
              <h2 class="section-title" style="color: #CE011F;">Calendars</h2>
              <div class="calendar-links-container">
                <?php if (have_rows('calendar_links')) { ?>
                <?php while ( have_rows('calendar_links') ) : the_row(); ?>
                <?php if (have_rows('calendar_link')) { ?>
                <?php while ( have_rows('calendar_link') ) : the_row(); ?>
                <a href="<?php the_sub_field('calendar_link'); ?>" class="calendar-link" target="_blank">
                  <div class="calendar-card">
                    <i class="fas fa-calendar-alt"></i>
                    <div class="calendar-card-title">
                      <?php the_sub_field('calendar_link_title'); ?>
                    </div>
                  </div>
                </a>
                <?php endwhile; ?>
                <?php } ?>
                <?php endwhile; ?>
                <?php } ?>
              </div>
            </article>
        </section>
      </div>

      <div class="section-divider"></div>

      <section class="headshots" id="about-us-section">
        <h2 class="section-title" style="color: #254677;">Leadership Team</h2>
        <div class="row headshot-cards" style="justify-content: center;">
          <?php if (have_rows('headshot_cards')) { ?>
          <?php while ( have_rows('headshot_cards') ) : the_row(); ?>
          <?php if (have_rows('headshot_card')) { ?>
          <?php while ( have_rows('headshot_card') ) : the_row(); ?>
          <div class="col-md-2 headshot-block">
            <img src="<?php the_sub_field('headshot_pic'); ?>" class="headshot-pic" />
            <p class="headshot-name"><?php the_sub_field('headshot_name'); ?></p>
            <p class="headshot-title"><?php the_sub_field('headshot_title'); ?></p>
            <a href="mailto:<?php the_sub_field('headshot_email'); ?>" class="headshot-email"><?php the_sub_field('headshot_email'); ?></a>
            <a href="tel:<?php the_sub_field('headshot_phone'); ?>" class="headshot-phone"><?php the_sub_field('headshot_phone'); ?></a>
          </div>
          <?php endwhile; ?>
          <?php } ?>
          <?php endwhile; ?>
          <?php } ?>
        </div>
      </section>
     
    </article>

    <?php endwhile; // End of the loop. ?>
  </div><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
