<?php

// Register Team Post Type
function themephi_team_register_post_type() {
	$labels = array(
		'name'               => esc_html__( 'Team', 'tp-elements'),
		'singular_name'      => esc_html__( 'Team', 'tp-elements'),
		'add_new'            => esc_html_x( 'Add New Team', 'tp-elements'),
		'add_new_item'       => esc_html__( 'Add New Team', 'tp-elements'),
		'edit_item'          => esc_html__( 'Edit Team', 'tp-elements'),
		'new_item'           => esc_html__( 'New Team', 'tp-elements'),
		'all_items'          => esc_html__( 'All Team', 'tp-elements'),
		'view_item'          => esc_html__( 'View Team', 'tp-elements'),
		'search_items'       => esc_html__( 'Search Teams', 'tp-elements'),
		'not_found'          => esc_html__( 'No Teams found', 'tp-elements'),
		'not_found_in_trash' => esc_html__( 'No Teams found in Trash', 'tp-elements'),
		'parent_item_colon'  => esc_html__( 'Parent Team:', 'tp-elements'),
		'menu_name'          => esc_html__( 'Teams', 'tp-elements'),
	);	
	
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_in_menu'       => true,
		'show_in_admin_bar'  => true,
		'can_export'         => true,
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,		
		'menu_icon'          =>  plugins_url( 'img/icon.png', __FILE__ ),
		'supports'           => array( 'title', 'thumbnail', 'editor', 'page-attributes' )
	);
	register_post_type( 'teams', $args );
}
add_action( 'init', 'themephi_team_register_post_type' );

function themephi_tr_create_team() {
	
	register_taxonomy(
		'team-category',
		'teams',
		array(
			'label' => esc_html__( 'Team Categories','tp-elements'),			
			'hierarchical' => true,
			'show_admin_column' => true,		
		)
	);
}
add_action( 'init', 'themephi_tr_create_team' );



