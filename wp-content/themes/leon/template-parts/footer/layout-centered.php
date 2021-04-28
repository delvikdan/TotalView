<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Leon
 */

?>

<div class="footer-container">
	<div <?php echo leon_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info-wrapper container _block">

			<?php
				leon_footer_logo();
				leon_footer_menu();
				leon_footer_copyright();
				leon_social_list( 'footer' );
			?>
		</div><!-- .site-info -->
	</div>
</div><!-- .container -->
