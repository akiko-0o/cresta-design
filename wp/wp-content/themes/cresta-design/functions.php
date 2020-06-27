<?php
add_theme_support('post-thumbnails');

function cptui_register_my_cpts_works() {

	/**
	 * Post Type: ワークス.
	 */

	$labels = [
		"name" => __( "ワークス", "web development Services" ),
		"singular_name" => __( "ワークス", "web development Services" ),
		"menu_name" => __( "WORKS", "web development Services" ),
		"items_list" => __( "一覧", "web development Services" ),
	];

	$args = [
		"label" => __( "ワークス", "web development Services" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "works", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
	];

	register_post_type( "works", $args );
}

add_action( 'init', 'cptui_register_my_cpts_works' );
add_theme_support('post-thumbnails');