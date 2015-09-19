  <div class="home--slider">

  <?php if( have_rows('slider') ): while( have_rows('slider') ): the_row(); ?>
    <a href="<?php the_sub_field('link'); ?>" class="home--slider-panel">
      <div class="home--slider-caption">
        <h1><?php the_sub_field('title'); ?></h1>
        <p class="home--slider-cta inline-block">
          <?php the_sub_field('content'); ?>
        </p>
      </div>
      <img class="home--slider-bg" src="<?php the_sub_field('image'); ?>">
    </a>
  <?php endwhile; endif; ?>

  </div>
  
  <a class="cta-box--promo zoom-on-hover background-cover" href="<?php the_field('promo_stripe_link'); ?>">
    <div class="cta-box--content">
      <?php the_field('promo_stripe'); ?>
    </div>
  </a>

  <div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <?php the_field('featured_product_promo_heading'); ?>
      </div>
    </div>
     <div class="row">
      <div class="col-xs-12">
        <a style="background-image:url(<?php the_field('featured_product_center_image'); ?>);" class="cta-box--product zoom-on-hover background-cover" href="<?php the_field('featured_product_center_link'); ?>">
          <?php the_field('featured_product_center_text'); ?>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 text-center">
            <?php the_field('left_column_product_heading'); ?>
          </div>
        </div>
        <a style="background-image:url(<?php the_field('left_column_product_image'); ?>);" class="cta-box--product zoom-on-hover background-cover" href="<?php the_field('left_column_product_link'); ?>">
          <?php the_field('left_column_product_text'); ?>
        </a>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 text-center">
            <?php the_field('right_column_product_heading'); ?>
          </div>
        </div>
        <a style="background-image:url(<?php the_field('right_column_product_image'); ?>);" class="cta-box--product zoom-on-hover background-cover" href="<?php the_field('right_column_product_link'); ?>">
          <?php the_field('right_column_product_text'); ?>
        </a>
      </div>
    </div>


  	<div class="row cta-box--three-up">

      <?php if( have_rows('call_to_action_buttons') ): while( have_rows('call_to_action_buttons') ): the_row(); ?>

        		<div class="col-sm-4">
              <a href="<?php the_sub_field('button_link'); ?>" class="cta-box--floral zoom-on-hover text-center background-cover">
                <div class="cta-box--content v-centered">
                  <?php the_sub_field('button_content'); ?>
                </div>
              </a>
            </div>

      <?php endwhile; endif; ?>

    </div>


    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>#ReynSpooner</h2>
      </div>
    </div>

</div><!-- .container -->

<div class="instagram-container">
  <div id="instafeed" data-chocolat-title="Reyn Spooner Instagram"></div>
  
</div>

<?php get_template_part('templates/modules/social','stripe'); ?>

<div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>From Our Blog</h2>
        <a class="btn btn-default line-through inline-block" href="/blog/">See All Posts <i class="fa fa-angle-right"></i></a>
      </div>

<?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
      'ignore_sticky_posts' => true
    );
    $blog = new WP_Query($args);
    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>

       <div class="col-sm-6">
        <a class="cta-box cta-blog--post" href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail', array('class' => "cta-blog--post-image")); ?>
          <div class="cta-blog--post-content">
            <h2 class="cta-blog--post-title"><strong><?php echo wp_trim_words( get_the_title(), 10, '...' );?></strong></h2>
              <?php the_excerpt(); ?>
          </div>
        </a>
      </div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</div>
