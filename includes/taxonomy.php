<?php
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Laufzeiten.
	 */

	$labels = [
		"name" => __( "Laufzeiten", "custom-post-type-ui" ),
		"singular_name" => __( "Laufzeit", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Laufzeiten", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'laufzeit', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "laufzeit",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "laufzeit", [ "ptc-preise" ], $args );

	/**
	 * Taxonomy: Gruppen.
	 */

	$labels = [
		"name" => __( "Gruppen", "custom-post-type-ui" ),
		"singular_name" => __( "Gruppe", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Gruppen", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'gruppe', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "gruppe",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "gruppe", [ "ptc-preise" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
?>
