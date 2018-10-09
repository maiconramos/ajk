<?php

add_theme_support( 'menus' );
//add_theme_support( 'woocommerce' );

error_reporting(E_ALL & ~E_NOTICE);
//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

// Add Class menu Nav li
function add_classes_on_li($classes, $item, $args) {
	$classes[] = 'nav-item';
	return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
// Add Class ao menu active
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	if( in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}

/*
add_theme_support('post-thumbnails');
set_post_thumbnail_size(120,120);
*/
function my_wp_scripts(){
	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_style('bootstrap' , sprintf('%s/assets/css/bootstrap.min.css',get_template_directory_uri()));
	wp_enqueue_style('preloader' , sprintf('%s/assets/css/loader.min.css',get_template_directory_uri()));

	wp_enqueue_style('custom' , sprintf('%s/assets/css/custom.css',get_template_directory_uri()));
	wp_enqueue_style('swiper' , sprintf('%s/assets/css/swiper.min.css',get_template_directory_uri()));

	wp_enqueue_script('bootstrap',get_template_directory_uri() . '/assets/js/bootstrap.min.js',	array('jquery'), null, true);
	wp_enqueue_script('swiperjs', get_template_directory_uri() . '/assets/js/swiper.min.js',null, null,true);
	wp_enqueue_script('vivus', get_template_directory_uri() . '/assets/js/vivus.min.js',null, null,false);
	wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBNIGZgYPECVrrTjx0K45DFp_908aSch0M',null, null,true);
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js',null, null,true);
    if( is_page("home")){
	    wp_enqueue_script('home-script', get_template_directory_uri() . '/assets/js/home-script.js',null, null,true);
	    wp_enqueue_style('home' , sprintf('%s/assets/css/home.css',get_template_directory_uri()));
    }
    if( is_page("suporte")){
	    wp_enqueue_style('suporte' , sprintf('%s/assets/css/suporte.css',get_template_directory_uri()));
    }

    if( is_archive() || is_page('pesquisa') ){
	    wp_enqueue_style('categorystyle' , sprintf('%s/assets/css/category.css',get_template_directory_uri()));
    }

}
add_action('wp_enqueue_scripts', 'my_wp_scripts');


/** Habilitar Widget  **/

function theme_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Barra de Categoria', 'theme-slug' ),
		'id' => 'sidebar-1',
		'description' => __( 'Os widgets nesta área serão mostrados em todas as postagens e páginas.', 'theme-slug' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/*** Menu Bootstrap ***/
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/** enable SVG Upload **/

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/** Adicionar campo link Manual **/


function woo_add_custom_general_fields_save( $post_id ){
	// Text Field
	$woocommerce_text_field = $_POST['manual'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, 'manual', esc_attr( $woocommerce_text_field ) );

}
// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {

	global $woocommerce, $post;

	echo '<div class="options_group">';

	// Text Field
	woocommerce_wp_text_input(
		array(
			'id'          => 'manual',
			'label'       => __( 'Manual', 'woocommerce' ),
			'placeholder' => 'Insira o link do arquivo do Manual',
			'desc_tip'    => 'true',
			'description' => __( 'Copie o link da galeria e cole no campo', 'woocommerce' )
		)
	);
	echo '</div>';

	global $post;

// Get WordPress' media upload URL
	$upload_link = esc_url( get_upload_iframe_src( 'image', $post->ID ) );

// See if there's a media id already saved as post meta
	$your_img_id = get_post_meta( $post->ID, '_your_img_id', true );

// Get the image src
	$your_img_src = wp_get_attachment_image_src( $your_img_id, 'full' );

// For convenience, see if the array is valid
	$you_have_img = is_array( $your_img_src );
	?>

	<!-- Your add & remove image links -->
	<p class="hide-if-no-js">
		<a class="thickbox upload-custom-img <?php if ( $you_have_img  ) { echo 'hidden'; } ?>"
		   href="<?php echo $upload_link ?>">
			<?php _e('Enviar Manual') ?>
		</a>

	</p>
	<?php
}


// Personalizar Painel Wordpress
// Url logo login
function my_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

//custom css dashboard and login
function my_admin_theme_style() {
	wp_enqueue_style('my-admin-style',  get_stylesheet_directory_uri() . '/assets/css/dashboard.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');

//custom css login

add_action('admin_head', 'custom_dashboard');
function custom_dashboard() {
	wp_enqueue_style('my-admin-style',  get_stylesheet_directory_uri() . '/assets/css/dashboard.css');
}
add_action( 'login_enqueue_scripts', 'custom_dashboard' );

// custom footer
function remove_footer_admin () {
	echo 'Desenvolvido por <a href="https://www.wtek.com.br" target="_blank">Wtek</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

