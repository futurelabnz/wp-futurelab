<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package wp-futurelab
 */

get_header(); ?>
	<div id="content" class="container">
		<?php do_action( 'before_content' ); ?>
		<div class="row">
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wp_futurelab' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e( 'It looks like nothing was found at this location.', 'wp_futurelab' ); ?></p>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- .site-main -->

				</div><!-- .content-area -->
			</div>

<?php get_footer(); ?>
