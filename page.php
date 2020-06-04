<?php
/*
* The template for disaplying all single posts
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div><?php the_content(); ?></div>

	<?php endwhile;
else : ?>
	<p><?php esc_html_e( 'Sorry, no pages matched your criteria' , 'tranquil-spa' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>