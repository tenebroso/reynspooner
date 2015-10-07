<?php
/**
 * Template Name: Shipping
 */
?>

<div class="wrap container" role="document">
      <div class="content row">
      	<div class="col-sm-12">
	        <main class="main" role="main">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/page', 'header'); ?>
					<hr class="shipping-header" />
					<div class="row">
						
						<div class="col-sm-6">
								<?php if( have_rows('us_shipping') ): ?>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Order Total</th>
											<th>Shipping Cost</th>
										</tr>
									</thead>
									<tbody>
										<?php while ( have_rows('us_shipping') ) : the_row(); ?>
											<tr>
												<td><?php the_sub_field('order_total'); ?></td>
												<td><?php the_sub_field('shipping_cost'); ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							<?php else : endif; ?>
							<?php the_field('us_shipping_description'); ?>
						</div>

						<div class="col-sm-6">

								<?php if( have_rows('international_shipping') ): ?>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Order Total</th>
											<th>Shipping Cost</th>
										</tr>
									</thead>
									<tbody>
										<?php while ( have_rows('international_shipping') ) : the_row(); ?>
											<tr>
												<td><?php the_sub_field('order_total'); ?></td>
												<td><?php the_sub_field('shipping_cost'); ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							<?php else : endif; ?>
							<?php the_field('international_shipping_description'); ?>
						</div>

					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<a class="btn shipping-button" href="/contact-us/">Questions? Contact Us <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				<?php endwhile; ?>
	    	</main><!-- /.main -->
	  	</div>
  </div><!-- /.content -->
</div><!-- /.wrap -->
