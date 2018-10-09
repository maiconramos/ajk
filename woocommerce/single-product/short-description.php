<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}
the_title( '<h1 class="product_title entry-title">', '</h1>' );
?>

<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
	<?php $manual = get_post_meta( get_the_ID(), 'manual', true );   ?>
    <?php if ( $manual > "   ") { ?>
    <a class="btn-manual" href="<?php echo $manual; ?>" target="_blank" title="Baixar Manual"> Baixe o Manual</a>
	<?php } ?>
    <div class="container-selo">
    <img class="selo" src="<?php echo get_template_directory_uri(); ?>/assets/img/selo-fabricado-brasil.png" alt="Fabricado no Brasil">
    </div>
</div>
