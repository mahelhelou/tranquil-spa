<?php
/*
* The template for displayinh all blog posts
*/
?>

<?php get_header(); ?>

<main class="container-fluid py-5">
  <div class="row">
    <div class="col-sm-8 blog-main">

      <?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
      <div>
        <h2><?php the_title(); ?></h2>
        <p><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?> <?php esc_html_e( 'By', 'tranquil-spa' ); ?> <a
            href="<?php the_author_posts_link(); ?>"><?php the_author(); ?></a></p>
        <div class="pb-2">
          <i class="fas fa-tags"></i>
          <p class="d-inline"><?php the_tags( 'Tagged: ', ' ~ ' ); ?></p>
        </div>
        <div class="my-3">
          <?php the_post_thumbnail(); ?>
        </div>
        <p><?php the_content(); ?></p>
        <?php wp_link_pages(); // When there's a pages for single post?>
      </div>
      <?php endwhile;
    else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria' ); ?></p>
    <?php endif; ?>

      <?php
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif; ?>

      <nav>
        <ul class="nav">
          <li><?php next_post_link(); ?></li> &nbsp;
          <li><?php previous_post_link(); ?></li>
        </ul>
      </nav>
    </div>

    <aside class="col-sm-4">
      <?php get_sidebar(); ?>
    </aside>

  </div><!-- /row -->
</main><!-- /container -->

<?php get_footer(); ?>