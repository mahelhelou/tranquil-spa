<?php
	/*
	* The main template file
	*/
?>
<?php get_header() ?>

		<div class="contaier-fluid text-center py-5">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h3><?php the_field('welcome_section_title') ?></h3>
					<img src="<?php the_field('section_title_image') ?>" alt="divider" class="w-25">
				</div>
			</div>

			<div class="row mt-4 d-flex justify-content-around">
				<div class="col-sm-3">
					<img src="<?php the_field('welcome_section_1_image') ?>" alt="Makeup image" class="card-img-top rounded-circle">
					<div class="card-body">
						<p class="card-text"><?php the_field('welcome_section_1_text') ?></p>
					</div>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candles.jpg" alt="Candles image" class="card-img-top rounded-circle">
					<div class="card-body">
						<p class="card-text">Spa facilities</p>
					</div>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/retreat.jpg" alt="Retreat image" class="card-img-top rounded-circle">
					<div class="card-body">
						<p class="card-text">Take a tour</p>
					</div>
				</div>
			</div>
		</div>

		<!-- LATEST OFFERS -->
		<div class="contaier-fluid text-center bg-dark py-5">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h3 class="text-light">Latest Spa Offers</h3>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<h4 class="card-header py-5">
							Family swim package<span class="font-weight-bold price">$60</span>
						</h4>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>Our most popular swim package, great value for families or groups up to 12 people</p>
							</blockquote>
						</div>
						<ul class="list-group">
							<li class="list-group-item font-italic">Up to 12 people</li>
							<li class="list-group-item font-italic">Private sessions</li>
							<li class="list-group-item font-italic">Swim lessons also available</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<h4 class="card-header py-5">
							For the bride<span class="font-weight-bold price">$40</span>
						</h4>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>Our wedding packages are perfect for your big day. We can cater for groups large or small</p>
							</blockquote>
						</div>
						<ul class="list-group">
							<li class="list-group-item font-italic">Hair &amp; make up</li>
							<li class="list-group-item font-italic">Groups of any size</li>
							<li class="list-group-item font-italic">Champagne &amp; cocktails available</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<h4 class="card-header py-5">
							Weekend pass<span class="font-weight-bold price">$60</span>
						</h4>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>Take full advantage of all of the facilities we have to offer with our unlimited weekend pass</p>
							</blockquote>
						</div>
						<ul class="list-group">
							<li class="list-group-item font-italic">Pool &amp; sauna</li>
							<li class="list-group-item font-italic">Full use of our gym</li>
							<li class="list-group-item font-italic">Includes 2 treatments per person</li>
						</ul>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container-->

		<!-- ABOUT US SECTION -->
		<div class="container-fluid py-5 text-center bg-light">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<h3>About Us</h3>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col">
					<p class="text-center">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptatum ex, quidem voluptas porro commodi
						facilis maxime quae quos nobis, suscipit qui sint illum consequatur excepturi non nam, aliquam fuga.
						Unde numquam, facilis est officia ducimus at similique iusto! Est ab sit aperiam, voluptates molestiae
						ipsam,
						magni rerum qui, consequuntur unde autem ad voluptatum dolorem ex. Ipsam error nihil eius!
						Repellat quae quasi corrupti quo fugit ratione magnam, ipsa molestiae ullam at. Quaerat autem quibusdam
						numquam, voluptatum fuga cupiditate voluptatibus, sunt optio ipsum rem, nam omnis rerum facere commodi
						totam?
						Laborum velit nobis tenetur nostrum quas magnam hic cupiditate vero deserunt impedit error illum accusantium
						ipsum recusandae sed, libero esse et nihil, veniam praesentium. Sint, deleniti reiciendis. Esse, nulla ex.
						Minus pariatur aut perferendis nobis, harum animi doloribus voluptatibus neque sunt molestiae enim ipsum. Ab
						sapiente dolorem quae fuga consectetur, est totam autem ad repellendus tenetur quas vero numquam nam.
					</p>
				</div>
			</div>
		</div>

		<!-- PRICE LIST SECTION -->
		<div class="container-fluid py-5 bg-dark">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center">
					<h3 class="text-light">Price List</h3>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25">
				</div>
			</div>
			<div class="row my-4">
				<div class="col-sm-8">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/massage.jpg" alt="massage picture">
				</div>
				<div class="col-sm-4">
					<h4 class="title text-center">Massages</h4>
					<ul class="list-group list-group-flush text-light">
						<li class="list-group-item">Massage 1 <em>-$10</em></li>
						<li class="list-group-item">Massage 2 <em>-$10</em></li>
						<li class="list-group-item">Massage 3 <em>-$10</em></li>
						<li class="list-group-item">Massage 4 <em>-$10</em></li>
						<li class="list-group-item">Massage 5 <em>-$10</em></li>
					</ul>
				</div>
			</div>
			<div class="row my-4">
				<div class="col-sm-4">
					<h4 class="title text-center">Facials</h4>
					<ul class="list-group list-group-flush text-light">
						<li class="list-group-item">Facial 1 <em>-$10</em></li>
						<li class="list-group-item">Facial 2 <em>-$10</em></li>
						<li class="list-group-item">Facial 3 <em>-$10</em></li>
						<li class="list-group-item">Facial 4 <em>-$10</em></li>
						<li class="list-group-item">Facial 5 <em>-$10</em></li>
					</ul>
				</div>
				<div class="col-sm-8">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facial.jpg" alt="facial image">
				</div>
			</div>
			<div class="row my-4">
				<div class="col-sm-8">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/cosmetics.jpg" alt="cosmetics picture">
				</div>
				<div class="col-sm-4">
					<h4 class="title text-center">Hair &amp; make up</h4>
					<ul class="list-group list-group-flush text-light">
						<li class="list-group-item">Hair 1 <em>-$10</em></li>
						<li class="list-group-item">Hair 2 <em>-$10</em></li>
						<li class="list-group-item">Hair 3 <em>-$10</em></li>
						<li class="list-group-item">Hair 4 <em>-$10</em></li>
						<li class="list-group-item">Hair 5 <em>-$10</em></li>
					</ul>
				</div>
			</div>
		</div> <!-- container -->

		<!-- FOOTER SECTION -->
		<?php get_footer() ?>