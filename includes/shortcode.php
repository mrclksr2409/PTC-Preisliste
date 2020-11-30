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
    return get_the_title( $id );
  }
  elseif ($field == "beschreibung") {
    return "<p>" . $post_fields[ $field ] . "</p>";
  }
  elseif ($field == "gruppe") {
    return $post_fields[ $field ];
  }
  elseif ($field == "12_monate" || $field == "24_monate" || $field == "36_monate" || $field == "48_monate" || $field == "60_monate") {
    if($mwst == "inkl") {
      return money_format('%.2n', $post_fields['abo'][ $field ] * 1.16);
    }
    else {
      return money_format('%.2n', $post_fields['abo'][ $field ]);
    }
  }
  elseif ($field == "monatlich" || $field == "einmalig") {
    if($mwst == "inkl") {
      return money_format('%.2n', $post_fields['kaufen'][ $field ] * 1.16);
    }
    else {
      return money_format('%.2n', $post_fields['kaufen'][ $field ]);
    }
  }
  else {
    return "Es konnten keine Informationen gefunden werden!";
  }

}
add_shortcode( 'preisliste', 'create_preisliste_shortcode' );
?>
