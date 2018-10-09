<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product.css">
<section class="banner-product">
    <div class="title-product">
        <h3>Produtos</h3>
    </div>
        <div class="title-category-product">
            <h1 id="titulocategoria"><?php single_cat_title()?></h1>
        </div>
        </div>
    </section>
<section class="descricao-categoria">
    <div class="container">
        <div class="row">
            <div class="col">
	            <?php echo category_description( $category_id ); ?>
            </div>
        </div>
    </div>
</section>
<script>
    var categoria = jQuery('#titulocategoria').text();
    var banner = jQuery('.banner-product');
    console.log(categoria);
    if(categoria === "Voltímetro"){
        jQuery(banner).css("background-image", "url('<?php echo get_template_directory_uri();?>/assets/img/categoria-voltimetro.jpg')");
    } else if (categoria === "Iluminação"){
        jQuery(banner).css("background-image", "url('<?php echo get_template_directory_uri();?>/assets/img/categoria-iluminacao.jpg')");
    }else if (categoria === "Conversores"){
        jQuery(banner).css("background-image", "url('<?php echo get_template_directory_uri();?>/assets/img/categoria-conversores.jpg')");
    }
</script>
<section class="produtos-categoria">
    <div class="container">
        <ul class="itens">
	        <?php
	            $term = get_queried_object();
	            $args = array(
		        'posts_per_page' => -1,
		        'product_cat' => $term->slug,
		        'post_type' => 'product',
		        'orderby' => 'desc',
	        );
	            $the_query = new WP_Query( $args );
                if ( $the_query->have_posts()  ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <li class="item">
                    <?php if ( has_post_thumbnail() ) { $image = sprintf('<div class="frame-image"><a href="%s">%s</a></div>',get_permalink(), get_the_post_thumbnail($product_id,'full')); printf($image); } ?>
                        <h6 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                    <a class="saiba-mais" href="<?php the_permalink() ?>"> Saiba mais</a>
                </li>
			<?php endwhile; else: ?>
                <li>Nenhum produto foi encontrado.</li>
			<?php endif; ?>
        </ul>
    </div>
</section>

<?php get_footer()?>