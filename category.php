<?php get_header()?>
<section class="category-section">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
        <?php
        if(have_posts()):
            echo "<div class='row'>";
            while(have_posts()): the_post();
            $image = '';
            if(has_post_thumbnail()){
	            $image = sprintf('<div class="imagem-post"><a href="%s" style="background-image: url(%s)"></a></div>',
		            get_permalink(), get_the_post_thumbnail_url(get_the_ID(),'full'));
            }

            $body = sprintf('<div class="post-body"><a href="%s"> <h3 class="post-heading">%s</h3></a><p>%s</p></div>',
	            get_permalink(), get_the_title(),  get_the_content('continue lendo...'));


            printf('<article class="col-md-12">%s%s</article>',
            $image, $body);

            endwhile;
	        echo "</div>";
        else:
            echo "<p>Ainda não temos notícias para essa categoria.</p>";
        endif;
        ?>
            </div>
        </div>
        <div class="col-md-4"><?php get_sidebar()?></div>
    </div>
</div>

</section>
<?php get_footer()?>


