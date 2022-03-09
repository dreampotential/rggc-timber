<?php
/**
 *
 * @file
 * Register custom gutenberg blocks.
 *
 * @package WordPress
 */

/**
 * Register custom block types.
 */
function register_custom_block_types() {
  // Ad block.
  acf_register_block_type(
    array(
      'name'            => 'ad',
      'title'           => 'Ad',
      'description'     => 'An ad block.',
      'category'        => 'custom',
      'icon'            => 'info',
      'keywords'        => array( 'ad' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/ad.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'split_media_content',
      'title'           => 'Split Media Content ',
      'description'     => 'Image split with content',
      'category'        => 'custom',
      'icon'            => 'info',
      'keywords'        => array( 'media, content' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/split-media-content.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'page_header',
      'title'           => 'Page Header',
      'description'     => 'Header component',
      'category'        => 'custom',
      'icon'            => 'text',
      'keywords'        => array( 'media, content' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/page-header.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'hero',
      'title'           => 'Hero',
      'description'     => 'Hero component',
      'category'        => 'custom',
      'icon'            => 'cover-image',
      'keywords'        => array( 'hero' ),
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'testimonial',
      'title'           => 'Testimonial',
      'description'     => 'Quote with citation and optional image',
      'category'        => 'custom',
      'icon'            => 'editor-quote',
      'keywords'        => array( 'testimonial', 'quote' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/testimonial.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );
  

  acf_register_block_type(
    array(
      'name'            => 'columns',
      'title'           => 'Columns',
      'description'     => 'Columns: 2up, 3up or 4up',
      'category'        => 'custom',
      'icon'            => 'columns',
      'keywords'        => array( 'columns' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/columns.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'call-to-action',
      'title'           => 'Call to Action',
      'description'     => 'A block with CTA link',
      'category'        => 'custom',
      'icon'            => 'megaphone',
      'keywords'        => array( 'cta' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/call-to-action.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'image_gallery',
      'title'           => 'Image Gallery',
      'description'     => 'Images w/ captions',
      'category'        => 'custom',
      'icon'            => 'format-gallery',
      'keywords'        => array( 'image, gallery' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/image-gallery.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );


  acf_register_block_type(
    array(
      'name'            => 'full_width_media',
      'title'           => 'Full Width Media',
      'description'     => 'Image or video',
      'category'        => 'custom',
      'icon'            => 'cover-image',
      'keywords'        => array( 'image, video', 'media' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/full-width-media.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'accordion',
      'title'           => 'Accordion',
      'description'     => 'Accordion panel',
      'category'        => 'custom',
      'icon'            => 'feedback',
      'keywords'        => array( 'accordion' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/accordion.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'form_section',
      'title'           => 'Form Section',
      'description'     => 'Forms added anywhere on a page with a Background image',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'form_section' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/form-section.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'latest',
      'title'           => 'Latest',
      'description'     => 'Adds 3 latest posts',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'latest' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/latest.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'project-filter',
      'title'           => 'Project Filter',
      'description'     => 'All projects',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'filter' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/project-filter.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'team-headline',
      'title'           => 'Team Headline',
      'description'     => '',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'team-headline' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/team-headline.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'promo_section',
      'title'           => 'Promo Section',
      'description'     => 'Intro with 3 column section',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'promo_section' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/promo-section.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'intro_section',
      'title'           => 'Intro Section',
      'description'     => 'Intro heading and discription',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'promo_section' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/intro-section.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );

  acf_register_block_type(
    array(
      'name'            => 'project-content',
      'title'           => 'Project Content',
      'description'     => 'Project Content',
      'category'        => 'custom',
      'icon'            => 'edit',
      'keywords'        => array( 'promo_section' ),
      'render_template' => get_stylesheet_directory() . '/views/blocks/project-content.php',
      'mode'            => 'edit',
      'supports'        => array(
        'mode' => true,
      ),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview'
        )
      )
    )
  );
}
add_action( 'init', 'register_custom_block_types' );

