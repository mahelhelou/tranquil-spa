<?php

function tranquil_scripts() {
  if( is_singular()
      && comments_open()
      && get_option('thread_comments')
  ) {
    wp_enqueue_script('comment-reply');
  }

}

add_action('wp_enqueue_scripts', 'tranquil_scripts');


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