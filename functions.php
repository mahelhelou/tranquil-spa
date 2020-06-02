<?php

function soft_spa_assets() {
  // Load fonts

  // Load CSS
  wp_enqueue_style( 'soft-spa-main-styles', get_stylesheet_directory_uri(), array(), microtime(), 'all' );

  // Load JS
}

add_action( 'wp_enqueue_scripts', 'soft_spa_assets' );