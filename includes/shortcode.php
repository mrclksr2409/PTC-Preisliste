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
    get_the_title( $id );
  }
  elseif ($field == "beschreibung") {
    echo $post_fields['beschreibung'];
  }

}
add_shortcode( 'preisliste', 'create_preisliste_shortcode' );
?>
