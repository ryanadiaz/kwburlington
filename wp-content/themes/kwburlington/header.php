<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php 
  // WordPress 5.2 wp_body_open implementation
  if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }
?>

<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
  <?php if ( !is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
    <nav class="navbar navbar-expand-xl">
      <div class="navbar-brand">
        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
        <a href="<?php echo esc_url( home_url( '/' )); ?>">
          <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="main-logo-width">
        </a>
        <?php else : ?>
        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
        <?php endif; ?>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
        wp_nav_menu(array(
        'theme_location'    => 'primary',
        'container'       => 'div',
        'container_id'    => 'main-nav',
        'container_class' => 'collapse navbar-collapse justify-content-center',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav',
        'depth'           => 3,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
        ));
      ?>
    </nav>
	</header><!-- #masthead -->

  <?php if ( is_front_page() ): ?>

  <div id="page-sub-header">
    <div class="container">
      <img src="/wp-content/themes/kwburlington/inc/assets/img/kw_red_square_832.jpg" alt="Keller Williams Burlington MC" class="hero-overlay-image"/>
    </div>
  </div>
  <?php endif; ?>
  <div id="content" class="site-content">
  <?php endif; ?>

  <nav class="navbar navbar-expand-xl justify-content-center">
    <?php
      wp_nav_menu(array(
      'theme_location'    => 'secondary',
      'container'       => 'div',
      'container_id'    => 'secondary-nav',
      'container_class' => '',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav',
      'depth'           => 3,
      'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
      'walker'          => new wp_bootstrap_navwalker()
      ));
    ?>
  </nav>