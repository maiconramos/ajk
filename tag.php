<?php get_header()?>
<?php get_header('personalizado')?>

<div class="container">
    <h3>Posts da Tag - <?php single_cat_title()?></h3>
    <div class="row">
        <div class="col-md-6">
            <p>Posts</p>
        <?php
        if(have_posts()):
            echo "<ul>";
            while(have_posts()): the_post();
            $image = '';
            if(has_post_thumbnail()){
	            $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
		            get_permalink(), get_the_post_thumbnail());
            }

            $body = sprintf('<div class="media-body"><a href="%s"> <h3 class="media-heading">%s</h3></a><p>%s</p></div>',
	            get_permalink(), get_the_title(),  get_the_content('continue lendo...'));


            printf('<li class="media">%s%s</li>',
            $image, $body);

            endwhile;
	        echo "</ul>";
        else:
            echo "<p>Ainda não temos post para essa categoria.</p>";
        endif;
        ?>
        </div>
        <div class="col-md-6"><?php get_sidebar()?></div>
    </div>
</div>




<?php get_footer('personalizado')?>
<?php get_footer()?>
