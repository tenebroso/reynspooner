<div class="wrap container product-category" role="document">
  <div class="content row">
    <div class="row">

      <div class="col-sm-3 product-category--sidebar">
        <a class="product-category--breadcrumbs" href="#"><i class="fa fa-angle-left"></i> Return to All</a>
        <h3>Men's</h3>
        <hr />
        <ul class="product-category--sidebar-nav">
          <li><a href="#">Newest Arrivals</a></li>
          <li><a href="#">Limited Edition</a></li>
          <li><a href="#">Shirts</a></li>
          <li><a href="#">Pants</a></li>
          <li><a href="#">Shorts</a></li>
          <li><a href="#">Swimwear</a></li>
          <li><a href="#">Outerwear</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">On Sale</a></li>
        </ul>
        <div class="product-category--collapsible">
          <?php get_template_part('templates/product/grid','sidebar'); ?>
        </div>
      </div>

      <div class="col-sm-9 product-category--content">
        <div class="product-category--content--intro">
            <h3>Classic &amp; Comfortable</h3>
            <hr />
            <p>Unconventional individual seeking quality experiences with a sense of adventure and a sense of responsibility. It describes a Reyn Spooner piece and the man who picks it. A classic Aloha shirt in the office or out on the town, a Reyn Spooner swimsuit tossed in for down time during a business trip or good times with friends and family. Make aloha your own.</p>
        </div>

        <div class="row product-category--products">
          <?php for ($x = 0; $x <= 11; $x++) { get_template_part('templates/product/grid','product'); } ?>
        </div>
      </div>

    </div>
  </div><!-- /.content -->
</div><!-- /.wrap -->