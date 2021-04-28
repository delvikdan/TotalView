<?php
/**
 * Template part for carousel module displaying
 */

$super_title = $this->_var( 'super_title' );
$title = $this->_var( 'title' );
$sub_title = $this->_var( 'sub_title' );
$divider_hide_on_mobile = $this->_var( 'divider_hide_on_mobile' );
$navigate_button = $this->_var( 'navigate_button' );
$children = tm_builder_tools()->parse_children( $this->shortcode_content );

$wrapper_atts = $this->prepare_atts( array(
	'id' => $this->_var( 'module_id' ),
	'class' => 'tm_pb_brands_showcase_module__wrapper ' . $this->_var( 'module_class' ),
) );

$swiper_atts = $this->prepare_atts( array(
	'data-settings' => $this->_var( 'carousel_settings' ),
	'class' => 'tm_pb_swiper',
), true );

?>
<?php if ( ! empty( $children ) ) : ?>
				
	<div id="carousel" class="owl-carousel owl-theme">
		
					<?php foreach( $children as $brand ) : ?>
						<?php $this->_var( 'brand', $this->prepare_brand( $brand ) ); ?>
						<?php echo $this->get_template_part( $this->_var( 'template' ) ); ?>
					<?php endforeach; ?>
	</div>

<?php endif; ?>
