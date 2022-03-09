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
  $context['form_section']['anchor'] = $block['anchor'];
}
$context['background_image'] = get_field( 'background_image' );
$context['form_id'] = get_field( 'form_id' );

if ($is_preview) {
  echo '<img src="' . get_theme_file_uri() . '/resources/assets/screenshots/rggc-form-section.png" style="width: 100%; height: auto;"/>';
} 