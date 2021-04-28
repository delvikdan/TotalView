<?php
/**
 * The template for displaying author bio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Leon
 * @subpackage widgets
 */
?>
<div class="post-author-bio">
	<div class="post-author__holder clear">
		<h2 class="post-author__title"><?php
			printf( esc_html__( 'Written by %s', 'leon' ), leon_get_the_author_posts_link() );
		?></h2>
		<div class="post-author__avatar"><?php
			echo get_avatar( get_the_author_meta( 'user_email' ), 140, '', esc_attr( get_the_author_meta( 'nickname' ) ) );
		?></div>

		<div class="post-author__content"><?php
			echo get_the_author_meta( 'description' );
		?></div>
	</div>
</div>
