<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foundation
 */

// Define theme version
if ( ! defined( 'THEME_VERSION' ) ):
  define( 'THEME_VERSION', '0.0.1' );
endif;

if (! function_exists('foundation_setup')):
  function foundation_setup() {
    add_theme_support('automatic_feed_links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'test_theme' ),
      'secondary' => __( 'Secondary Menu', 'test_theme' ),
    ) );

  }
endif;

add_action('after_setup_theme', 'foundation_setup');

require get_template_directory() . '/inc/vite-constants.php';

require get_template_directory() . '/inc/vite-env.php';

require get_template_directory() . '/inc/vite-scripts.php';

require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/child-items.php';

require get_template_directory() . '/inc/menu-items.php';




add_action("after_setup_theme", function () {
  add_theme_support("woocommerce");
});


function foundation_wp_styles() {
  wp_enqueue_style('foundation-style', get_stylesheet_uri(), array(), THEME_VERSION);
  wp_dequeue_style("wp-block-library");
  wp_dequeue_style("wp-block-library-theme");
  wp_dequeue_style("wp-blocks-style");
}

add_action('wp_enqueue_scripts', 'foundation_wp_styles');