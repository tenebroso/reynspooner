<?php 

function lookbook_cpt() {

	$labels = array(
		'name'                => _x( 'Lookbooks', 'Post Type General Name', 'reynspooner' ),
		'singular_name'       => _x( 'Lookbook', 'Post Type Singular Name', 'reynspooner' ),
		'menu_name'           => __( 'Lookbooks', 'reynspooner' ),
		'name_admin_bar'      => __( 'Lookbook', 'reynspooner' ),
		'parent_item_colon'   => __( 'Parent Item:', 'reynspooner' ),
		'all_items'           => __( 'All Items', 'reynspooner' ),
		'add_new_item'        => __( 'Add New Item', 'reynspooner' ),
		'add_new'             => __( 'Add New', 'reynspooner' ),
		'new_item'            => __( 'New Item', 'reynspooner' ),
		'edit_item'           => __( 'Edit Item', 'reynspooner' ),
		'update_item'         => __( 'Update Item', 'reynspooner' ),
		'view_item'           => __( 'View Item', 'reynspooner' ),
		'search_items'        => __( 'Search Item', 'reynspooner' ),
		'not_found'           => __( 'Not found', 'reynspooner' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'reynspooner' ),
	);
	$args = array(
		'label'               => __( 'lookbook', 'reynspooner' ),
		'description'         => __( 'Lookbooks', 'reynspooner' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'lookbook', $args );

}

// Hook into the 'init' action
add_action( 'init', 'lookbook_cpt', 10 );