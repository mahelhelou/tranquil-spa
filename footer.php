<?php
/*
* The template for displaying the footer
*/
?>

<footer class="container-fluid py-5">
  <div class="row">
    <div class="col-sm-4">
      <h5><?php esc_html_e( 'Stay Connected:', 'tranquil-spa' ); ?></h5>
      <form>
        <div class="form-row form-group">
          <div class="col-md-8">
            <input type="email" class="form-control" placeholder="<?php esc_attr_e( 'Email address', 'tranquil-spa' ); ?>">
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary">
              <?php esc_html_e( 'Sign up', 'tranquil-spa' ); ?>
              <i class="fas fa-angle-double-right"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- social media icons -->
      <i class="fab fa-facebook-square fa-2x"></i>
      <i class="fab fa-twitter-square fa-2x"></i>
      <i class="fab fa-instagram fa-2x"></i>
      <i class="fab fa-pinterest-square fa-2x"></i>
    </div>
    <div class="col-sm-4">
      <h5><?php esc_html_e( 'Out setting:', 'tranquil-spa' ); ?></h5>
      <p><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, at ea sequi corporis ut incidunt amet vitae.
        Voluptatibus facilis quibusdam modi ex architecto. Ab fuga voluptate neque vero minima laudantium?' , 'tranquil-spa' ); ?></p>
    </div>
    <div class="col-sm-4">
      <h5><?php esc_html_e( 'Navigation', 'tranquil-spa' ); ?></h5>
      <?php wp_nav_menu( array(
              'theme_location'  => 'footer',
              'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'ul',
              'container_class' => 'list-group',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ) ); ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>