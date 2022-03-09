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
  $context['columns']['anchor'] = $block['anchor'];
}
$context['layout']  = get_field( 'layout' );
$context['columns'] = get_field('columns');

$templates = array(
  get_stylesheet_directory() . '/views/patterns/02-molecules/components/columns/columns.twig',
);
if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/columns.png" style="width: 100%; height: auto;"/>';
} else {
  Timber::render($templates, $context);
}