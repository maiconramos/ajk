<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="banner-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="title-category-product">
					<?php
					global $product;
					$perma_cat = get_post_meta($post->ID , '_category_permalink', true);
					if ( $perma_cat != null ) {
						$cat_id = $perma_cat['category'];
						$category = get_category($cat_id);
					} else {
						$categories = get_the_category();
						$category = $categories[0];
					}
					$category_link = get_category_link($category);
					$category_name = $category->name;
					?>
					<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<h3 class="posted_in">' . _n( '', '', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</h3>' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var categoria = jQuery(".title-category-product a").text();
    var banner = jQuery(".banner-product");
    if(categoria === "Voltímetro"){
        jQuery(banner).css("background-image", "url('<?php echo get_template_directory_uri();?>/assets/img/categoria-voltimetro.jpg')");
    } else if(categoria === "Iluminação"){
        jQuery(banner).css("background-image", "url('<?php echo get_template_directory_uri();?>/assets/img/categoria-iluminacao.jpg')");
    } else if(categoria === "Conversores"){
        jQuery(banner).css("background-image", "url('<?php echo get_template_directory_uri();?>/assets/img/categoria-conversores.jpg')");
    }


</script>
<div class="container">
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
    </div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

