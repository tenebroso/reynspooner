<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<?php get_template_part('templates/content-single', get_post_type()); ?>
		</div>
	</div>
	<div class="row">
		
	<?php 
	wp_reset_postdata();$args = array(
		'posts_per_page' => 3,
		'ignore_sticky_posts' => true
	); 
	$the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 

	       <div class="col-sm-4">
	        <a class="cta-box cta-blog--post" href="<?php the_permalink(); ?>">
	        	<div class="entry-meta text-uppercase">
	        		<?php 
	        			$category = get_the_category(); echo $category[0]->cat_name; ?>
	        	</div>
	          <img class="cta-blog--post-image" src="http://placehold.it/360x170">
	          <div class="cta-blog--post-content">
	          	<div class="entry-meta text-uppercase">
					<time class="inline-block" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
					
				</div>
	            <h2 class="cta-blog--post-title"><strong><?php the_title(); ?></strong></h2>
	            <hr />
	            <span class="btn">Continue Reading <span>&gt;</span></span>
	          </div>
	        </a>
	      </div>

	<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div>


