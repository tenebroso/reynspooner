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

<?php else: ?>

	<!-- <div class="legacy-block">

		
		<div class="legacy-block--container legacy-block--image-left">
			<img class="lazyload" src="/wp-content/uploads/legacy-image-left-kloth.jpg">
		</div>
		<div class="legacy-block--container">
			<div class="legacy-block--content text-right">
				<h3>1964 Spooner Kloth</h3>
				<hr />
				<p>Tristique quis integer pellentesque in eu dapibus sit platea, velit. Augue augue parturient lundium! Rhoncus sed non, non scelerisque ac mauris? Porta. Sed magna! Scelerisque augue est. Vel aliquam, adipiscing. Pid aenean turpis placerat, dis magna? Ultricies in pid placerat porta enim lorem scelerisque rhoncus hac vel nec vel mattis parturient, dictumst, sociis pulvinar, hac in?</p>

				<p>Platea, duis, turpis arcu, pid a mattis porta odio, in egestas integer odio enim. Est adipiscing vel dignissim in urna, et nisi tincidunt nisi, nascetur tincidunt scelerisque pulvinar pid turpis dolor et scelerisque pulvinar turpis ultrices etiam mattis odio mauris! Placerat porttitor ac augue mauris quis vut vut pid nec dolor dictumst, purus sed, nunc, pulvinar placerat aenean et in nec eu odio lorem.</p>
			</div>
		</div>
	</div>

	<div class="page-legacy--full-width full-width-legacy-bg">
		<a class="cta-box" href="#">
			<div class="cta-box--floral zoom-on-hover">
				<div class="cta-box--content">
					<h3>Still beloved, <br />still classically Hawaiian, <br />still full of the Aloha spirit.</h3>
					<hr />
				</div>
			</div>
		</a>
	</div>

	<div class="legacy-block">

		
		
		<div class="legacy-block--container">
			<div class="legacy-block--content text-right">
				<h3>1964 Spooner Kloth</h3>
				<hr />
				<p>Tristique quis integer pellentesque in eu dapibus sit platea, velit. Augue augue parturient lundium! Rhoncus sed non, non scelerisque ac mauris? Porta. Sed magna! Scelerisque augue est. Vel aliquam, adipiscing. Pid aenean turpis placerat, dis magna? Ultricies in pid placerat porta enim lorem scelerisque rhoncus hac vel nec vel mattis parturient, dictumst, sociis pulvinar, hac in?</p>

				<p>Platea, duis, turpis arcu, pid a mattis porta odio, in egestas integer odio enim. Est adipiscing vel dignissim in urna, et nisi tincidunt nisi, nascetur tincidunt scelerisque pulvinar pid turpis dolor et scelerisque pulvinar turpis ultrices etiam mattis odio mauris! Placerat porttitor ac augue mauris quis vut vut pid nec dolor dictumst, purus sed, nunc, pulvinar placerat aenean et in nec eu odio lorem.</p>
			</div>
		</div>

		<div class="legacy-block--container legacy-block--image-right">
			<img class="lazyload" src="/wp-content/uploads/legacy-image-left-kloth.jpg">
		</div>


	</div> -->
 
<?php endif; ?>

<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<iframe src="https://player.vimeo.com/video/30886572?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>

		<div class="row cta-box--two-up">
	  		<div class="col-xs-12 col-sm-6">
	        <a href="#" class="cta-box--floral zoom-on-hover text-center background-cover" style="height:200px;">
	          <div class="cta-box--content v-centered">
	            <h4>Spread Aloha</h4>
	            <hr />
	            <span class="btn btn-block btn-default" href="#">Shop Gift Cards</span>
	          </div>
	        </a>
	      </div>
	    <div class="col-xs-12 col-sm-6">
	        <a href="#" class="cta-box--floral zoom-on-hover text-center background-cover" style="height:200px;">
	          <div class="cta-box--content v-centered">
	            <h4>Spread Aloha</h4>
	            <hr />
	            <span class="btn btn-block btn-default" href="#">Shop Gift Cards</span>
	          </div>
	        </a>
	      </div>
	  </div>

	</div>
  
</main><!-- /.main -->
