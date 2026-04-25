<?php
class Themephi_Activity_Post_Type{	

	public function __construct() {
		add_action( 'init', array( $this, 'tp_activity_register_post_type' ) );		
		add_action( 'init', array( $this, 'tp_create_activity_category' ) );
	}

	// Register Activity Post Type
	function tp_activity_register_post_type() {
		$labels = array(
			'name'               => esc_html__( 'Activity', 'tp-elements'),
			'singular_name'      => esc_html__( 'Activity', 'tp-elements'),
			'add_new'            => esc_html_x( 'Add New Activity', 'tp-elements'),
			'add_new_item'       => esc_html__( 'Add New Activity', 'tp-elements'),
			'edit_item'          => esc_html__( 'Edit Activity', 'tp-elements'),
			'new_item'           => esc_html__( 'New Activity', 'tp-elements'),
			'all_items'          => esc_html__( 'All Activity', 'tp-elements'),
			'view_item'          => esc_html__( 'View Activity', 'tp-elements'),
			'search_items'       => esc_html__( 'Search Activity', 'tp-elements'),
			'not_found'          => esc_html__( 'No Activity found', 'tp-elements'),
			'not_found_in_trash' => esc_html__( 'No Activity found in Trash', 'tp-elements'),
			'parent_item_colon'  => esc_html__( 'Parent Activity:', 'tp-elements'),
			'menu_name'          => esc_html__( 'Activity', 'tp-elements'),
		);
		global $service_option;
	   	$activity_slug = (!empty($service_option['service_slug']))? $service_option['service_slug'] :'activity';
		$args = array(
			'labels'             => $labels,
			'public'             => true,	
			'show_in_menu'       => true,
			'show_in_admin_bar'  => true,
			'can_export'         => true,
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 20,		
			'rewrite' => 		 array('slug' => $activity_slug,'with_front' => false),
			'menu_icon'          =>  plugins_url( 'img/icon.png', __FILE__ ),
			'supports'           => array( 'title', 'thumbnail','editor', 'excerpt'),		
		);
		register_post_type( 'activity', $args );
	}

	function tp_create_activity_category() {
		
		register_taxonomy(
			'activity-category',
			'activity',
			array(
				'label' => esc_html__( 'Activity Categories','tp-elements'),			
				'hierarchical' => true,
				'show_admin_column' => true,
			)
		);
	}


}
new Themephi_Activity_Post_Type();