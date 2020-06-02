<?php

if(! isset($content_width)) {
  $content_width = 660;
}

function tranquilwp_setup() {
  load_theme_textdomain('tranquilwp', get_template_directory() . '/languages');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  // Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
  'primary' => __( 'Main header menu', 'tranquilwp' ),
  'footer' => __(' Footer Menu', 'tranquilwp')
) );
}

add_action('after_setup_theme', 'tranquilwp_setup');

function tranquil_scripts() {
  /* Add styles */
  wp_enqueue_style('bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() .'/css/fontawesome/css/all.min.css');
  wp_enqueue_style('custom', get_template_directory_uri() .'/style.css');

  wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);

  if( is_singular()
      && comments_open()
      && get_option('thread_comments')
  ) {
    wp_enqueue_script('comment-reply');
  }

}
add_action('wp_enqueue_scripts', 'tranquil_scripts');

function new_excerpt_text() {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');

function featureText() {
  if( is_front_page() )  {
   the_field('header_text_front_page');
  } elseif ( is_home() || is_single()) {
    esc_html_e("TRANQUIL SPA OFFICIAL BLOG", "tranquilwp");
  } elseif( is_search() ) {
    _e("TRANQUIL SPA OFFICIAL BLOG");
    _e("<br>");
    printf(__('Search results for: %s', 'tranquilwp'), get_search_query());
  } elseif( is_404() ) {
    _e("Whoops, were a little lost<br>
    <em>Let's get back on track</em>");
  }
   else {
    _e("FULLY RESPONSIVE<br> PREMIUM SPA THEME<br> FOR WORDPRESS");
  }
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="py-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function add_footer_menu_class($classes, $item, $args) {
  if($args->theme_location == 'footer') {
    $classes[] = 'list-group-item';
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_footer_menu_class', 10, 3);
$args = array(
  'width' => 2600,
  'height' => 650,
  'default-image' => get_template_directory_uri() . '/images/lake.jpg',
  'uploads' => true
);
add_theme_support('custom-header', $args);

register_default_headers( array(
  'lake1' => array(
    'url' => get_template_directory_uri() . '/images/lake.jpg',
    'thumbnail_url' => get_template_directory_uri() . '/images/lake.jpg',
    'description' => __(' Lake 1 ')
  ),
  'lake2' => array(
    'url' => get_template_directory_uri() . '/images/lake2.jpg',
    'thumbnail_url' => get_template_directory_uri() . '/images/lake2.jpg',
    'description' => __(' Lake 2 ')
  ),
));

?>