<?php

$hide_thumbnail = (bool) trim( get_option( 'st-data5', '' ) ); // 一覧のサムネイルを表示しない
$amp            = amp_is_amp() ? 'amp' : null;

$vars = array(
	'query'      => $query,
	'attributes' => $attributes,
);

if ( $hide_thumbnail ) {
	st_get_template_part( 'st-shortcode-itiran-thumbnail-off', $amp, $vars );
} else {
	st_get_template_part( 'st-shortcode-itiran-thumbnail-on', $amp, $vars );
}
