<?php
/**
 * The FL_Shortcodes class
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * FL_Shortcodes class
 * [fl_accordion]
 * [fl_slides num="4" category="popular"]
 *
 * @class       FL_Shortcodes
 * @version     1.0
 * @package     FutureLab
 */
class FL_Shortcodes {

	/**
	 * Init shortcodes.
	 */
	public static function init() {
		$shortcodes = array(
			'fl_accordion'                    => __CLASS__ . '::accordion',
			'fl_slides'                    => __CLASS__ . '::slides',
		);

		foreach ( $shortcodes as $shortcode => $function ) {
			add_shortcode( $shortcode, $function );
		}
	}

	/**
	 * List accordion
	 *
	 * @return string
	 */
	public static function accordion() {
		$accordions = get_post_meta( get_the_ID(), 'futurelab_accordion_group_field_id', true );
		if ( empty( $accordions ) ) {
			return;
		}

		ob_start();

		fl_get_template( 'accordion.php', false, array(
			'accordions' => $accordions,
		) );

		return ob_get_clean();
	}

	/**
	 * Display latest slides
	 *
	 * @param  array $atts [description].
	 * @return string       [description].
	 */
	public static function slides( $atts ) {
		$atts = shortcode_atts( array(
			'num' => '4',
			'category' => '',
		), $atts, 'slides' );

		$query_args = array(
			'post_type'           => 'slides',
			'post_status'         => 'publish',
			'posts_per_page'      => $atts['num'],
			'orderby'			 => 'date',
			'order'				 => 'DESC',
		);

		if ( ! empty( $atts['category'] ) ) {
			$query_args['tax_query'] = array(
				array(
					'taxonomy'	 => 'slide_category',
					'field'		 => 'slug',
					'terms'		 => $atts['category'],
				),
			);
		}

		$posts = get_posts( $query_args );
		$result = '';
		if ( ! empty( $posts ) ) {
			$result	 .= '<div class="owl-carousel futurelab-slides">';
			foreach ( $posts as $post ) {
				$result .= '<div class="item">';
				$result	 .= '<div class="slide-content">';
				$result	 .= '<div class="slide-title">' . $post->post_title . '</div>';
				if ( has_post_thumbnail( $post->ID ) ) {
					$result	 .= '<div class="slide-image">';
					$result .= get_the_post_thumbnail( $post->ID, 'medium' );
					$result	 .= '</div>';
				}
				$result	 .= '</div>';
				$result .= '</div>';
			}
			$result .= '</div>';
		}
		return $result;
	}

}
