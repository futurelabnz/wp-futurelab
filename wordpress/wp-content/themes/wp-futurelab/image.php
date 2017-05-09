<?php
/**
 * The template for displaying image attachments
 *
 * @package wp-futurelab
 */

global $post;
if ( $post && $post->post_parent ) {
	wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
	exit;
} else {
	wp_redirect( esc_url( home_url( '/' ) ), 301 );
	exit;
}


