<?php
/**
 * Menus configuration.
 *
 * @package Leon
 */

add_action( 'after_setup_theme', 'leon_register_menus', 5 );
function leon_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'leon' ),
		'main'   => esc_html__( 'Main', 'leon' ),
		'footer' => esc_html__( 'Footer', 'leon' ),
		'social' => esc_html__( 'Social', 'leon' ),
	) );
}
