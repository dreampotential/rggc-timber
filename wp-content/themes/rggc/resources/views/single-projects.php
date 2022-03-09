<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

 $context = Timber::get_context();
 $post = Timber::query_post();
 $context['project'] = $post;
 $next_post = get_next_post();
 $prev_post = get_previous_post();

$term_obj_list = get_the_terms( $post->ID, 'category' );

$blocks = parse_blocks($post->post_content);
$context['blocks'] = $blocks;
$context['prev_project'] = get_permalink( $prev_post->ID );
$context['next_project'] = get_permalink( $next_post->ID );
$context['project_cat'] = join(', ', wp_list_pluck($term_obj_list, 'name'));
foreach ($blocks as $block) {
  if ( 'acf/hero' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['hero'] = isset(get_fields()['hero']) ? get_fields()['hero'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/split-media-content' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['heading'] = isset(get_fields()['heading']) ? get_fields()['heading'] : NULL;
    $context['subheading'] = isset(get_fields()['subheading']) ? get_fields()['subheading'] : NULL;
    $context['description'] = isset(get_fields()['description']) ? get_fields()['description'] : NULL;
    $context['image'] = isset(get_fields()['image']) ? get_fields()['image'] : NULL;
    $context['button'] = isset(get_fields()['button']) ? get_fields()['button'] : NULL;
    $context['layout'] = isset(get_fields()['layout']) ? get_fields()['layout'] : NULL;
    $context['project_details'] = isset(get_fields()['project_details']) ? get_fields()['project_details'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/image-gallery' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['image_gallery'] = isset(get_fields()['image_gallery']) ? get_fields()['image_gallery'] : NULL;
    $context['show_filter'] = false;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/testimonial' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['testimonials'] = isset(get_fields()['testimonials']) ? get_fields()['testimonials'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/full-width-media' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['full_video'] = isset(get_fields()['full_video']) ? get_fields()['full_video'] : NULL;
    $context['full_image'] = isset(get_fields()['full_image']) ? get_fields()['full_image'] : NULL;
    $context['heading1'] = isset(get_fields()['heading1']) ? get_fields()['heading1'] : NULL;
    $context['heading2'] = isset(get_fields()['heading2']) ? get_fields()['heading2'] : NULL;
    $context['description1'] = isset(get_fields()['description1']) ? get_fields()['description1'] : NULL;
    $context['description2'] = isset(get_fields()['description2']) ? get_fields()['description2'] : NULL;
    $context['caption'] = isset(get_fields()['caption']) ? get_fields()['caption'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/project-content' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['project_heading'] = isset(get_fields()['project_heading']) ? get_fields()['project_heading'] : NULL;
    $context['project_content_description'] = isset(get_fields()['project_content_description']) ? get_fields()['project_content_description'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
}
 Timber::render(array(
   '05-pages/single-' . $post->ID . '.twig',
   '05-pages/single-' . $post->post_type . '.twig'
 ), $context);