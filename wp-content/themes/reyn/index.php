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
			<?php $categories = get_categories(array('orderby' => 'name', 'include' => array('77','76','1','73','74','72','77',), 'hide_empty' => 0)); 
			foreach ($categories as $cat){ 
				echo '<a class="entry-category" href="/category/'. $cat->slug . '">' . $cat->cat_name . '</a> ';
			} ?>
		</p>
	</div>

	<div class="row">
		<div class="col-sm-8 blog-post--featured">
			<?php
			wp_reset_query(); $args = array(
				'posts_per_page' => 1,
				'category__in' => array('78')
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
						<div class="pull-right entry-meta text-uppercase small category-name">
							<?php 
								$category = get_the_category(); echo $category[0]->cat_name; ?>
						</div>
						<span class="btn">Continue Reading <span>&gt;</span></span>

					</div>
				</a>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="col-sm-4 blog-post--sidebar text-center green-links">
			<div class="cta-box--floral text-center background-cover">
				<div class="cta-box--content">
					<h4>Let's Be Social</h4>
					<div class="social-icons">
						<a class="fa fa-facebook" href="https://www.facebook.com/reynspooner"></a>
						<a class="fa fa-pinterest" href="https://www.pinterest.com/reynspooner/"></a>
						<a class="fa fa-twitter" href="http://twitter.com/reynspooner"></a>
						<a class="fa fa-instagram" href="http://instagram.com/reynspooner"></a>
					</div>
				</div>
			</div>
			<div class="cta-box--floral bg-alt text-center background-cover">
				<div class="cta-box--content">
					<h4>GET THE NEWS &amp; STORIES</h4>
					<form data-id="embedded_signup:form" class="ctct-custom-form Form inline-block" name="embedded_signup" method="POST" action="//visitor2.constantcontact.com/api/signup">
						<input data-id="ca:input" type="hidden" name="ca" value="8aab1659-6063-4746-a194-95bd0ccf17be">
						<input data-id="source:input" type="hidden" name="source" value="EFD">
						<input data-id="required:input" type="hidden" name="required" value="list,email">
						<input data-id="url:input" type="hidden" name="url" value="">
						<input class="footer-signup--input" data-id="Email Address:input" type="text" name="email" placeholder="Enter your email here to receive our blogs" value="" maxlength="80">
						<input class="hidden" data-id="First Name:input" type="text" name="first_name" value="" maxlength="50">
						<input class="hidden" data-id="Lists:input" type="checkbox" name="list_0" value="8" checked>
						<input class="hidden" data-id="Lists:input" type="checkbox" name="list_1" value="1" checked>

						<button type="submit" class="footer-signup--button Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up <span>&gt;</span></button>
					</form>
				</div>
			</div>
			<div class="btn btn-default line-through inline-block">Press Contact</div>
			<?php the_field('press_contact','1296'); ?>
		</div>
	</div>

	<div class="row blog-post--container">
		<?php echo do_shortcode('[ajax_load_more preloaded="true" preloaded_amount="6" post_type="post" category__not_in="78" posts_per_page="6" pause="true" transition="fade" button_label="Load More >"]'); ?>
	</div>

	<hr class="category-divider" />

	<div class="row">
		<p class="entry-meta text-center text-uppercase blog-post--categories">
			<a class="entry-category" href="/blog">All</a>
			<?php 
			foreach ($categories as $cat){ 
				echo '<a class="entry-category" href="/category/'. $cat->slug . '">' . $cat->cat_name . '</a> ';
			} ?>
		</p>
	</div>

</div>