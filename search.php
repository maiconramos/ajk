<?php
/*
Template Name: Search Page
*/
?>
<?php get_header()?>
<section class="category-section">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="content">

		        <?php
		        $args_search = array(
			        'post_type' => 'post',
			        's' => $_GET["busca"],
			        'posts_per_page' => 30
		        );
		        echo "<input type='hidden' id='hideSearch' value='".$_GET["s"]."'>";
		        if( $_GET["posttype"] ){
			        $args_search["post_type"] = $_GET["posttype"];
			        echo "<input type='hidden' id='hidePostType' value='".$_GET["posttype"]."'>";
		        }
		        $the_query_post = new WP_Query( $args_search );
		        if ( $the_query_post->have_posts() ) {
			        while ( $the_query_post->have_posts() ) {
				        $the_query_post->the_post();
				        if(has_post_thumbnail()){
					        $image = sprintf('<div class="imagem-post"><a href="%s" style="background-image: url(%s)"></a></div>',
						        get_permalink(), get_the_post_thumbnail_url(get_the_ID(),'full'));
				        }
				        $body = sprintf('<div class="post-body"><a href="%s"> <h3 class="post-heading">%s</h3></a><p>%s</p></div>',
					        get_permalink(), get_the_title(), get_the_excerpt());

				        printf('<article id="" class="col-md-12">%s%s</article>',
					        $image, $body);
				        ?>
				        <?php
			        }
		        }else{
		            echo ('<h4>Nenhum resultado encontrado</h4>');
		        }
		        ?>
            </div>
        </div>
        <div class="col-md-4"><?php get_sidebar()?></div>
    </div>
</div>
</section>
<?php get_footer()?>


