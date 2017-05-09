<?php
/*
Template Name: Blog
*/

get_header(); ?>
<?php query_posts( 'post_type=post&post_status=publish&posts_per_page=10&paged=' . get_query_var( 'paged' ) ); ?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div class="col-md-8">
	<?php } else { ?>
	<div class="col-md-12">
	<?php } ?>
	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">
		 <div class="row">
		<?php
		if ( have_posts() ) :
			// Start the loop.
			while ( have_posts() ) : the_post();

				  // Include the single post content template.
				  get_template_part( 'template-parts/blog', 'loop' );

				  // End of the loop.
		endwhile;
		?>
		<div class="navigation">
		  <span class="newer"><?php previous_posts_link( __( '« Next','wp_futurelab' ) ) ?></span> <span class="older"><?php next_posts_link( __( 'Previous »','wp_futurelab' ) ) ?></span>
		</div><!-- /.navigation -->

				<?php else : ?>
		<div class="col-md-12">
		  <div id="post-404" class="noposts">

			<p><?php _e( 'Posts not found.','wp_futurelab' ); ?></p>

		  </div><!-- /#post-404 -->
		</div>
		<?php endif;
wp_reset_query(); ?>
		</div>
	  </main><!-- .site-main -->
		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->
  </div><!-- .col-md-12 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
