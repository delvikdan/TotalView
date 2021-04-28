<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leon
 */

// Don't show top panel if all elements are disabled.
if ( ! leon_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo leon_get_container_classes( array( 'top-panel__wrap container' ), 'header' ); ?>>
		<div class="top-panel__info">
			<div class="top-panel__message">
				
				<?php if (is_page('EN')) : ?>
				<div class="info-block slogan">
				</div>
				<div class="info-block">
				<div class="top-adress">
				</div>
				<div class="top-link">
				  <a href="/contacts/"><span>Contacts</span></a>
				</div>
				<div class="top-lang">
				  <a href="/">RU</a> <span>EN</span>
				</div>
				</div>	
				
				<?php else : ?>
				
				<?php leon_top_message();	?>
				
				<?php endif ; ?>
				

			
			</div>
			
			
			<?php  leon_top_menu();	?>
				
			
		</div>
		<div class="top-panel__social">
			<?php leon_social_list( 'header' ); ?>
		</div>
	</div>
</div><!-- .top-panel -->
