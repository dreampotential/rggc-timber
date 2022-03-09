<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$args = array('post_type' => 'post', 'numberposts' => 3);
$context['posts'] = Timber::query_posts($args);
/**
 * Move blocks outside of post content.
 */
$blocks = parse_blocks($post->post_content);

$context['blocks'] = $blocks;
foreach ($blocks as $block) {
  if ( 'acf/hero' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['hero'] = isset(get_fields()['hero']) ? get_fields()['hero'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/promo-section' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['intro'] = isset(get_fields()['intro']) ? get_fields()['intro'] : NULL;
    $context['columns'] = isset(get_fields()['columns']) ? get_fields()['columns'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/latest' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['title_latest'] = isset(get_fields()['title_latest']) ? get_fields()['title_latest'] : NULL;
    $context['background_image_latest'] = isset(get_fields()['background_image_latest']) ? get_fields()['background_image_latest'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/testimonial' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['title'] = isset(get_fields()['title']) ? get_fields()['title'] : NULL;
    $context['testimonials'] = isset(get_fields()['testimonials']) ? get_fields()['testimonials'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/form-section' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['form_id'] = isset(get_fields()['form_id']) ? get_fields()['form_id'] : NULL;
    $context['contact_form'] = isset(get_fields()['contact_form']) ? get_fields()['contact_form'] : NULL;
    $context['background_image'] = isset(get_fields()['background_image']) ? get_fields()['background_image'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
}

Timber::render(array(
  '05-pages/page-' . $post->post_name . '.twig',
  '05-pages/front-page.twig'
), $context);
