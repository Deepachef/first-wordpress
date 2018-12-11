<?php 
function register_my_menus() {
register_nav_menus( array(
	'header' => 'header menu'
) );
}
add_action( 'init', 'register_my_menus' );
?>