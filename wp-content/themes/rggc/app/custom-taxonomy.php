<?php
/**
 *
 * @file
 * Register custom taxonomies.
 *
 * @package WordPress
 */

/**
 * Registers custom taxonomies.
 */
function register_custom_taxonomy() {
}
add_action('init', 'register_custom_taxonomy');

function namespace_add_custom_types( $query ) {
  if( (is_category() || is_tag()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'projects'
        ));
    }
}
add_action( 'pre_get_posts', 'namespace_add_custom_types' );

