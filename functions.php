<?php

// Requires
require_once( get_theme_file_path( '/inc/class-wp-bootstrap-navwalker.php' ) );

// Tranquil Spa Assets
function tranquil_spa_assets() {
  // Load fonts
  wp_enqueue_style( 'custom-google-font', '//fonts.googleapis.com/css2?family=Merriweather:wght@300;400&display=swap' );

  // Load CSS
  wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/css/fontawesome/css/all.min.css' );
  wp_enqueue_style( 'tranquil-spa-main-styles', get_stylesheet_uri(), array(), '1.0', 'all' );

  // Load JS
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery', NULL , true ) );
}

add_action( 'wp_enqueue_scripts', 'tranquil_spa_assets' );

// Tranquil Spa Features / Support
function tranquil_spa_features() {
  // Add maximum width size for images
  if ( ! isset( $content_width ) ) {
    $content_width = 660;
  }

  // Make theme available for translation
	$textdomain = 'tranquil-spa';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' ); // for child theme
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' ); // for parent theme

  // Add feed links to the header
  add_theme_support( 'automatic-feed-links' );

  // Add title tag
  add_theme_support( 'title-tag' );

  // Add post thumbnail feature
  add_theme_support( 'post-thumbnails' );

  // Add custom menus
  register_nav_menus( array(
    'tranquil_spa_main_menu'  => esc_html__( 'Tranquil Spa Main header menu', 'tranquil-spa' ),
    'tranquil_spa_main_menu'  => esc_html__( ' Tranquil Spa Footer Menu', 'tranquil-spa' )
  ) );
}

add_action( 'after_setup_theme', 'tranquil_spa_features' );

// Add Excerpt Text
function new_excerpt_text() {
  return '...';
}

add_filter( 'excerpt_more', 'new_excerpt_text' );

// Tranquil Spa Sidebars
function tranquil_spa_sidebars() {
  // Main sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Tranquil Spa Main Sidebar' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Drag and drop your widgets here.' ),
		'before_widget' => '<div class="py-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'tranquil_spa_sidebars' );

// Set Fetures Text in Header Area
function set_feature_text() {
  if ( is_front_page() )  {
    the_field( 'header_text_front_page' );
  } elseif ( is_home() || is_single() ) {
    esc_html_e( 'TRANQUIL SPA OFFICIAL BLOG', 'tranquil-spa' );
  } elseif ( is_search() ) {
    esc_html_e( 'TRANQUIL SPA OFFICIAL BLOG <br>' );
    printf( esc_html__( 'Search results for: %s', 'tranquil-spa' , get_search_query() ) );
  } elseif ( is_404() ) {
    esc_html_e( 'Whoops, were a little lost<br>
    <em>Let\'s get back on track</em>', 'tranquil-spa' );
  } else {
    esc_html_e( 'FULLY RESPONSIVE<br> PREMIUM SPA THEME<br> FOR WORDPRESS ', 'tranquil-spa' );
  }
}