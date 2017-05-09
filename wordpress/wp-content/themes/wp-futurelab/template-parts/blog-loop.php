<?php
/**
 * The template part for displaying single posts
 *
 * @package wp-futurelab
 */
?>
<div class="col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php wp_futurelab_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_excerpt();
		do_action( 'wp_futurelab_blog-loop_after_excerpt' );
		?>
	</div><!-- .entry-content -->
  </article><!-- #post-## -->
</div>
