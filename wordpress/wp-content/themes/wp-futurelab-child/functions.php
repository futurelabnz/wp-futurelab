<?php
function wp_futurelab_child_enqueue_scripts() {
  wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/slick/slick.css'  );
  wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/slick/slick.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/child.js', array('slick-script'), null, true );
}
add_action( 'wp_enqueue_scripts', 'wp_futurelab_child_enqueue_scripts', 11);

function latestnews_shortcode($atts, $content=null){

  $getpost = get_posts( array('number' => 1) );

  $getpost = $getpost[0];

  $return = "<div class='latest-news'>";
  $return .= "<div class='latest-news-title'>";
  $return .= get_the_title($getpost->ID);
  $return .= "</div>";
  $return .= "<div class='latest-news-date'>";
  $return .= get_the_date( 'd-m-Y', $getpost->ID );
  $return .= "</div>";
  $return .= "<div class='latest-news-excerpt'>";
  $return .= get_the_excerpt_by_id($getpost->ID);
  $return .= "</div>";
  $return .= "<div class='latest-news-readmore'>";
  $return .= "<a href='" . get_permalink($getpost->ID) . "'>Read more</a>";
  $return .= "</div>";
  $return .= "</div>";

  return $return;

}
add_shortcode('latestnews', 'latestnews_shortcode');

function get_the_excerpt_by_id($post_id) {
  global $post;  
  $save_post = $post;
  $post = get_post($post_id);
  $output = get_the_excerpt();
  if(!empty($output)){
    $output .= " ...";
  }
  $post = $save_post;
  return $output;
}

//[menu name="about-us"]
function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');


function remove_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'remove_excerpt_more' );

function add_read_more_button() {
  echo sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
	'Read More'
    );
}
add_action('wp_futurelab_blog-loop_after_excerpt', 'add_read_more_button');