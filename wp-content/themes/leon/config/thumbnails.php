<?php
/**
 * Thumbnails configuration.
 *
 * @package Leon
 */

add_action( 'after_setup_theme', 'leon_register_image_sizes', 5 );
function leon_register_image_sizes() {
	set_post_thumbnail_size( 370, 253, true );

	// Registers a new image sizes.
	add_image_size( 'leon-thumb-s', 150, 150, true );
	add_image_size( 'leon-thumb-m', 400, 400, true );
	add_image_size( 'leon-thumb-l', 1354, 645, true );
	add_image_size( 'leon-thumb-xl', 1920, 1080, true );
	add_image_size( 'leon-author-avatar', 512, 512, true );
	add_image_size( 'leon-thumb-183-133', 183, 133, true );

	add_image_size( 'leon-thumb-240-100', 240, 100, true );
	add_image_size( 'leon-thumb-560-350', 560, 350, true );
	add_image_size( 'leon-thumb-1920-880', 1920, 880, true );

	//projects categories
	add_image_size( 'leon-thumb-418-304', 418, 304, true );
	add_image_size( 'leon-thumb-836-608-fullscreen', 836, 608, true );

}
