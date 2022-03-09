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
  $context['latest']['anchor'] = $block['anchor'];
}
$context['title_latest']  = get_field( 'title_latest' );
$context['background_image']  = get_field( 'background_image' );
$args = array('post_type' => 'post', 'numberposts' => 3);
$context['posts'] = Timber::query_posts($args);


if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/rggc-latest.png" style="width: 100%; height: auto;"/>';
}