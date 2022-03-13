<?php

function customtheme() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'customtheme' );

/* Register Menu Location in functions.php */
register_nav_menus(['primary' => __('Primary Menu'),
				'footer'  => __('Footer Menu')])

?>