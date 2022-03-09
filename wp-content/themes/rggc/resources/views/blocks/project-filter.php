<?php
/**
 * The template for block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @param   array $block The block settings and attributes
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$context = Timber::context();
if (!empty($block['anchor'])) {
  $context['project-filter']['anchor'] = $block['anchor'];
}
$context['project_filter']  = get_field( 'project_filter' );
$args = array('post_type' => 'projects', 'numberposts' => -1);
$context['all_posts'] = Timber::query_posts($args);


if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/rggc-latest.png" style="width: 100%; height: auto;"/>';
}