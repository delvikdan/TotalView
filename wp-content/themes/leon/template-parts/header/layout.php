<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leon
 */
?>
<div class="header-container__flex">
	<div class="site-branding">
		<?php if (is_page('EN')) : ?>
		<div class="site-logo"><img src="/wp-content/uploads/2018/02/logoen.png" alt="Total View" class="site-link__img" width="240" height="64"></div>
		
		<?php else : ?>

		
			<?php if (is_front_page()): ?>
				<div class="site-logo"><img src="/wp-content/uploads/2017/08/logo1.png" alt="Total View" class="site-link__img" width="240" height="64"></div>
			<?php else : ?>
			
				<?php leon_header_logo() ?>
			
			<?php endif ; ?>
		
		
		
		<?php endif ; ?>
		
		<?php leon_site_description(); ?>
	</div>

	<div class="header_caption">
		<?php if (is_page('EN')) : ?>
		<?php  leon_main_menu_en(); ?>
	
		<?php else : ?>
		<?php leon_main_menu(); ?>
		<?php endif ; ?>
		<?php leon_top_search( '<div class="header__search">%s</div>' ); ?>
	</div>
</div>
