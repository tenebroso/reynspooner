<?php 
$api_url = 'https://f2bd2776d19555ef6c5198ebe8b087c2:9aa22522861b0c882c5196bdf5929852@reyn-spooner-com.myshopify.com';
$shop_url = 'http://reyn-spooner.myshopify.com';
$collection_id = '30491101';

// Create the API URL for the Shopify collect
$collects_url = $api_url . '/admin/collects.json?collection_id=' . $collection_id . '&limit=4';

// Use a transient for the feed URL (performance boost)
if ( false === ( $collects_content = get_transient( 'shopify_product_feed' ) ) ) {
    $collects_content = @file_get_contents( $collects_url );
 
    // Put the results in a transient. Expire after 4 hours.
    set_transient( 'shopify_product_feed', $collects_content, 1 * HOUR_IN_SECONDS );
}
 
// Decode the JSON in the file
$collects = json_decode( $collects_content, true );

$variant_inventory = 0;
 
// Loop through products in the collection
for ( $prod = 0; $prod < 3; $prod++ ) {
 
    // Get the product ID for the current product
    $product_id = $collects['collects'][$prod]['product_id'];
    // Get the product data from the API (using the ID)
	$product_url = $api_url . '/admin/products/' . $product_id . '.json?fields=images,title,variants,handle';
	 
	// Decode the JSON for the product data
	$product_json = json_decode( @file_get_contents( $product_url ), true );

	// Set some variables for product data
	$current_product = $product_json['product'];
	$product_handle = $current_product['handle'];
	$product_title = $current_product['title'];

	// Get the product image and modify the file name to get the large size thumbnail
	$image_src_parts = pathinfo( $current_product['images'][0]['src'] );
	$product_image_src = $image_src_parts['dirname'] . '/' . $image_src_parts['filename'] . '_large.' . $image_src_parts['extension'];

	// Get product variant information, including inventory and pricing
	$variants = $current_product['variants'];
	$variant_count = count( $variants );
	 
	$variant_price = 0;
	$variant_prices = array();
	if ( $variant_count > 1 ) :
	    for ( $v = 0; $v < $variant_count; $v++ ) {
	        $variant_inventory += $variants[$v]['inventory_quantity'];
	        $variant_prices[] = $variants[$v]['price'];
	    }
	    $price_min = min( $variant_prices );
	    $price_max = max( $variant_prices );
	else :
	    $variant_price = $variants[0]['price'];
	    $variant_inventory = $variants[0]['inventory_quantity'];
	endif;
	 
	?>

<div class="product-feed-item">
    <a href="<?php echo $shop_url; ?>/products/<?php echo $product_handle; ?>">
        <img src="<?php echo $product_image_src; ?>" alt="<?php echo $product_title; ?>"/>
        <h3><?php echo $product_title; ?></h3>
        <?php if ( $variant_inventory > 0 ) : ?>
            <?php if ( $variant_price > 0 ) : ?>
                <span class="price small"><?php if ( $variant_price > 0 ) : ?>$<?php echo $variant_price; ?><?php else : ?>FREE<?php endif; ?></span>
            <?php elseif ( ( $price_min > 0 ) && ( $price_max > 0 ) ) : ?>
                <span class="price small">$<?php echo $price_min; ?> - $<?php echo $price_max; ?></span>
            <?php endif; ?>
        <?php else : ?>
            <span class="sold-out">OUT OF STOCK</span>
        <?php endif; ?>
    </a>
</div>

<?php }; 

while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
