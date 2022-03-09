<?php
/**
 * The template for block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @param   array $block The block settings and attributes
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$post = new Timber\Post();
$context = Timber::context();
if (!empty($block['anchor'])) {
  $context['promo_section']['anchor'] = $block['anchor'];
}

$context['intro']  = get_field( 'intro' );
$context['columns']  = get_field( 'columns' );

$templates = array(
  get_stylesheet_directory() . '/views/patterns/02-molecules/components/promo-section/promo-section.twig',
);



if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/rggc-promo-section.png" style="width: 100%; height: auto;"/>';
}
else {
  Timber::render($templates, $context);
} 