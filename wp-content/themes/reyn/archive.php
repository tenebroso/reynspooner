<div class="container">
	<?php get_template_part('templates/page', 'header'); ?>

	<div class="row">
		<p class="entry-meta text-center text-uppercase blog-post--categories">
			<a class="entry-category" href="/blog">All</a>
			<?php $categories = get_categories(array('orderby' => 'name', 'include' => array('77','76','1','73','74','72','77',), 'hide_empty' => 0)); 
			foreach ($categories as $cat){ 
				echo '<a class="entry-category" href="/category/'. $cat->slug . '">' . $cat->cat_name . '</a> ';
			} ?>
		</p>
	</div>



	<div class="row blog-post--container">
	<?php if(is_author()){ ?>
	<?php
		$author = get_the_author_meta('ID');
		echo do_shortcode('[ajax_load_more preloaded="true" preloaded_amount="6" post_type="post" posts_per_page="6" pause="true" transition="fade" button_label="Load More >" author="'.$author.'"]');
	?>
	<?php } ?>
	<?php if(is_category()){ ?>
	
		<?php
			$cat = get_category( get_query_var( 'cat' ) );
			$category = $cat->slug;
		?>
	    <?php
			echo do_shortcode('[ajax_load_more preloaded="true" preloaded_amount="6" posts_per_page="6" pause="true" transition="fade" button_label="Load More >" category="'.$category.'"]');
		?>
	<?php } ?>	
	<?php if(is_tag()){ ?>
	    <?php
			$tag = get_query_var('tag'); 
			echo do_shortcode('[ajax_load_more preloaded="true" preloaded_amount="6" post_type="post" posts_per_page="6" pause="true" transition="fade" button_label="Load More >" tag="'.$tag.'"]');
		?>
	<?php } ?>
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