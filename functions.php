<?php
/*
Plugin Name: PTC Preisliste
Description: none
Version: 0.3
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
 * Post Type
 */
include_once('includes/post_type.php');

/**
 * Taxonomy
 */

include_once('includes/taxonomy.php');

/**
 * Advanced Custom Fields
 */

include_once('includes/acf.php');



?>
