<?php
/*
* Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<!-- CONTACT US SECTION -->
<div class="container-fluid text-center py-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h3><?php the_title(); ?></h3>
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/divider-purple.png" alt="divider"
        class="w-25">
    </div>
  </div><!-- row -->
  <div class="row">
    <div class="col-sm-12">
      <?php echo do_shortcode( '[contact-form-7 html_class="text-left" id="64" title="Contact form 1"]' ); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>