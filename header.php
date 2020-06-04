<?php
/*
* The header for our theme
*/
?>

<DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'title' ); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu">
					<span class="navbar-toggler-icon"></span>
				</button>

					<?php
						wp_nav_menu( array(
              'theme_location'  => 'tranquil_spa_main_menu',
              'depth'	          => 1, // 1: one level, 2: with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse justify-content-end',
              'container_id'    => 'main-menu',
              'menu_class'      => 'navbar-nav',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>

			</nav>

			<section class="container-fluid">
				<div class="row position-relative d-flex justify-content-center align-items-center text-center">
					<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/lake.jpg" alt="lake background" class="header_img">
					<img src="<?php header_image(); ?>" alt="lake background" class="header_img">
					<div class="position-absolute feature-bg">
						<p class="feature-text"><YYY</p>
					</div>
				</div>
			</section>

		</header>