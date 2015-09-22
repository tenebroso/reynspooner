<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
	<button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
</form>
