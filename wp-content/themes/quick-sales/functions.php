<?php

add_action( 'after_setup_theme', 'quick_sales_setup' );

if(!function_exists( 'quick_sales_setup' )) :
function quick_sales_setup() {

	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'quick-sales' )
	) );

		global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 1100;


    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    add_theme_support( 'custom-background', apply_filters( 'quick_sales_custom_background_args', array(
      'default-color' => '#ecf0f1',
    ) ) );

    load_theme_textdomain('quick-sales', get_template_directory() . '/lang' );

}
endif; // quick_sales_setup


add_action('wp_enqueue_scripts', 'quick_sales_scripts');

function quick_sales_scripts(){

	    wp_register_script('quick_sales_gallery',get_template_directory_uri().'/js/gallery.js', array('jquery'));
      wp_enqueue_script('quick_sales_gallery');

	    wp_register_script('quick_sales_decor',get_template_directory_uri().'/js/decor.js', array('jquery'));
      wp_enqueue_script('quick_sales_decor');

      wp_register_script('quick_sales_mobile-menu',get_template_directory_uri().'/js/mobile-menu.js', array('jquery'));
      wp_enqueue_script('quick_sales_mobile-menu');

    	if(is_singular() && comments_open() && get_option( 'thread_comments' )){
    		wp_enqueue_script( 'comment-reply' );
    	}

}


add_action('wp_enqueue_scripts', 'quick_sales_styles');

function quick_sales_styles(){

    wp_register_style('quick_sales_fonts', get_template_directory_uri().'/css/fonts.css', array(), '1.0', 'all');
    wp_enqueue_style('quick_sales_fonts');

    wp_register_style('quick-sales', get_template_directory_uri().'/style.css', array('quick_sales_fonts'), '1.0', 'all');
    wp_enqueue_style('quick-sales');

    if ( class_exists( 'WooCommerce' ) ) {
      wp_register_style('quick_sales_wc_styles', get_template_directory_uri().'/css/wc_styles.css');
      wp_enqueue_style('quick_sales_wc_styles');
    }

}

add_action( 'wp_head', 'quick_sales_add_generated_styles');

function quick_sales_add_generated_styles() {
  include(  get_template_directory() . '/css/colors.php' );
}

add_action( 'widgets_init', 'quick_sales_widgets_init' );

function quick_sales_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Footer column', 'quick-sales' ) . ' 1',
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer column', 'quick-sales' ) . ' 2',
        'id' => 'footer-2',
        'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer column', 'quick-sales' ) . ' 3',
        'id' => 'footer-3',
        'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


}

//Add customizer
require_once( get_template_directory() . '/customizer.php');

//Add woocommerce support
if ( class_exists( 'WooCommerce' ) ) {
  require_once( get_template_directory() . '/woocommerce/woocommerce_hooks.php');
}

?>
