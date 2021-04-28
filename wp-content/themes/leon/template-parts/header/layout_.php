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
		<?php echo '<img src="/wp-content/uploads/2018/02/logoen.png" alt="Total View" class="site-link__img">' ?>
		<?php else : ?>
		<?php leon_header_logo() ?>
		
		<?php endif ; ?>
		
		<?php leon_site_description(); ?>

	</div>


</div>
