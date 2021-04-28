<?php
/**
 * The template for displaying search form.
 *
 * @package Leon
 */
?>
<div class="search-form__toggle"></div>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Ищем:', 'label', 'leon' ) ?></span>
		<input type="search" class="search-form__field"
			placeholder="<?php echo esc_attr_x( '', 'placeholder', 'leon' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Ищем:', 'label', 'leon' ) ?>" />
	</label>
	<button type="submit" class="search-form__submit btn btn-primary"><i class="material-icons">search</i></button>
</form>
