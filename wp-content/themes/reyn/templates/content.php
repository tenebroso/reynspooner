<div class="col-xs-6 col-sm-4">
	<a class="cta-box cta-blog--post" href="<?php the_permalink(); ?>">
		<div class="entry-meta text-uppercase small">
			<?php 
				$category = get_the_category(); echo $category[0]->cat_name; ?>
		</div>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('blog-grid', array('class' => "cta-blog--post-image lazyload")); 
			} else { ?>
			<div style="width:360px;height:300px;background:rgba(0,0,0,.7);text-align:center;text-transform:uppercase;font-weight:bold;color:white;">
				<div class="v-centered">Needs Thumbnail</div>
			</div>
			<?php }?>
		<div class="cta-blog--post-content">
			<div class="entry-meta small text-uppercase">
				<time class="inline-block" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
			</div>
			<h2 class="cta-blog--post-title"><?php the_title(); ?></h2>
			<hr />
			<span class="btn">Continue Reading <i class="fa fa-angle-right"></i></span>
		</div>
	</a>
</div>