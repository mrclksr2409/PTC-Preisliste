<?php
/*
Plugin Name: PTC Preisliste
Description: none
Version: 0.1
Author: Marcel Kaiser
Author URI: https://www.ptc-telematik.de/
*/

require 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = new Puc_v4p10_Vcs_PluginUpdateChecker(
    new Puc_v4p10_Vcs_GitLabApi('https://github.com/mrclksr2409/MK-Design-Bridge-Addons'),
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


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5faa72aaaec05',
	'title' => 'PTC Preis',
	'fields' => array(
		array(
			'key' => 'field_5faa782c2914a',
			'label' => 'Beschreibung',
			'name' => 'beschreibung',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'wp-typography' => 'content',
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5faa864eeebb3',
			'label' => 'Gruppe',
			'name' => 'gruppe',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'wp-typography' => 'none',
			'taxonomy' => 'gruppe',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'id',
			'multiple' => 0,
		),
		array(
			'key' => 'field_5fad04a9f9180',
			'label' => 'Abo',
			'name' => 'abo',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'wp-typography' => 'none',
			'layout' => 'table',
			'sub_fields' => array(
				array(
					'key' => 'field_5fad04b9f9181',
					'label' => '12 Monate',
					'name' => '12_monate',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array(
					'key' => 'field_5fad04d6f9182',
					'label' => '24 Monate',
					'name' => '24_monate',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array(
					'key' => 'field_5fad05497f9d2',
					'label' => '36 Monate',
					'name' => '36_monate',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array(
					'key' => 'field_5fad05517f9d3',
					'label' => '48 Monate',
					'name' => '48_monate',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array(
					'key' => 'field_5fad055a7f9d4',
					'label' => '60 Monate',
					'name' => '60_monate',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
			),
		),
		array(
			'key' => 'field_5fad37b8f944f',
			'label' => 'Kaufen',
			'name' => 'kaufen',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'wp-typography' => 'none',
			'layout' => 'table',
			'sub_fields' => array(
				array(
					'key' => 'field_5fad37e8f9450',
					'label' => 'monatlich',
					'name' => 'monatlich',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array(
					'key' => 'field_5fad05647f9d5',
					'label' => 'einmalig',
					'name' => 'einmalig',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'wp-typography' => 'none',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
			),
		),
		array(
			'key' => 'field_5fad11241979d',
			'label' => 'erforderliche Module',
			'name' => 'erforderliche_module',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'wp-typography' => 'none',
			'post_type' => array(
				0 => 'ptc-preise',
			),
			'taxonomy' => array(
				0 => 'gruppe:module',
			),
			'allow_null' => 1,
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
		),
		array(
			'key' => 'field_5fad11761979e',
			'label' => 'erforderliche Hardware',
			'name' => 'erforderliche_hardware',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'wp-typography' => 'none',
			'post_type' => array(
				0 => 'ptc-preise',
			),
			'taxonomy' => array(
				0 => 'gruppe:hardware',
			),
			'allow_null' => 1,
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'ptc-preise',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));

endif;

?>
