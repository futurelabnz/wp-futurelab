<?php
/**
 * The main template file
 *
 * @package wp-futurelab
 */

get_header(); ?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div class="col-md-8">
	<?php } else { ?>
	<div class="col-md-12">
	<?php } ?>
  
	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
		  <header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		  </header>
		<?php endif; ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
            * Include the Post-Format-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
		endwhile;

		// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'wp_futurelab' ),
			'next_text'          => __( 'Next page', 'wp_futurelab' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'wp_futurelab' ) . ' </span>',
		) );

		// If no content, include the "No posts found" template.
	  else :
			get_template_part( 'template-parts/content', 'none' );

	  endif;
		?>

	  </main><!-- .site-main -->
	</div><!-- .content-area -->
  </div><!-- .col-md-12 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
