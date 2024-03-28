<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */


defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<div class="product">
		<div class="product-single">
			<div class="product-img">
				<?php
					/**
					 * Hook: woocommerce_before_shop_loop_item.
					 *
					 * @hooked woocommerce_template_loop_product_link_open - 10
					 */
					do_action( 'woocommerce_before_shop_loop_item' );
					
					
					/**
					 * Hook: woocommerce_before_shop_loop_item_title.
					 *
					 * @hooked woocommerce_show_product_loop_sale_flash - 10
					 * @hooked woocommerce_template_loop_product_thumbnail - 10
					 */
					do_action( 'woocommerce_before_shop_loop_item_title' );
				?>
				<div class="product-action">
					<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
				</div>
			</div>
			<div class="product-content-outer">
				<div class="product-content">
					<h3><a href="<?php esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
					<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
				</div>
			</div>
		</div>
	</div>
</li>