<?php
// Create Shortcode preisliste
// Shortcode: [preisliste id="" field="title"]
function create_preisliste_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'id' => '',
			'field' => 'title',
      'mwst' => 'zzgl',
		),
		$atts,
		'preisliste'
	);

	$id = $atts['id'];
	$field = $atts['field'];
  $mwst = $atts['mwst'];

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
    $number = floatval(str_replace(',', '.', str_replace('.', '', $post_fields['abo'][ $field ])));

    if($mwst == "inkl") {
      echo $number * 1.16;
    }
    else {
      echo $number;
    }
  }
  elseif ($field == "monatlich" || $field == "einmalig") {
    $number = floatval(str_replace(',', '.', str_replace('.', '', $post_fields['kaufen'][ $field ])));

    if($mwst == "inkl") {
      echo $number * 1.16;
    }
    else {
      echo $number;
    }
  }
  else {
    echo "Es konnten keine Informationen gefunden werden!";
  }

}
add_shortcode( 'preisliste', 'create_preisliste_shortcode' );
?>
