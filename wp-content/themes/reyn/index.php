<div class="container">
	<?php get_template_part('templates/page', 'header'); ?>

	<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>

	<div class="row">
		<p class="entry-meta text-center text-uppercase blog-post--categories">
			<a class="entry-category" href="/blog">All</a>
			<?php $categories = get_categories(array('orderby' => 'count', 'order' => 'DESC', 'number' => 5, 'pad_counts' => 1, 'exclude' => '1')); 
			foreach ($categories as $cat){ 
				echo '<a class="entry-category" href="/category/'. $cat->slug . '">' . $cat->cat_name . '</a> ';
			} ?>
		</p>
	</div>

	<div class="row">
		<div class="col-sm-8 blog-post--featured">
			<?php
			$args = array(
				'posts_per_page' => 1,
				'post__in' => get_option( 'sticky_posts' ),
				'ignore_sticky_posts' => 1,
			); 
			$the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<a class="cta-box cta-blog--post" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('blog-grid-large', array('class' => "cta-blog--post-image")); ?>
					<div class="cta-blog--post-content">
						<div class="entry-meta text-uppercase">
							<time class="inline-block small" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
						</div>
						<h2 class="cta-blog--post-title"><strong><?php the_title(); ?></strong></h2>
						<hr />
						<span class="btn">Continue Reading <span>&gt;</span></span>
					</div>
				</a>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="col-sm-4 blog-post--sidebar text-center green-links">
			<div class="cta-box--floral zoom-on-hover text-center background-cover">
				<div class="cta-box--content">
					<h4>Spread Alohoa</h4>
					<hr />
					<span class="btn btn-block btn-default" href="#">Shop Gift Cards</span>
				</div>
			</div>
			<div class="cta-box--floral zoom-on-hover text-center background-cover">
				<div class="cta-box--content">
					<h4>Spread Alohoa</h4>
					<hr />
					<span class="btn btn-block btn-default">Shop Gift Cards</span>
				</div>
			</div>
			<div class="btn btn-default line-through inline-block">Press Contact</div>
			<p>Name Here<br />
			123.456.7890<br />
			<a href="#">name@reynspooner.com</a></p>
		</div>
	</div>

	<div class="row blog-post--container">
	<?php while (have_posts()) : the_post(); ?>
		
	  		<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	  	
	<?php endwhile; ?>
	</div>

	<?php the_posts_navigation(); ?>
</div>