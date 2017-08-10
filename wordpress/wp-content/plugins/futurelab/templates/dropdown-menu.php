<?php
/**
 * The template for displaying dropdown menu
 *
 * This template can be overridden by copying it to yourtheme/futurelab/dropdown-menu.php.
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<ul class="fl-dropdown-menu">
	<li>
		<span><?php echo $atts['name']; ?></span>
		<?php echo do_shortcode( '[menu name="' .$atts['menu']. '"]' ); ?>
	</li>
</ul>