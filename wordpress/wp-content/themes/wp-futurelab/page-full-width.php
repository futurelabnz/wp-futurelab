<?php
/*
Template Name: Full width
*/
get_header(); ?>
	<div id="content">
		<?php do_action( 'before_content' ); ?>
		<div class="row">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<div class="col-md-8">
			<?php } else { ?>
			<div class="col-md-12">
			<?php } ?>
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}

							// End of the loop.
						endwhile; ?>
					</main><!-- .site-main -->

				</div><!-- .content-area -->
		    </div><!-- .col-md-12 -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
