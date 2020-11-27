<?php
function cptui_register_my_cpts_ptc_preise() {

	/**
	 * Post Type: Preise.
	 */

	$labels = [
		"name" => __( "Preise", "custom-post-type-ui" ),
		"singular_name" => __( "Preis", "custom-post-type-ui" ),
		"menu_name" => __( "PTC Preisliste", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Preise", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_icon" => "dashicons-media-spreadsheet",
		"supports" => [ "title" ],
	];

	register_post_type( "ptc-preise", $args );
}

add_action( 'init', 'cptui_register_my_cpts_ptc_preise' );
?>
