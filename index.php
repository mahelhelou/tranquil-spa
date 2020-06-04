<?php
	/*
	* The main template file
	*/
?>

<?php get_header(); ?>

<main class="container-fluid py-5">
    <div class="row">
      <div class="col-sm-8">

      <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>
        <div <?php post_class( 'custom-class' ); ?>>
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          </a>
          <p><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?> <?php esc_html_e( 'by', 'tranquil-spa' ); ?> <a href="<?php the_author_posts_link(); ?>"><?php the_author(); ?></a></p>
          <div class="pb-2">
            <i class="fas fa-tags"></i>
            <p class="d-inline"><?php the_tags( est_html__('Tagged: ', ' ~ ','tranquil-spa') ); ?></p>
          </div>
          <div class="my-3">
            <?php the_post_thumbnail( 'large' ); ?>
          </div>
          <p><?php the_excerpt(); ?></p>
          <div class="mb-3">
            <a href="<?php the_permalink(); ?>">
              <?php esc_html_e( 'Read more...', 'tranquil-spa' ); ?>
            </a>
          </div>
        </div>
      <?php endwhile;

      // We're using numeric page navigation here.
      the_posts_pagination( array(
        'prev_text'		=> esc_html__( 'Previous', 'fancy-lab' ),
        'next_text'		=> esc_html__( 'Next', 'fancy-lab' ),
      ));

    else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria' , 'tranquil-spa' ); ?></p>

    <?php endif; ?>

    <!-- Way 2 of showing next/previous posts -->
    <!-- <nav>
      <ul class="nav">
        <li><?php next_posts_link(); ?></li> &nbsp;
        <li><?php previous_posts_link(); ?></li>
      </ul>
    </nav> -->
    </div>

    <aside class="col-sm-4">
      <?php get_sidebar(); ?>
    </aside>

  </div><!-- /row -->
</main><!-- /container -->

<?php get_footer() ?>