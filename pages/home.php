<section id="home" class="header">
    <?php echo do_shortcode('[rev_slider alias="slide-ajk"]')  ?>
</section>
<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-md-6 px-lg-5 animation-right">
                <h2>Sobre nós</h2>
            </div>
            <div class="col-md-6 px-lg-5 animation-left">
                <p>A AJK nasceu em 2008, começou como uma loja de som e acessórios automotivos, porém logo iniciou no setor de consertos de amplificadores. Depois de certa experiência adquirida, iniciou o processo de fabricação de voltímetros. Hoje a AJK possui uma linha diferenciada de Strobos, Voltímetros e Conversores, além de oferecer soluções OEM para o mercado. Todo o processo de criação, desenvolvimento e produção, até a chegada no produto final é pautado na qualidade e inovação já reconhecidas pelos clientes e parceiros.</p>
            </div>
        </div>
    </div>
</section>
<section id="solucoes">
    <div class="container">
        <div class="row">
            <div class="col animation-bottom">
                <article>
                    <h2>soluções oem</h2>
                    <p>OEM (Original Equipment Manufacturer), ou em português: “fabricante do equipamento original”, é um termo usado quando uma empresa que faz um produto específico que é utilizado internamente no produto final de outra empresa.
                    </p>
                </article>
                <div id="slide-solucoes" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/slide-2.png" /> </div>
                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/slide-3.png" /> </div>
                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/slide-4.png" /> </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row"><a class="enviar-projeto" href="<?php echo get_home_url();?>/solucoes-oem">Envie seu projeto</a></div>
    </div>
</section>
<section id="curta">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto px-lg-5 animation-left">
                <h2>curta<br />
                    ajk sound</h2>
            </div>
            <div class="col-md-6 my-auto text-md-left px-lg-5 animation-right">
                <ul class="redes-curta">
                        <li>
                        <a href="https://www.facebook.com/ajksound/" title="Facebook" target="_blank">
                            <img src="http://ajksound.com.br/wp-content/themes/ajk-tema/assets/img/facebook.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ajksound/" title="Instagram" target="_blank">
                            <img src="http://ajksound.com.br/wp-content/themes/ajk-tema/assets/img/instagram.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/ajksound" title="youtube" target="_blank">
                            <img src="http://ajksound.com.br/wp-content/themes/ajk-tema/assets/img/youtube.svg" />
                        </a>
                    </li>
                </ul>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=581200172057708&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://www.facebook.com/ajksound/" data-layout="standard" data-action="like" data-size="small" data-width="300" data-show-faces="true" data-share="false"></div>
            </div>
        </div>
    </div>
</section>
<section id="contato">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-md-5 py-5">
                <div class="mt-md-5">
                    <h2 class="mb-md-3 animation-left">Contato</h2>
                <ul>
                    <li class="telefone animation-left"><a href="tel:554733391391" title="Ligar">+55 (47) 3339-1391</a><br /><a href="tel:554733977768" title="Ligar">+55 (47) 3397-7768</a></li>
                    <li class="endereco animation-left"><address>Rua Fritz Spernau, 912 (3,68 km)<br />
                            89055-200 Blumenau </address></li>
                </ul>
                </div>
            </div>
            <div class="col-md-6 pt-5 px-5 pb-2">
                <div class="animation-right">
<?php echo do_shortcode('[contact-form-7 title="Contato AJK"]');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="map"></div>
        </div>
    </div>
</section>
<section id="noticias">
    <div class="container">
    <div class="row py-5">
        <div class="col-md-6 my-auto align-self-center text-center">
            <div class="titulo-noticia animation-bottom"> <h2>Notícias</h2>
            <div class="paginacao-noticias swiper-pagination"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="slideNoticias" class="swiper-container">
            <div class="swiper-wrapper">
		        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
		        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="swiper-slide">
                    <a class="link-post" href="<?php the_permalink() ?>"><article>
                    <h3><?php the_title(); ?></h3>
                    <div class="img-post"><?php echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'img-fluid' ) ); ?></div>
                    <?php the_excerpt(__('(more…)')); ?>
                   </article></a>
                </div>
		        <?php
		        endwhile;
		        wp_reset_postdata();
		        ?>
            </div>
            <div>
        </div>
    </div>
        </div>
    </div>
</section>