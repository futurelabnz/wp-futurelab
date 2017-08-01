<?php
/**
 * FutureLab functions.
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Gets the URL for an endpoint, which varies depending on permalink settings.
 *
 * @param  string $values    [description].
 * @param  string $permalink [description].
 * @return string            endpoint url.
 */
function fl_get_endpoint_url( $values = '', $permalink = '' ) {
	if ( ! $permalink ) {
		$permalink = get_permalink();
	} else {
		$permalink = home_url();
	}

	if ( get_option( 'permalink_structure' ) ) {
		if ( strstr( $permalink, '?' ) ) {
			$query_string	 = '?' . wp_parse_url( $permalink, PHP_URL_QUERY );
			$permalink		 = current( explode( '?', $permalink ) );
		} else {
			$query_string = '';
		}
		$url = untrailingslashit( $permalink );

		if ( ! empty( $values ) ) {
			foreach ( $values as $key => $value ) {
				$url .= '/' . $value;
			}
		}
		$url .= $query_string;
	} else {
		if ( empty( $values ) ) {
			$url = $permalink;
		} else {
			$url = add_query_arg( $values, $permalink );
		}
	}

	return apply_filters( 'fl_get_endpoint_url', $url, $values, $permalink );
}

/**
 * Get template path, to overwrite create futurelab folder in your theme files
 *
 * @param  [type]  $template_name [description].
 * @param  boolean $path          (default: boolean).
 * @param  array   $args          (default: array()).
 * @return mixed				  include template or return template path
 */
function fl_get_template( $template_name, $path = false, $args = array() ) {

	if ( ! empty( $args ) && is_array( $args ) ) {
		extract( $args );
	}

	$template_path	 = FutureLab::template_path();
	$default_path	 = FUTURELAB_PLUGIN_DIR . 'templates/';

	// Look within passed path within the theme - this is priority.
	$template = locate_template(
		array(
		trailingslashit( $template_path ) . $template_name,
		$template_name,
		)
	);

	// Get default template.
	if ( ! $template ) {
		$template = $default_path . $template_name;
	}

	if ( file_exists( $template ) ) {
		if ( $path ) {
			return $template;
		} else {
			include $template;
		}
	}
}
