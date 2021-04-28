<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Leon
 */
?>

<div class="footer-area-wrap">
	<div class="container">
		<?php do_action( 'leon_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo leon_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info-wrapper container">

			<?php
				leon_footer_copyright();
				leon_footer_menu();
			?>

			<div class="site-info__bottom">
				<?php
					leon_footer_logo();
					leon_social_list( 'footer' );
				?>
			</div>

		</div><!-- .site-info -->
	</div>
</div><!-- .container -->
