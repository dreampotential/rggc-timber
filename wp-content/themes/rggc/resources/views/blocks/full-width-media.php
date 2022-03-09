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
  $context['media_type']['anchor'] = $block['anchor'];
}
$context['media_type']  = get_field( 'media_type' );
$context['image']  = get_field( 'image' );
$context['video']  = get_field( 'video' );
$context['caption']  = get_field( 'caption' );

$templates = array(
  get_stylesheet_directory() . '/views/patterns/02-molecules/components/full-width-media/full-width-media.twig',
);
if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/full-width-media.png" style="width: 100%; height: auto;"/>';
} else {
  Timber::render($templates, $context);
}