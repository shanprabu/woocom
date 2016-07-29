<?php

add_action( 'after_setup_theme', 'quick_sales_woocommerce_setup' );
function quick_sales_woocommerce_setup() {

  //declare support for woocommerce
  add_theme_support( 'woocommerce' );

  //remove sidebar for woocommerce
  remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar',10);

  //change position of add to cart
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );

  //Remove product thumbs
  remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
  add_action( 'woocommerce_after_single_product_summary', 'woocommerce_show_product_thumbnails', 1 );

  //Remove styles
  add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

  //Add wrappers
  add_action('woocommerce_single_product_summary', 'quick_sales_add_product_info_wrapper', 3);
  add_action('woocommerce_single_product_summary', 'quick_sales_add_product_info_inner_wrapper', 5);
  add_action('woocommerce_single_product_summary', 'quick_sales_close_product_info', 60);

  //Move images to summary
   add_action('woocommerce_single_product_summary', 'woocommerce_show_product_images', 4);
   remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

   //Change title prority
   add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 6);
   remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

   //Change rating action's prority
   add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 8);
   remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);

   //Add attributes
   add_action('woocommerce_single_product_summary', 'quick_sales_add_attributes', 9);
}

//Allow product page as homepage
add_filter( 'get_pages',  'quick_sales_allow_product_page_as_frontpage' );

function quick_sales_allow_product_page_as_frontpage( $pages )
{
     $new_pages = new WP_Query( array( 'post_type' => 'product' ) );
     if ( $new_pages->post_count > 0 ){
         $pages = array_merge( $pages, $new_pages->posts );
     }

     wp_reset_query();

     return $pages;
}


// Add wrappers
function quick_sales_add_attributes() {
  get_template_part('woocommerce/add_custom_attributes');
}

function quick_sales_add_product_info_wrapper() {
  echo '<div id="product-info-wrapper">';
}

function quick_sales_add_product_info_inner_wrapper() {
  echo '<div id="product-info-inner">';
}

function quick_sales_close_product_info() {
  echo '</div></div>';
}

//Remove breadcrumbs
add_action( 'init', 'quick_sales_remove_wc_breadcrumbs' );
function quick_sales_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// Register sidebars that will be displayed on product list
add_action( 'widgets_init', 'quick_sales_add_woocommerce_sidebars' );
function quick_sales_add_woocommerce_sidebars() {
  register_sidebar( array(
      'name' => __( 'Sidebar before product archive', 'quick-sales' ) . ' 1',
      'id' => 'sidebar-before-archive-1',
      'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
      'name' => __( 'Sidebar before product archive', 'quick-sales' ) . ' 2',
      'id' => 'sidebar-before-archive-2',
      'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
      'name' => __( 'Sidebar before product archive', 'quick-sales' ) . ' 3',
      'id' => 'sidebar-before-archive-3',
      'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
      'name' => __( 'Sidebar after product archive', 'quick-sales' ) . ' 1',
      'id' => 'sidebar-after-archive-1',
      'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
      'name' => __( 'Sidebar after product archive', 'quick-sales' ) . ' 2',
      'id' => 'sidebar-after-archive-2',
      'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
      'name' => __( 'Sidebar after product archive', 'quick-sales' ) . ' 3',
      'id' => 'sidebar-after-archive-3',
      'before_widget' => '<div id="%1$s" class="archive-widget widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );
}


//Add sidebars
add_action( 'woocommerce_before_shop_loop', 'quick_sales_add_archive_widgets_before_loop', 11 );
function quick_sales_add_archive_widgets_before_loop() {
  get_sidebar('before-product-list');
}

add_action( 'woocommerce_after_shop_loop', 'quick_sales_add_archive_widgets_after_loop', 60 );
function quick_sales_add_archive_widgets_after_loop() {
  get_sidebar('after-product-list');
}

//Add notice about plugin
add_action( 'admin_notices', 'quick_sales_one_page_info' );
function quick_sales_one_page_info() {

    if( class_exists('woocommerce_one_page_shopping') ) {
      //Hide info about theme from one page shopping plugin
      update_option( 'woocommerce_one_page_shopping_notice_get_theme', false );
      return;
    }
    if( isset( $_GET['quick_sales_hide_notice'] ) ){
      update_option('quick_sales_hide_notice', true );
      return;
    }
    if( get_option('quick_sales_hide_notice') == true ) {
      return;
    }
    ?>
    <div class="updated">
        <p>
          <?php _e( 'This theme works best with', 'quick-sales' ); ?>
           <a href="http://codecanyon.net/item/woocommerce-one-page-shopping/7158470?ref=optart"><?php _e('WooCommerce One Page Shopping', 'quick-sales'); ?></a>
           | <a href="<?php echo add_query_arg( 'quick_sales_hide_notice', 'yes' ); ?>"><?php _e( 'Hide notice', 'quick-sales' ); ?></a>
        </p>
    </div>
    <?php
}



?>
