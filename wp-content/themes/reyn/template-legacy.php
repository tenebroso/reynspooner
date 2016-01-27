<?php
/**
 * Template Name: Legacy/Heritage
 */
?>

<div class="page-header--full-width page-legacy-bg">
    <!-- <h1 class="v-centered"><?php the_title(); ?></h1> -->
</div>

<main class="main page-legacy--container" role="main">

  <?php if( have_rows('legacy_row') ): while( have_rows('legacy_row') ): 
  	the_row(); 
  	$config = get_sub_field('config'); ?>

    	<?php if( $config == 'center' ) { ?>

			<div class="page-legacy--full-width full-width-legacy-bg">
				<a class="cta-box" href="<?php the_sub_field('call_to_action_link'); ?>">
					<div class="cta-box--floral zoom-on-hover">
						<div class="cta-box--content">
							<?php the_sub_field('content'); ?>
						</div>
					</div>
				</a>
			</div>
			
		<?php } elseif ($config == 'left' || $config == 'right') { ?>

			<?php $image = get_sub_field('image'); ?>
 
		        <div class="legacy-block">

		        	<?php if( $config == 'left' && $image ) { ?>
						<div class="legacy-block--container legacy-block--image-left">
							<img class="lazyload" src="<?php the_sub_field('image'); ?>">
						</div>
					<?php } ?>

						<?php if($image): ?>

							<div class="legacy-block--container">
								<div class="legacy-block--content">
									<?php the_sub_field('content'); ?>
								</div>
							</div>

						<?php else: ?>
							
							<div class="container">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1 text-center">
										<?php the_sub_field('content'); ?>
									</div>
								</div>
							</div>

						<?php endif; ?>

					<?php if( $config == 'right' ) { ?>
						<div class="legacy-block--container legacy-block--image-right">
							<img class="lazyload" src="<?php the_sub_field('image'); ?>">
						</div>
					<?php } ?>

				</div>

			<?php } else { ?>

					<div class="container">

					    <div class="row">

					    	<div class="col-md-12 text-center legacy-block--headline">
								<?php the_sub_field('headline'); ?>
					    	</div>

						</div>

					  </div>
			
			<?php } ?>
        
    <?php endwhile; ?>

<?php else: endif; ?>

<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<?php the_field('video_embed_code'); ?>
			</div>
		</div>

		<div class="row cta-box--two-up">
	  		<div class="col-xs-12 col-sm-6">
	        <a href="#" class="cta-box--floral zoom-on-hover text-center background-cover" style="height:200px;">
	          <div class="cta-box--content v-centered">
	            <?php the_field('cta_one_content'); ?>
	          </div>
	        </a>
	      </div>
	    <div class="col-xs-12 col-sm-6">
	        <a href="#" class="cta-box--floral zoom-on-hover text-center background-cover" style="height:200px;">
	          <div class="cta-box--content v-centered">
	            <?php the_field('cta_two_content'); ?>
	          </div>
	        </a>
	      </div>
	  </div>

	</div>
  
</main><!-- /.main -->
