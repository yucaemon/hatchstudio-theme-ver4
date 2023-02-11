<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}

//ウィジェットでPHPを使えるようにする。
function widget_text_exec_php( $widget_text ) {
if( strpos( $widget_text, '<' . '?' ) !== false ) {
ob_start();
eval( '?>' . $widget_text );
$widget_text = ob_get_contents();
ob_end_clean();
}
return $widget_text;
}
add_filter( 'widget_text', 'widget_text_exec_php', 99 );
