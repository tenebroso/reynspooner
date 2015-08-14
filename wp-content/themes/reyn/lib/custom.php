<?php 

/* =============================================================================
   Customize Login Logo
   ========================================================================== */

function reyn_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            /*background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/logo-v2.svg);*/
            padding-bottom: 30px;
            background-size: contain;
            width: 320px;
            height: 70px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'reyn_login_logo' );

/* =============================================================================
   Custom Excerpt Length
   ========================================================================== */

function custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '... <hr /><span class="btn">Continue Reading <span>&gt;</span></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="cta-blog--post-excerpt"', $excerpt);
}

/* =============================================================================
   Setup theme URL
   ========================================================================== */

function img_dir(){
      return "/wp-content/themes/reyn/dist/images";
}

/* =============================================================================
   Setup Post Thumbnails
   ========================================================================== */

add_theme_support('post-thumbnails');
update_option( 'thumbnail_size_w', 173 );
update_option( 'thumbnail_size_h', 173 );
update_option( 'thumbnail_crop', 1 );
update_option( 'medium_size_w', 360 );
update_option( 'medium_size_h', 170 );
update_option( 'medium_crop', 1 ); 
update_option( 'large_size_w', 945 );
update_option( 'large_size_h', 470 );
add_image_size( 'blog-grid-large', 750, 350, true );
add_image_size( 'blog-grid', 360, 300, true );

/* =============================================================================
   GA
   ========================================================================== */

if (!defined('GOOGLE_ANALYTICS_ID')) {
  define('GOOGLE_ANALYTICS_ID', 'UA-26151426-1');
}
