<?php
/**
 * The template for displaying advertisement blocks
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package    WordPress
 * @subpackage Timber
 * @since      Timber 0.1
 */

$context = Timber::context();
$context['ad'] = get_field( 'ad' );

$templates = array(
  get_stylesheet_directory() . '/views/patterns/02-molecules/components/ad/ad.twig',
);
Timber::render( $templates, $context );
