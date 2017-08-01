<?php
/**
 * The template for displaying accordion
 *
 * This template can be overridden by copying it to yourtheme/futurelab/accordion.php.
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<ul class="fl-accordion">
	<?php
	foreach ( $accordions as $accordion ) :

		$title = '';
		$desc = '';
		if ( isset( $accordion['title'] ) ) {
			$title = $accordion['title'];
		}

		if ( isset( $accordion['description'] ) ) {
			$desc = $accordion['description'];
		}

		if ( ! empty( $title ) ) :
	?>
		<li>
			<div class="toggle"><?php echo esc_html( $title ); ?></div>
			<div class="inner">
				<?php echo wpautop( $desc ); ?>
			</div>
		</li>
	<?php
		endif;
	endforeach; ?>
</ul>
