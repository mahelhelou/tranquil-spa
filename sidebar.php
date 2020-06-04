<?php
/**
* You can keep the originan markup and start get dynamic data
* for archives, call wp_get_archives(); function
* for categories, call wp_list_categories(); function
	* use ( 'title_li=' ) as param to reemove (Categories) sub-title
*/

if ( is_active_sidebar( 'home_right_1' ) ) : ?>
<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
  <?php dynamic_sidebar( 'home_right_1' ); ?>
</div><!-- #primary-sidebar -->
<?php endif; ?>

<!-- <aside class="col-sm-4">
	<div class="py-3">
		<h4 class="font-italic">About</h4>
		<p>Welcome to official Tranquil Spa Blog. Here you will find the latest news and what's on the go.
		<hr>
		</p>
	</div>

	<div class="py-3">
		<h4 class="font-italic">Archives</h4>
		<ol class="list-unstyled mb-0">
			<?php wp_get_archives(); ?>
		</ol>
	</div>

	<div class="py-3">
		<h4 class="font-italic">Categories</h4>
		<ol class="list-unstyled mb-0">
			<?php wp_list_categories( 'title_li=' ); ?>
		</ol>
	</div>

	<div class="py-3">
		<h4 class="font-italic">Follow Us</h4>
		<i class="fab fa-facebook-square fa-2x"></i>
		<i class="fab fa-twitter-square fa-2x"></i>
		<i class="fab fa-instagram fa-2x"></i>
		<i class="fab fa-pinterest-square fa-2x"></i>
	</div>
</aside> -->