<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php leon_get_page_preloader(); ?>
<div id="page" class="site">


	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'leon' ); ?></a>
	<header id="masthead" <?php leon_header_class(); ?> role="banner">
		<?php leon_ads_header() ?>
		<?php get_template_part( 'template-parts/header/top-panel' ); ?>
		<div class="header-container stupefy">
			<div <?php echo leon_get_container_classes( array( 'header-container_wrap container' ), 'header' ); ?>>
				<?php get_template_part( 'template-parts/header/layout', get_theme_mod( 'header_layout_type' ) ); ?>
			</div>
		</div><!-- .header-container -->
	</header><!-- #masthead -->

	<div id="content" <?php leon_content_class(); ?>>
		<?php if(is_front_page() or is_search() or is_404()) : ?>
		<?php else : ?>	
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<div class="container">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
				
			</div>
		</div>
		<?php endif; ?>	