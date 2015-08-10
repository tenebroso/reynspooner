<div class="entry-meta text-center text-uppercase">
	<time class="inline-block" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?> / </time>
	<span class="inline-block"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></span>
</div>
