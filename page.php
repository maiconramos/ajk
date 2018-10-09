<?php get_header()?>

<?php if(is_page("home")) { include (TEMPLATEPATH . '/pages/home.php'); } ?>
<?php if(is_page("Soluções O.E.M")) { include (TEMPLATEPATH . '/pages/solucoes.php'); } ?>
<?php if(is_page("Suporte")) { include (TEMPLATEPATH . '/pages/suporte.php'); } ?>
<?php if(is_page("Representantes")) { include (TEMPLATEPATH . '/pages/representantes.php'); } ?>
<?php if(is_product_category()) { include (TEMPLATEPATH . '/pages/categoria.php'); } ?>
<?php if(is_product()) { include (TEMPLATEPATH . '/pages/categoria.php'); } ?>
<?php if(is_shop()) { include (TEMPLATEPATH . '/pages/categoria.php'); } ?>
<?php if(is_page("voltímetro")) { include (TEMPLATEPATH . '/pages/categoria.php'); } ?>
<?php get_footer()?>
