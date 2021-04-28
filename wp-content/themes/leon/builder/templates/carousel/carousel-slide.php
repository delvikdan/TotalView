<?php
/**
 * Template part for displaying carousel item slides
 */
?>
<!-- Slide-->
<div class="swiper-slide">
	<?php echo $this->_var( 'image' ); ?>
	<header class="entry-content">
		<?php echo $this->_var( 'post_title' ); ?>
		<?php // echo $this->_var( 'category' ); ?>
		<?php echo $this->_var( 'excerpt' ); ?>
		
		
		<div class="post-meta post__cats"><?php first_post_tag_link(); ?></div>
		
		
	</header>
	<article class="entry-content">
		<div class="meta_wrap">
			<?php // echo $this->_var( 'author' ); ?>
			<!--<div class="count_wrap"><?php // echo $this->_var( 'count' ); ?></div>-->
			<div class="post-date">
				Дата публикации - <?= str_replace(
				  array('Январь','Февраль','Май','Июнь','Июль','Август','Сентябь','Октябрь','Ноябрь','Декабрь'),
				  array('Января','Февраля','Мая','Июня','Июля','Августа','Сентябя','Октября','Ноября','Декабря'),
				  get_the_date('j F Y')
				); ?>
			</div>

		<?php echo $this->_var( 'tag' ); ?>
		
	</div>
	</article>
	<footer class="entry-footer">
		<?php echo $this->_var( 'more_button' ); ?>
	</footer>
</div>
