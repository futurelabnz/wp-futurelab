<?php
/**
  Plugin Name: FutureLab
  Plugin URI: https://www.futurelab.co.nz
  Version: 1.0
  Author: FutureLab
  Author URI: https://www.futurelab.co.nz
  Description: Accordion + Slide
 *
  @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'FUTURELAB_VERSION', '1.0' );
define( 'FUTURELAB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'FUTURELAB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'FUTURELAB_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

register_activation_hook( __FILE__, array( 'FutureLab', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'FutureLab', 'plugin_deactivation' ) );

require_once( FUTURELAB_PLUGIN_DIR . '/includes/class-futurelab.php' );
require_once( FUTURELAB_PLUGIN_DIR . '/includes/class-fl-shortcodes.php' );
include_once( FUTURELAB_PLUGIN_DIR . '/includes/custom-post-types.php' );

add_action( 'init', array( 'FutureLab', 'init' ) );
add_action( 'init', array( 'FL_Shortcodes', 'init' ) );

if ( is_admin() ) {
	require_once( FUTURELAB_PLUGIN_DIR . '/admin/class-futurelab-admin.php' );
	add_action( 'init', array( 'FutureLab_Admin', 'init' ) );
}
