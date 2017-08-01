<?php
/**
 * FutureLab admin class.
 *
 * Class FutureLab_Admin
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! class_exists( 'FutureLab_Admin' ) ) {

	/**
	 * FUTURELAB_ADMIN Class
	 *
	 * @class FUTURELAB_ADMIN
	 * @version 1.0
	 */
	class FutureLab_Admin {

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

			// CMB2.
			if ( file_exists( FUTURELAB_PLUGIN_DIR . '/CMB2/init.php' ) ) {
				require_once FUTURELAB_PLUGIN_DIR . '/CMB2/init.php';
			}

			if ( ! self::$initiated ) {
				self::init_hooks();
			}
		}

		/**
		 * Hook functions to Wordpress admin
		 */
		public static function init_hooks() {
			self::$initiated = true;

			add_action( 'cmb2_admin_init', array( 'FutureLab_Admin', 'accordion_metaboxes' ) );
		}

		/**
		 * Define the metabox and field configurations.
		 */
		public static function accordion_metaboxes() {

			$prefix = 'futurelab_accordion_group_';

			/**
			 * Repeatable Field Groups
			 */
			$cmb_group = new_cmb2_box( array(
				'id'           => $prefix . 'metabox',
				'title'        => esc_html__( 'Accordion Group', 'futurelab' ),
				'object_types' => array( 'page' ),
			) );

			// $group_field_id is the field id string, so in this case: $prefix . 'demo'
			$group_field_id = $cmb_group->add_field( array(
				'id'          => $prefix . 'field_id',
				'type'        => 'group',
				'description' => esc_html__( 'Accordion entries', 'futurelab' ),
				'options'     => array(
					'group_title'   => esc_html__( 'Accordion {#}', 'futurelab' ),
					'add_button'    => esc_html__( 'Add Another Entry', 'futurelab' ),
					'remove_button' => esc_html__( 'Remove Entry', 'futurelab' ),
					'sortable'      => true, // beta
					// 'closed'     => true, // true to have the groups closed by default.
				),
			) );

			/**
			 * Group fields works the same, except ids only need
			 * to be unique to the group. Prefix is not needed.
			 *
			 * The parent field's id needs to be passed as the first argument.
			 */
			$cmb_group->add_group_field( $group_field_id, array(
				'name'       => esc_html__( 'Accordion Title', 'futurelab' ),
				'id'         => 'title',
				'type'       => 'text',
				// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

			$cmb_group->add_group_field( $group_field_id, array(
				'name'        => esc_html__( 'Accordion Description', 'futurelab' ),
				'id'          => 'description',
				'type'        => 'textarea_small',
			) );

		}

	}
}// End if().
