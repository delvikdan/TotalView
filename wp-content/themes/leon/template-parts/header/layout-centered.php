<?php
/**
 * Template part for centered Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leon
 */
?>

<div class="header-container__flex">
	<div class="site-branding">
		<?php leon_header_logo() ?>
		<?php leon_site_description(); ?>
	</div>
	<div class="header_caption">
		<?php leon_main_menu(); ?>
		<?php leon_top_search( '<div class="header__search">%s</div>' ); ?>
	</div>
</div>
