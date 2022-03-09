<?php
/**
 *
 * @file
 * Register custom content types.
 *
 * @package WordPress
 */


function register_custom_post_types() {
  /**
   * Post Type: Projects.
   */

  $labels = array(
    'name' => __( 'Projects', 'sage' ),
    'singular_name' => __( 'Project', 'sage' ),
    'menu_name' => __( 'Projects', 'sage' ),
    'all_items' => __( 'All Projects', 'sage' ),
    'add_new' => __( 'Add New Project', 'sage' ),
    'add_new_item' => __( 'Add New Project Item', 'sage' ),
    'edit_item' => __( 'Edit Project', 'sage' ),
    'new_item' => __( 'New Project', 'sage' ),
    'view_item' => __( 'View Project', 'sage' ),
    'view_items' => __( 'View Project', 'sage' ),
    'search_items' => __( 'Search Projects', 'sage' ),
    'not_found' => __( 'No Projects Found', 'sage' ),
    'not_found_in_trash' => __( 'No Projects Found in Trash', 'sage' ),
    'parent_item_colon' => __( 'Parent Project', 'sage' ),
    'parent_item_colon' => __( 'Parent Project', 'sage' ),
  );

  $args = array(
    'label' => __( 'Projects', 'sage' ),
    'labels' => $labels,
    'description' => 'Projects',
    'taxonomies' => array( 'category' ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'rest_base' => '',
    'has_archive' => true,
    'show_in_menu' => true,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => true,
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => true,
    'rewrite' => array( 'slug' => 'project', 'with_front' => true ),
    'query_var' => true,
    'menu_icon' => 'dashicons-store',
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','category' ),
    'menu_position' => 4,
  );

  register_post_type( 'projects', $args );

  $labels = array(
    'name' => __( 'Teams', 'sage' ),
    'singular_name' => __( 'Team', 'sage' ),
    'menu_name' => __( 'Teams', 'sage' ),
    'all_items' => __( 'All Teams', 'sage' ),
    'add_new' => __( 'Add New Team', 'sage' ),
    'add_new_item' => __( 'Add New Team Item', 'sage' ),
    'edit_item' => __( 'Edit Team', 'sage' ),
    'new_item' => __( 'New Team', 'sage' ),
    'view_item' => __( 'View Team', 'sage' ),
    'view_items' => __( 'View Team', 'sage' ),
    'search_items' => __( 'Search Teams', 'sage' ),
    'not_found' => __( 'No Teams Found', 'sage' ),
    'not_found_in_trash' => __( 'No Teams Found in Trash', 'sage' ),
    'parent_item_colon' => __( 'Parent Team', 'sage' ),
    'parent_item_colon' => __( 'Parent Team', 'sage' ),
  );

  $args = array(
    'label' => __( 'Teams', 'sage' ),
    'labels' => $labels,
    'description' => '',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'rest_base' => '',
    'has_archive' => false,
    'show_in_menu' => true,
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => true,
    'rewrite' => array( 'slug' => 'team', 'with_front' => true ),
    'query_var' => true,
    'menu_icon' => 'dashicons-groups',
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'menu_position' => 6,
  );

  register_post_type( 'teams', $args );

}
add_action('init', 'register_custom_post_types');

// function project_category() {
//   register_taxonomy(
//     'project_category', 
//     'project',
//       array(
//           'hierarchical' => true,
//           'label' => 'Project Category',
//           'query_var' => true,
//           'rewrite' => array(
//               'slug' => 'project_categories',
//               'with_front' => false
//           )
//       )
//   );
// }
// add_action( 'init', 'project_category');