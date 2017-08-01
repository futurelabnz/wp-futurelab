<?php
/**
 * The template for displaying slide
 *
 * This template can be overridden by copying it to yourtheme/futurelab/slide.php.
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="owl-carousel futurelab-slides">
	<?php foreach ( $slides as $slide ) : ?>
		<div class="item">
			<div class="slide-content">
				<div class="slide-title"><?php echo $slide->post_title; ?></div>
				<?php if ( has_post_thumbnail( $slide->ID ) ) : ?>
					<div class="slide-image">
						<?php echo get_the_post_thumbnail( $slide->ID, 'medium' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>
