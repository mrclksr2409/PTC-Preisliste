<?php
/*
Plugin Name: PTC Preisliste
Description: none
Version: 0.4.4
Author: Marcel Kaiser
Author URI: https://www.ptc-telematik.de/
*/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mrclksr2409/PTC-Preisliste',
	__FILE__,
	'PTCpreisliste'
);

/**
 * Advanced Custom Fields Plugin
 */

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', plugin_dir_path( __FILE__ ) . '/includes/acf/' );
define( 'MY_ACF_URL', plugin_dir_url( __FILE__ ) . '/includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}

/**
 * Post Type
 */
include_once('includes/post_type.php');

/**
 * Advanced Custom Fields
 */
include('includes/acf.php');

/**
 * Shortcode
 */
include('includes/shortcode.php');

?>
