<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Leon
 */
?>

<div class="footer-container">
	<div <?php echo leon_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info-wrapper container">
			
		
			<?php if (is_page('EN')) : ?>
			<div class="footer-logo"><img src="/wp-content/uploads/2018/02/logoen_f-1.png" alt="Total View" class="footer-logo_img"></div>
			<div class="footer-copyright">	
				<div class="footer-block">
				<div class="footer-adress">
				  <img src="/wp-content/themes/leon/assets/images/adress-icon.png" alt=\"">
				  <span>125252, Moscow, Aviakonstruktora Mikoyana St., 12</span>
				</div>
				<div class="footer-phone">
				  <a href="tel:88003331549">8 (800) 333-15-49</a>
				</div>
				<div class="footer-email">
				  <a href="mailto:info@totalview.ru">info@totalview.ru</a>
				</div>
				</div>
				<div class="copyright">All rights reserved. © 2018 TotalView Media Agency</div>
			</div>	
			<?php else : ?>
			
						<?php
				leon_footer_logo();
				//leon_footer_copyright();
			?>
			
			
			<?php leon_footer_copyright();	?>
			
			<?php endif ; ?>
			

			<div class="site-info__bottom">
				<?php

					leon_footer_menu();
					leon_social_list( 'footer' );
				?>
			</div>

		</div><!-- .site-info -->
	</div>
</div><!-- .container -->
