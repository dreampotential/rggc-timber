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
  $context['image_gallery']['anchor'] = $block['anchor'];
}
$context['image_gallery']  = get_field( 'image_gallery' );

$templates = array(
  get_stylesheet_directory() . '/views/patterns/02-molecules/components/image-gallery/image-gallery.twig',
);
if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/image-gallery.png" style="width: 100%; height: auto;"/>';
} else {
  Timber::render($templates, $context);
}