<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leon
 */
$sidebar_position = get_theme_mod( 'sidebar_position' );

if ( 'two-sidebars' !== $sidebar_position ) {
	return;
}

if ( ! is_active_sidebar( 'sidebar-secondary' ) ) {
	return;
} ?>

<?php do_action( 'leon_render_widget_area', 'sidebar-secondary' ); ?>
