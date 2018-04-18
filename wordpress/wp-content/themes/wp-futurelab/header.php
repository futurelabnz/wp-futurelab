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
	<?php do_action( 'futurelab_after_body_open' ); ?>
<div id="page" class="site">
	<div class="site-inner">

		<header id="masthead" class="site-header" role="banner">
		<?php if ( is_active_sidebar( 'topbar_left' ) || is_active_sidebar( 'topbar_right' ) ) : ?>
	  <!-- Topbar -->
	  <div class="topbar">
		<div class="container">
		  <div class="row">
			<?php
			  // both sidebar active 2 columns, otherwise single column
			if ( is_active_sidebar( 'topbar_left' ) && is_active_sidebar( 'topbar_right' ) ) {
				$contentBottomColumn = 6;
			} else {
				$contentBottomColumn = 12;
			}
			?>

			<?php if ( is_active_sidebar( 'topbar_left' ) ) : ?>
			  <div class="col-md-<?php echo $contentBottomColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'topbar_left' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'topbar_right' ) ) : ?>
			  <div class="col-md-<?php echo $contentBottomColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'topbar_right' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>
		  </div>
		</div>
	  </div>
		<?php endif; ?>
	  <!-- Navigation -->
	  <nav class="navbar navbar-default">
		  <div class="container">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
				<?php if ( is_active_sidebar( 'header_left' ) ) : ?>
					<?php dynamic_sidebar( 'header_left' ); ?>
				<?php endif; ?>
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
						'walker'         => new Walker_Nav_Primary(),
					) ); ?>

				</div><!--.navbar-collapse-->
				<?php if ( is_active_sidebar( 'header_right' ) ) : ?>
						<?php dynamic_sidebar( 'header_right' ); ?>
				<?php endif; ?>
			  </div>

			  
				</div>
		  <!-- /.container-fluid -->
	  </nav>
			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default wp_futurelab custom header sizes attribute.
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'wp_futurelab_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->
		<?php do_action( 'fl_after_header' ); ?>
		
