<?php
/**
 *
 * @file
 * Register custom theme functions.
 *
 * @package WordPress
 */

/**
 * Allow SVG's through WP media uploader
 */
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

/**
 * ACF Save json files
 */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}

/**
 * ACF Options Page
 */
// if ( function_exists( 'acf_add_options_page' ) ) {
//  acf_add_options_page( array(
//   'page_title' => 'General Settings',
//   'menu_title' => 'General Settings',
//   'menu_slug'  => 'general_settings',
//   'position'   => 20,
//   'capability' => 'edit_posts',
//   'icon_url'   => 'dashicons-admin-tools',
//   'redirect'   => false
//  ) );
// }
