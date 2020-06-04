<?php
	/*
	* The template for displaying 404 pages
	*/
?>

<?php get_header(); ?>

<main class="container-fluid py-5">
  <h1 class="display-3"><?php esc_html_e( 'Error 404. This page not found!', 'tranquil-spa' ); ?></h1>
  <div class="row">
    <div class="col-md-3"><?php the_widget( 'WP_Widget_Pages' ); ?></div>
    <div class="col-md-3"><?php the_widget( 'WP_Widget_Categories' ); ?></div>
    <div class="col-md-3"><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></div>
    <div class="col-md-3"><?php the_widget( 'WP_Widget_Tag_Cloud' ); ?></div>
  </div><!-- /row -->
</main><!-- /container -->

<?php get_footer(); ?>