<?php
function wp_futurelab_child_enqueue_scripts()
{
    // Register the script
    wp_register_script('child-script', get_stylesheet_directory_uri() . '/assets/js/child.min.js', array('jquery'), null, true);
    // Enqueued script with localized data.
    wp_enqueue_script('child-script');
}
add_action('wp_enqueue_scripts', 'wp_futurelab_child_enqueue_scripts', 11);

//[menu name="about-us"]
function print_menu_shortcode($atts, $content = null)
{
    extract(shortcode_atts(array('name' => null), $atts));
    return wp_nav_menu(array('menu' => $name, 'echo' => false));
}
add_shortcode('menu', 'print_menu_shortcode');

function year_shortcode()
{
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'year_shortcode');
