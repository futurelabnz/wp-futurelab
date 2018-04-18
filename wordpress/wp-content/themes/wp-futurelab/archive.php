<?php
/**
 * The template for displaying archive pages
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
						<div class="fl-blog-list">
							<?php if ( have_posts() ) : ?>
							<div class="row">
								<div class="col-sm-3">
									<?php wp_list_categories(); ?>
								</div>
								<div class="col-sm-9">
									<?php
										/* Start the Loop */
									while ( have_posts() ) : the_post();
											
										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', get_post_format() );

										// End the loop.

									endwhile;

									the_posts_pagination( array(
										'prev_text'          => __( 'Previous', 'wp_futurelab' ),
										'next_text'          => __( 'Next', 'wp_futurelab' ),
										'screen_reader_text' => ' ',
									) );

									?>
								</div>
							</div>

							<?php else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
						</div>

					</main><!-- .site-main -->
				</div><!-- .content-area -->
			</div>

<?php get_footer(); ?>
