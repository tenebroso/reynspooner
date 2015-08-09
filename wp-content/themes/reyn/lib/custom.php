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
	return '<hr /><span class="btn">Continue Reading <span>&gt;</span></span>';
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