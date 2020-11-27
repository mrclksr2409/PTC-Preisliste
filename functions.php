<?php
/*
Plugin Name: PTC Preisliste
Description: none
Version: 0.2
Author: Marcel Kaiser
Author URI: https://www.ptc-telematik.de/
*/

require 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = new Puc_v4p10_Vcs_PluginUpdateChecker(
    new Puc_v4p10_Vcs_GitLabApi('https://github.com/mrclksr2409/PTC-Preisliste'),
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
