<?php
// remove information about WordPress version
remove_action('wp_head', 'wp_generator');
// disable xml-rpc
add_filter('xmlrpc_enabled', '__return_false');
// remove WordPress sitemaps
add_filter('wp_sitemaps_enabled', '__return_false');
//add theme support title tag
add_theme_support('title-tag');
//hide admin bar
add_filter('show_admin_bar', '__return_false');
// add custom logo support
add_theme_support('custom-logo');
// add theme support
add_theme_support('post-thumbnails');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_theme_support('html5', array('style', 'script',));

// load style and script
function wpsite_frontendAssets()
{
  wp_enqueue_style('maincss', get_template_directory_uri() . '/dist/app.css', null, true, 'all');
  wp_enqueue_script('mainjs', get_template_directory_uri() . '/dist/app.js', null, false, true);
}
add_action('wp_enqueue_scripts', 'wpsite_frontendAssets');



// register nav menu positions
function wpsite_register_nav_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Menu w nagłówku'),
    )
  );
}
add_action('init', 'wpsite_register_nav_menus');


?>