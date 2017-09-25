<?php
/**
 * wp-futurelab functions and definitions
 *
 * @package wp-futurelab
 */

/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/walkerNavMenu.php';

if ( ! function_exists( 'wp_futurelab_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * Create your own wp_futurelab_setup() function to override in a child theme.
	 */
	function wp_futurelab_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'wp_futurelab', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		  add_filter( 'widget_text', 'do_shortcode' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		// This theme uses primary menu in top locations.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'wp_futurelab' ),
		) );

			/*
             * Switch default core markup for search form, comment form, and comments
             * to output valid HTML5.
			 */
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

			/*
             * Enable support for Post Formats.
             *
             * See: https://codex.wordpress.org/Post_Formats
			 */
			add_theme_support( 'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			) );

	}
endif; // wp_futurelab_setup
add_action( 'after_setup_theme', 'wp_futurelab_setup' );


/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 */
function wp_futurelab_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wp_futurelab' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Topbar Left', 'wp_futurelab' ),
		'id'            => 'topbar_left',
		'description'   => __( 'Topbar Left', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget topbar_left %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Topbar Right', 'wp_futurelab' ),
		'id'            => 'topbar_right',
		'description'   => __( 'Topbar Right', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget topbar_right %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Header Left', 'wp_futurelab' ),
		'id'            => 'header_left',
		'description'   => __( 'Header Left', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget header_left %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Header Right', 'wp_futurelab' ),
		'id'            => 'header_right',
		'description'   => __( 'Header Right', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget header_right %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar(array(
		'name' => 'Footer Column 1',
		'id' => 'footer_column_1',
		'description' => __( 'Footer Column 1', 'wp_futurelab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'name' => 'Footer Column 2',
		'id' => 'footer_column_2',
		'description' => __( 'Footer Column 2', 'wp_futurelab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'name' => 'Footer column 3',
		'id' => 'footer_column_3',
		'description' => __( 'Footer Column 3', 'wp_futurelab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'name' => 'Footer column 4',
		'id' => 'footer_column_4',
		'description' => __( 'Footer Column 4', 'wp_futurelab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'name' => 'Footer column 5',
		'id' => 'footer_column_5',
		'description' => __( 'Footer Column 5', 'wp_futurelab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

	register_sidebar( array(
		'name'          => __( 'Footer Bottom 1', 'wp_futurelab' ),
		'id'            => 'footer_bottom_1',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Bottom 2', 'wp_futurelab' ),
		'id'            => 'footer_bottom_2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wp_futurelab' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_futurelab_widgets_init' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 */
function wp_futurelab_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'wp_futurelab_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 */
function wp_futurelab_scripts() {
	// Main stylesheet
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css' );

	// font awesome stylesheet
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'wp_futurelab-style', get_stylesheet_uri() );

	// Add bootstrap.
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), false, true );

	// SmartMenus jQuery Bootstrap Addon
	wp_enqueue_script( 'smartMenus-script', get_template_directory_uri() . '/js/jquery.smartmenus.min.js', array(), false, true );
	wp_enqueue_script( 'smartMenus-bootstrap-script', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.min.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'wp_futurelab-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20151104' );
	}

	wp_enqueue_script( 'wp_futurelab-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20151204', true );

}
add_action( 'wp_enqueue_scripts', 'wp_futurelab_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function wp_futurelab_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'wp_futurelab_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function wp_futurelab_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ) . substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ) . substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ) . substr( $color, 2, 1 ) );
	} elseif ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array(
		'red' => $r,
		'green' => $g,
		'blue' => $b,
	);
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function wp_futurelab_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	1200 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 1200px';

	if ( 'page' === get_post_type() ) {
		1200 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		1200 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		1200 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'wp_futurelab_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function wp_futurelab_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'wp_futurelab_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function wp_futurelab_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'wp_futurelab_widget_tag_cloud_args' );



/*Hide label options on Gravity form
*/  
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
