<?php
	/* Theme Options Filter
	------------------------------------------------------------*/

	add_action( 'admin_head', 'woo_add_themeoptions_filter' , 1 );
	
	function woo_add_themeoptions_filter () {

		add_filter( 'woothemes_theme_options', 'woo_bookclub_theme_options' );
	
	} // woo_add_themeoptions_filter()
	
	function woo_bookclub_theme_options ( $options ) {
	
		// Use this array to remove items from theme options. Example below removes the Archive Maps section
		// $options_to_remove = array( 'woo_archive_maps_heading', 'woo_show_archive_map', 'woo_archive_type', 'woo_archive_zoom', 'woo_maps_archive_scroll' , 'woo_image_dimensions' , 'woo_archive_featured_h', 'woo_cat_show_pins'  ); 
		
		$options_to_remove = array();
		
		if ( count( $options ) && count( $options_to_remove ) ) {
		
			foreach ( $options as $k => $v ) {
			
				if ( in_array( $v['id'], $options_to_remove ) ) {
					
					unset( $options[$k] );
					
				} // End IF Statement
			
			} // End FOREACH Loop
		
		} // End IF Statement
		
		return $options;
	
	} // End woo_bookclub_theme_options()

	/* Content Builder Installer Function
	------------------------------------------------------------*/
	
	require_once( 'includes/content-builder-install.php' );
	
	/* woo_custom_taxonomy_archive_title()
	 *
	 * Creates a dynamic title for a custom taxonomy archive.
	------------------------------------------------------------*/
	
	function woo_custom_taxonomy_archive_title () {
	
		global $wp_query, $post;
	
		$post_types = array();
		$post_types_processed = array();
		
		while ($wp_query->have_posts()) : $wp_query->the_post();
		
			if ( in_array( $post->post_type, $post_types_processed ) ) {} else {
			
				$data = array();
				$data['token'] = $post->post_type;
				
				$cpt_obj = get_post_type_object( $post->post_type );
				
				$data['singular_name'] = $cpt_obj->labels->singular_name;
				$data['name'] = $cpt_obj->labels->name;
				
				$post_types[] = $data;
				$post_types_processed[] = $post->post_type;
			
			} // End IF Statement
		
		endwhile;
		
		$wp_query->rewind_posts();
		
		$post_types_text = '';
    
		for ( $i = 0; $i <= count( $post_types )-1; $i++ ) {
		
			$concatenator = ', ';
		
			if ( ( $i == count( $post_types ) -2 ) ) {
			
				$concatenator = __( ' and ', 'woothemes' );
			
			} // End IF Statement
			
			if ( ( $i == count( $post_types ) -1 ) ) {
			
				$concatenator = '';
			
			} // End IF Statement
			
			$post_types_text .= $post_types[$i]['name'] . $concatenator;
		
		} // End FOR Loop
		
		return $post_types_text;
	
	} // End woo_custom_taxonomy_archive_title()
	
	/* woo_remove_meta_from_array()
	 *
	 * Checks for data from each of the $meta_fields as removes
	 * it from the $array.
	 *
	 * Params:
	 * Array $array (required)
	 * Array $meta_fields (required)
	------------------------------------------------------------*/
	
	function woo_remove_meta_from_array ( $array, $meta_fields ) {
	
		global $post;
	
		// Make sure we've got the right data types.
		foreach ( array( $array, $meta_fields ) as $a ) {
		
			if ( ! is_array( $a ) ) { return; } // End IF Statement
		
		} // End FOREACH Loop
	
		// This is the custom code where we strip out all the images that are listed in custom meta fields.
		// 2011-01-05.
		
		$image_meta_fields = $meta_fields;
		
		$non_gallery_images = array();
			
		// If "upload" custom fields exist, check them for data on the current entry.
		
		if ( count( $image_meta_fields ) ) {
		
			foreach ( $image_meta_fields as $im ) {
			
				$_value = get_post_meta( $post->ID, $im, true );
				
				if ( $_value ) {
				
					$non_gallery_images[] = $_value;
				
				} // End IF Statement
			
			} // End FOREACH Loop
		
		} // End IF Statement
		
		// If we have non-gallery images and attachments, begin our custom processing.
		
		if ( count( $non_gallery_images ) && count( $array ) ) {
		
			foreach ( $array as $k => $v ) {
			
				if ( in_array( $v->guid, $non_gallery_images ) ) {
				
					unset( $array[$k] );
				
				} // End IF Statement
			
			} // End FOREACH Loop
		
		} // End IF Statement
		
		return $array;
	
	} // End woo_remove_meta_from_array()
	
	/* Enqueue a JavaScript file specific to this child theme.
	------------------------------------------------------------*/
	
	function woo_childtheme_enqueue_script () {
	
		wp_register_script( 'woo-childtheme-js', get_stylesheet_directory_uri() . '/includes/js/general.js', array( 'jquery', 'carousel' ) );
		wp_enqueue_script( 'woo-childtheme-js' );
		
		// Load the custom jCarouselLite settings only if necessary.
		if ( is_front_page() ) {
		
			$autoStart = 0;
			$slideSpeed = 600;
			if ( get_option("woo_slider_auto") == "true" ) 
			   $autoStart = get_option("woo_slider_interval");
			else 
			   $autoStart = 0;
			if ( get_option("woo_slider_speed") <> "" ) 
				$slideSpeed = get_option("woo_slider_speed");
		
			// Allow our JavaScript file (the general one) to see our slider setup data.
			$data = array(
						'auto' => $autoStart, 
						'speed' => $slideSpeed, 
						'scroll' => 1
						);
			
			wp_localize_script( 'woo-childtheme-js', 'woo_jcarousel_settings', $data );
		
		} // End IF Statement
	
	} // End woo_childtheme_enqueue_script()
	
	if ( is_admin() ) {} else {
	
		add_action( 'wp_print_scripts', 'woo_childtheme_enqueue_script' );
		
	} // End IF Statement

	/*-----------------------------------------------------------------------------------*/
	/* Listings Write Panel Custom Columns */
	/*-----------------------------------------------------------------------------------*/
	 
	add_filter("manage_edit-book_columns", "woo_bookclub_edit_columns");
	   
	        //custom post type edit headers
	        function woo_bookclub_edit_columns($columns)
	        {      
	                global $post;
	               
	                $wp_custom_post_types_args = array();
	               
	                $wp_custom_post_types = get_post_types($wp_custom_post_types_args,'objects');
	               
	                $columns = array(
	                        "cb" => "<input type=\"checkbox\" />",
	                        "woo_webref" => "WebRef",
	                        "title" => "Listing Title",
	                        "listing_description" => "Description",
	                        "listing_thumbnail" => "Thumbnail",
	                );
	               
	                $my_current_post_type = $post->post_type;
	                $my_post_type_obj = $wp_custom_post_types[$my_current_post_type];
	                foreach ($my_post_type_obj->taxonomies as $post_type_taxonomy) {
	                        $taxonomy_details = get_taxonomy( $post_type_taxonomy );
	                       
	                        $taxonomy_name = '';
	                        if ( isset($taxonomy_details->labels) ) { $taxonomy_name = $taxonomy_details->labels->name; } // End IF Statement
	                       
	                        $columns['listing_'.$post_type_taxonomy] = $taxonomy_name;
	                }
	               
	                return $columns;
	               
	        }     
			
	register_nav_menus(
		array(
		  'left_sidebar' => 'Left Sidebar Menu',
		  'footer_menu' => 'Footer Menu'
		)
	);
	
	add_image_size( 'single-thumb', 220, (false) ); // Permalink thumbnail size
	
add_action( 'init', 'my_modify_posts_per_page', 0);

function my_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

function my_option_posts_per_page( $value ) {
    global $option_posts_per_page;
    if ( is_tax( 'book_authors' ) || is_tax( 'book_genres' ) ) {
        return 12;
    } else {
        return 8;
    }
}