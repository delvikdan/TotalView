<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leon
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $utility = leon_utility()->utility; ?>

	<header class="entry-header">
		<?php $cats_visible = leon_is_meta_visible( 'single_post_categories', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible' => $cats_visible,
				'type'    => 'category',
				'icon'    => '',
				'before'  => '<div class="post__cats">',
				'after'   => '</div>',
				'echo'    => true,
			) );
		?>

		<?php $utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => '<h1 %1$s>%4$s</h1>',
				'echo'  => true,
			) );
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<?php $author_visible = leon_is_meta_visible( 'single_post_author', 'single' ) ? 'true' : 'false'; ?>
				<?php $utility->meta_data->get_author( array(
						'visible' => $author_visible,
						'class'   => 'posted-by__author',
						'prefix'  => esc_html__( 'by ', 'leon' ),
						'html'    => '<div class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></div>',
						'echo'    => true,
					) );
				?>
				<div class="post__date">
				
				Дата публикации - <?= str_replace(
				  array('Январь','Февраль','Май','Июнь','Июль','Август','Сентябь','Октябрь','Ноябрь','Декабрь'),
				  array('Января','Февраля','Мая','Июня','Июля','Августа','Сентябя','Октября','Ноября','Декабря'),
				  get_the_date('j F Y')
				); ?>
				
					<?php /* $date_visible = leon_is_meta_visible( 'single_post_publish_date', 'single' ) ? 'true' : 'false';

						$utility->meta_data->get_date( array(
							'visible' => $date_visible,
							//'class'   => 'post__date-link',
							'icon'    => '',
							'echo'    => true,
						) ); */
					?>
				</div>

				<div class="post__comments">
					<?php $comment_visible = leon_is_meta_visible( 'single_post_comments', 'single' ) ? 'true' : 'false';

						$utility->meta_data->get_comment_count( array(
							'visible' => $comment_visible,
							'class'   => 'post__comments-link',
							'icon'    => '<i class="material-icons">chat_bubble_outline</i>',
							'echo'    => true,
						) );
					?>
				</div>

				
					<?php $tags_visible = leon_is_meta_visible( 'single_post_tags', 'single' ) ? 'true' : 'false';

					$utility->meta_data->get_terms( array(
							'visible'   => $tags_visible,
							'type'      => 'post_tag',
							'delimiter' => ', ',
							'icon'      => '',
							'before'    => '<div class="post__tags">Теги: ',
							'after'     => '</div>',
							'echo'      => true,
						) );
					?>
			
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php leon_ads_post_before_content() ?>

	<figure class="post-thumbnail">
		<?php $utility->media->get_image( array(
				'size'        => 'leon-thumb-l',
				'html'        => '<img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s">',
				'placeholder' => false,
				'echo'        => true,
			) );
		?>
	</figure><!-- .post-thumbnail -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links__title">' . esc_html__( 'Pages:', 'leon' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span class="page-links__item">',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'leon' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">


		<?php leon_share_buttons( 'single' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
