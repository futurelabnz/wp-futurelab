<?php
/**
 * FutureLab custom post type.
 *
 * Custom post type for slides
 *
 * @package FutureLab
 */

add_action( 'init', 'futurelab_create_post_type', 0 );

/**
 * Create Calendar post type
 */
if ( ! function_exists( 'futurelab_create_post_type' ) ) {

	/**
	 * Creating custom post tyle
	 */
	function futurelab_create_post_type() {

		register_post_type( 'slides', array(
			'labels'		 => array(
				'name'				 => __( 'Slides', 'futurelab' ),
				'singular_name'		 => __( 'Slide', 'futurelab' ),
				'add_item'			 => __( 'New Slide', 'futurelab' ),
				'add_new_item'		 => __( 'Add New Slide', 'futurelab' ),
				'edit_item'			 => __( 'Edit Slide', 'futurelab' ),
				'view_item'			 => __( 'View Slide', 'futurelab' ),
				'all_items'			 => __( 'All Slides', 'futurelab' ),
				'search_items'		 => __( 'Search Slides', 'futurelab' ),
				'parent_item_colon'	 => __( 'Parent Slides:', 'futurelab' ),
				'not_found'			 => __( 'No Slides found.', 'futurelab' ),
				'not_found_in_trash' => __( 'No Slides found in Trash.', 'futurelab' ),
			),
			'public'		 => false,
			'show_in_menu'	 => true,
			'menu_position'	 => 3,
			'show_ui'		 => true,
			'has_archive'	 => false,
			'hierarchical'	 => false,
			'show_in_rest'	 => false,
			'supports'		 => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'		 => 'dashicons-slides',
		) );

		/**
		 * Create Slides Category
		 */
		$labels = array(
			'name'				 => __( 'Slide Categories', 'futurelab' ),
			'singular_name'		 => __( 'Slide Category', 'futurelab' ),
			'search_items'		 => __( 'Search Slide Categories', 'futurelab' ),
			'all_items'			 => __( 'All Slide Categories', 'futurelab' ),
			'parent_item'		 => __( 'Parent Slide Category', 'futurelab' ),
			'parent_item_colon'	 => __( 'Parent Slide Category:', 'futurelab' ),
			'edit_item'			 => __( 'Edit Slide Category', 'futurelab' ),
			'update_item'		 => __( 'Update Slide Category', 'futurelab' ),
			'add_new_item'		 => __( 'Add New Slide Category', 'futurelab' ),
			'new_item_name'		 => __( 'New Slide Category Name', 'futurelab' ),
			'menu_name'			 => __( 'Slide Categories', 'futurelab' ),
		);

		register_taxonomy( 'slide_category', array( 'slides' ), array(
			'hierarchical'		 => true,
			'labels'			 => $labels,
			'show_ui'			 => true,
			'query_var'			 => true,
			'show_admin_column'	 => true,
			'show_in_rest'		 => true,
			'rewrite'			 => array(
				'slug' => 'slide-category',
			),
		) );
	}
}// End if().
