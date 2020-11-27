<?php
// Create Shortcode preisliste
// Shortcode: [preisliste id="" field="title"]
function create_preisliste_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'id' => '',
			'field' => 'title',
		),
		$atts,
		'preisliste'
	);

	$id = $atts['id'];
	$field = $atts['field'];

  $post_fields = get_fields( $id );

  if($field == "title") {
    echo get_the_title( $id );
  }
  elseif ($field == "beschreibung") {
    echo $post_fields[ $field ];
  }
  elseif ($field == "gruppe") {
    echo $post_fields[ $field ];
  }
  elseif ($field == "12_monate" || $field == "24_monate" || $field == "36_monate" || $field == "48_monate" || $field == "60_monate") {
    echo $post_fields['abo'][ $field ];
  }
  elseif ($field == "monatlich" || $field == "einmalig") {
    echo $post_fields['kaufen'][ $field ];
  }

}
add_shortcode( 'preisliste', 'create_preisliste_shortcode' );
?>
