<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
    </div>
    </div>
	<section class="related products">

        <div class="container-fluid ">
            <h2><?php esc_html_e( 'outros produtos do seu interesse', 'woocommerce' ); ?></h2>
            <hr />
			<?php woocommerce_product_loop_start(); ?>
            <div id="produtosRelacionado" class="swiper-container">

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-wrapper">
					<?php foreach ( $related_products as $related_product ) : ?>
                        <div class="swiper-slide">
							<?php
							$post_object = get_post( $related_product->get_id() );

							setup_postdata( $GLOBALS['post'] =& $post_object );

							wc_get_template_part( 'content', 'product' ); ?>
                        </div>
					<?php endforeach; ?>

					<?php woocommerce_product_loop_end(); ?>
                </div>
            </div>

    </section>
<style>
    .woocommerce ul.products li.product a img{width: 80%}

</style>
<?php endif;

wp_reset_postdata();
