  <div class="home--slider">
    <a href="#" class="home--slider-panel" style="background-image:url(/wp-content/themes/reyn/assets/images/slider-image-1-1600.jpg)">
      <div class="home--slider-caption">
        <h1>Aloha for your everyday</h1>
        <p class="home--slider-cta inline-block">
          Shop our modern collection <i class="fa fa-angle-right"></i>
        </p>
      </div>
    </a>
    <a href="#" class="home--slider-panel" style="background-image:url(/wp-content/themes/reyn/assets/images/slider-image-1-1600.jpg)">
      <div class="home--slider-caption">
        <h1>Aloha for your everyday</h1>
        <p class="home--slider-cta inline-block">
          Shop our modern collection <i class="fa fa-angle-right"></i>
        </p>
      </div>
    </a>
    <a href="#" class="home--slider-panel" style="background-image:url(/wp-content/themes/reyn/assets/images/slider-image-1-1600.jpg)">
      <div class="home--slider-caption">
        <h1>Aloha for your everyday</h1>
        <p class="home--slider-cta inline-block">
          Shop our modern collection <i class="fa fa-angle-right"></i>
        </p>
      </div>
    </a>
  </div>
  <a class="cta-box--promo zoom-on-hover background-cover">
    <div class="cta-box--content">
      <span class="btn btn-block btn-large">Free Shipping on all orders over $50 <i class="fa fa-angle-right"></i></span>
    </div>
  </a>
  <div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="brand-text">New Arrivals</h2>
        <a class="btn btn-default line-through inline-block" href="#">Shop All Kids <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
     <div class="row">
      <div class="col-xs-12">
        <a style="background-image:url(/wp-content/themes/reyn/assets/images/product-wide.jpg" class="cta-box--product zoom-on-hover background-cover" href="#">
          <span class="cta-box--content cta-box--product-details">Caribbean Reef tee<hr /><em>$98</em></span>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="brand-text">Island Life</h2>
            <a class="btn btn-default line-through inline-block" href="#">Shop Women's &amp; Accessories <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <a style="background-image:url(/wp-content/themes/reyn/assets/images/product-home-womens.jpg" class="cta-box--product zoom-on-hover background-cover" href="#">
          <span class="cta-box--content cta-box--product-details">Caribbean Reef tee<hr /><em>$98</em></span>
        </a>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="brand-text">Surf's Up</h2>
            <a class="btn btn-default line-through inline-block" href="#">Shop Swim 2015 <span>&gt;</span></a>
          </div>
        </div>
        <a style="background-image:url(/wp-content/themes/reyn/assets/images/product-home-swim.jpg" class="cta-box--product zoom-on-hover background-cover" href="#">
          <span class="cta-box--content cta-box--product-details">Caribbean Reef tee<hr /><em>$98</em></span>
        </a>
      </div>
    </div>


  	<div class="row cta-box--three-up">
  		<div class="col-xs-4">
        <a href="#" class="cta-box--floral zoom-on-hover text-center background-cover">
          <div class="cta-box--content v-centered">
            <h4>Spread Aloha</h4>
            <hr />
            <span class="btn btn-block btn-default" href="#">Shop Gift Cards</span>
          </div>
        </a>
      </div>
      <div class="col-xs-4">
        <a href="#" class="cta-box--floral bg-alt zoom-on-hover text-center background-cover">
          <div class="cta-box--content v-centered">
            <h4>Spread Aloha</h4>
            <hr />
            <span class="btn btn-block btn-default" href="#">Shop Gift Cards</span>
          </div>
        </a>
      </div>
      <div class="col-xs-4">
        <a href="#" class="cta-box--floral bg-reversed zoom-on-hover text-center background-cover">
          <div class="cta-box--content v-centered">
            <h4>Spread Aloha</h4>
            <hr />
            <span class="btn btn-block btn-default" href="#">Shop Gift Cards</span>
          </div>
        </a>
      </div>
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
        <a class="btn btn-default line-through inline-block" href="#">See All Posts <i class="fa fa-angle-right"></i></a>
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
