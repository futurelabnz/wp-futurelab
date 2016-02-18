<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the ".row" div.
 *
 * @package wp-futurelab
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<header id="masthead" class="site-header" role="banner">
      <!-- Navigation -->
      <nav class="navbar navbar-default">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                  <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'wp_futurelab' ); ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="site-branding">
                  <?php if ( get_theme_mod( 'site_logo' ) ) : ?>
                    <div class='site-logo'>
                        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php bloginfo( 'name' ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'site_logo' ) ); ?>' alt='<?php bloginfo( 'name' ); ?>'></a>
                    </div>
                  <?php else : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                      <p class="site-description"><?php echo $description; ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div><!-- .site-branding -->
              </div>
              <div class="header-right navbar-right">
                <div class="collapse navbar-collapse navbar-primary-collapse navbar-left">
                  <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav navbar-nav',
                    'walker'         => new Walker_Nav_Primary()
                  ) ); ?>

                </div><!--.navbar-collapse-->
                <?php if ( is_active_sidebar( 'header_right' )  ) : ?>
                      <?php dynamic_sidebar( 'header_right' ); ?>
                <?php endif; ?>
              </div>
          </div>
          <!-- /.container-fluid -->
      </nav>
		</header><!-- .site-header -->

		<div id="content" class="container">
        <div class="row">
