<?php
/**
 * Template Name: Community
 */
?>

<div class="blue-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<?php while (have_posts()) : the_post(); ?>
				  <?php get_template_part('templates/page', 'header'); ?>
				  <?php get_template_part('templates/content', 'page'); ?>
				<?php endwhile; ?>
				<?php echo do_shortcode('[dc_social_wall id="1292"]'); ?>
			</div>
		</div>
	</div>
</div>