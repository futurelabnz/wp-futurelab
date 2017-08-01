<?php
/**
 * FutureLab main class.
 *
 * Class FutureLab
 *
 * @package FutureLab
 */

if ( ! class_exists( 'FutureLab' ) ) {

	/**
	 * Main FUTURELAB Class
	 *
	 * @class FUTURELAB
	 * @version 1.0
	 */
	class FutureLab {

		/**
		 * Initiated class
		 *
		 * @var boolean
		 */
		private static $initiated = false;

		/**
		 * Include required files
		 */
		public static function init() {
			include_once( FUTURELAB_PLUGIN_DIR . '/includes/functions.php' );

			if ( ! self::$initiated ) {
				self::init_hooks();
			}
		}

		/**
		 * Initializes WordPress hooks
		 */
		private static function init_hooks() {
			self::$initiated = true;

			add_action( 'wp_enqueue_scripts', array( 'FutureLab', 'futurelab_scripts' ) );
		}

		/**
		 * Enqueue Scripts
		 */
		public static function futurelab_scripts() {
			// Owl carousel scripts.
			wp_enqueue_script( 'owl-carousel-script', FUTURELAB_PLUGIN_URL . 'vendor/owl-carousel/owl.carousel.min.js', array( 'jquery' ) );
			wp_enqueue_style( 'owl-carousel-style', FUTURELAB_PLUGIN_URL . 'vendor/owl-carousel/owl.carousel.min.css', false );
			wp_enqueue_style( 'owl-carousel-default-style', FUTURELAB_PLUGIN_URL . 'vendor/owl-carousel/owl.theme.default.min.css', false );

			// FUTURELAB scripts
			// Register the script.
			wp_register_script( 'futurelab-script', FUTURELAB_PLUGIN_URL . 'assets/js/futurelab.min.js', array( 'jquery' ), FUTURELAB_VERSION );

			// Localize the script with new data.
			$translation_array = array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
			);
			wp_localize_script( 'futurelab-script', 'fl_params', $translation_array );

			// Enqueued script with localized data.
			wp_enqueue_script( 'futurelab-script' );

			wp_enqueue_style( 'futurelab-style', FUTURELAB_PLUGIN_URL . 'assets/css/futurelab.css', false, FUTURELAB_VERSION );
		}

		/**
		 * Do something when plugin activated
		 */
		public static function plugin_activation() {

		}

		/**
		 * Do something when plugin deactivated
		 */
		public static function plugin_deactivation() {

		}

		/**
		 * Get the template path.
		 *
		 * @return string
		 */
		public static function template_path() {
			return apply_filters( 'futurelab_template_path', 'futurelab/' );
		}

	}
}// End if().
