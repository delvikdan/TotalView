<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leon
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'leon' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf(
			 '%1$s <a href="%3$s">%2$s</a>.',
			 esc_html__('Ready to publish your first post?', 'leon'),
			 esc_html__('Get started here', 'leon'),
			 esc_url( admin_url( 'post-new.php' ) )
		 ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Не удалось найти страницы, содержащие слова из Вашего запроса. Попробуйте использовать другие ключевые слова.', 'leon' ); ?></p>

			<?php get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Не удалось найти страницы, которые Вы ищете. Воспользуйтесь поиском.', 'leon' ); ?></p>

			<?php get_search_form();

		endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
