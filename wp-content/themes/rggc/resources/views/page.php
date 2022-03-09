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
$args1 = array('post_type' => 'projects', 'numberposts' => 3);
$args = array(
  'post_type' => 'projects',
  'posts_per_page' => -1,
  'orderby' => array(
      'date' => 'DESC'
  ));
  
  $context['posts'] = Timber::get_posts( $args1 );
  $context['all_posts'] = Timber::get_posts( $args );

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
    if($context['intro']) {
      acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
      $context['intro1'] = isset(get_fields()['intro']) ? get_fields()['intro'] : NULL;
    }
    else {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['intro'] = isset(get_fields()['intro']) ? get_fields()['intro'] : NULL;
    }
    if($context['columns']) {
      acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
      $context['columns1'] = isset(get_fields()['columns']) ? get_fields()['columns'] : NULL;
    }
    else {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['columns'] = isset(get_fields()['columns']) ? get_fields()['columns'] : NULL;
    }
  }
  if ( 'acf/columns' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['layout'] = isset(get_fields()['layout']) ? get_fields()['layout'] : NULL;
    $context['columns'] = isset(get_fields()['columns']) ? get_fields()['columns'] : NULL;
    $context['background_style'] = isset(get_fields()['background_style']) ? get_fields()['background_style'] : NULL;
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
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/team-headline' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['team_heading'] = isset(get_fields()['team_heading']) ? get_fields()['team_heading'] : NULL;
    $context['team_description'] = isset(get_fields()['team_description']) ? get_fields()['team_description'] : NULL;    
    $context['team_card'] = isset(get_fields()['team_card']) ? get_fields()['team_card'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/full-width-media' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['full_video'] = isset(get_fields()['full_video']) ? get_fields()['full_video'] : NULL;
    $context['full_image'] = isset(get_fields()['full_image']) ? get_fields()['full_image'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/latest' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['title_latest'] = isset(get_fields()['title_latest']) ? get_fields()['title_latest'] : NULL;
    $context['background_image_latest'] = isset(get_fields()['background_image_latest']) ? get_fields()['background_image_latest'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/image-gallery' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['image_gallery'] = isset(get_fields()['image_gallery']) ? get_fields()['image_gallery'] : NULL;
    $context['show_filter'] = true;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/testimonial' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['testimonials'] = isset(get_fields()['testimonials']) ? get_fields()['testimonials'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
  if ( 'acf/project-filter' === $block['blockName'] ) {
    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );
    $context['project_filter'] = isset(get_fields()['project_filter']) ? get_fields()['project_filter'] : NULL;
    acf_reset_meta( $block['attrs']['id'] );
  }
}
Timber::render(array(
  '05-pages/page-' . $post->post_name . '.twig',
  '05-pages/page.twig'
), $context);