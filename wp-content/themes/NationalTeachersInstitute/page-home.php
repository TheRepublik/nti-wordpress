<?php get_header(); ?>
<section class="section" style="padding-bottom: 0px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
			<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
		</div>
	</div>
</section>
<section class="section">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
			<div class="col-lg-3">
				<?php echo do_shortcode('[admissions_card]'); ?>
			</div>
			<div class="col-lg-3">
				<?php echo do_shortcode('[register_card]'); ?>
			</div>
			<div class="col-lg-3">
				<?php echo do_shortcode('[programmes_card]'); ?>
			</div>
			<div class="col-lg-3">
				<?php echo do_shortcode('[login_card]'); ?>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="about-card">
					<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
						<div class="about-tag">ABOUT NTI</div>
						<h2>About The National Teachers Institute of Nigeria </h2>
						<p>
							The National Teachers' Institute was setup to serve as a Distant Learning Educational Institution...
						</p>
						<a href="about">	
							<div class="about-readmore-btn">
								Continue Reading
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-4 hidden-sm hidden-xs">
						<div class="about-card-logo"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div id="events-card">
					<h4>Events</h4>
					<div class="event-card">
						<div class="event-card-about">
							<div class="event-tag">22/20</div> 
							<h2>2017 Student Registration & Clearance</h2>
							<p>Must for all bike, sport, travel and outside enthusiasts with plenty of information</p>
						</div>
					</div>
					<div class="event-card">
						<div class="event-card-about">
							<div class="event-tag">22/20</div> 
							<h2>2017 Student Registration & Clearance</h2>
							<p>Must for all bike, sport, travel and outside enthusiasts with plenty of information</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section" style="background-color: #E4F6CF;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
			<h1 class="section-title">Our Programmes</h1>
		</div>
		<div class="container">
			<div class="programmesrow">
				<div class="programme-card programme-card-one">
					<span>SCIENCE</span>
					
					<h3>Nigerian Certificate In Education NCE</h3>

					<div class="programme-readmore-btn">
						READ MORE
					</div>
				</div>
				<div class="programme-card programme-card-two">
					<span>SCIENCE</span>
					
					<h3>Nigerian Certificate In Education NCE</h3>

					<div class="programme-readmore-btn">
						READ MORE
					</div>					
				</div>
				<div class="programme-card programme-card-three">
					<span>SCIENCE</span>
					
					<h3>Nigerian Certificate In Education NCE</h3>

					<div class="programme-readmore-btn">
						READ MORE
					</div>					
				</div>
				<div class="programme-card programme-card-four">
					<span>SCIENCE</span>
					
					<h3>Nigerian Certificate In Education NCE</h3>

					<div class="programme-readmore-btn">
						READ MORE
					</div>					
				</div>
				<div class="programme-card programme-card-five">
					<span>SCIENCE</span>
					
					<h3>Nigerian Certificate In Education NCE</h3>

					<div class="programme-readmore-btn">
						READ MORE
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
			<h1 class="section-title">News & Updates</h1>
		</div>
		<div class="container">
			<div class="newsrow">
            	<?php
            		$args = array(
					    'posts_per_page' => 5,
					    'orderby' => 'date',
					    'order' => 'ASC'
					);

					$postlist  = new WP_Query( $args ); 

	               	     while ($postlist->have_posts()) : $postlist->the_post(); ?>
                			<a href="<?php the_permalink(); ?>">
                				<div class="blog-card">
									<div class="blog-card-bg">
										<div class="about-tag">news</div>
									</div>
									<div class="blog-card-content">
										<h5><?php the_title() ?></h5>
										<p><?php echo get_the_excerpt(); ?></p>
									</div>
								</div>
							</a>
	               	<?php endwhile;
	            ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>