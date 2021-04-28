<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Leon
 */
?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ошибка 404.', 'leon' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<h1><?php esc_html_e( 'Страница не найдена.', 'leon' ); ?></h1>
		<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Перейти на главную страницу', 'leon' ); ?></a></p>
		<div class="caption">
				<p><?php esc_html_e( 'К сожалению, страница, которую Вы ищете, не найдена. Воспользуйтесь поиском', 'leon' ); ?></p>
				<?php get_search_form(); ?>
	</div>
	</div><!-- .page-content -->
</section><!-- .error-404 -->
