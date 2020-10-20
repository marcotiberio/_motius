<?php
/**
 * Template Name: About
 *
 * This is the About template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			$section1 = get_field('section1');
			if( $section1 ): ?>
				<section id="one" style="background-color:<?php echo $section1['background_color_section']; ?>">
					<div class="hero-text">
						<h1 class="header"><?php echo $section1['header']; ?></h1>
						<p class="paragraph"><?php echo $section1['paragraph']; ?></p>
					</div>
				</section>
			<?php endif; ?>
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section id="two">
					<img src="<?php echo esc_url( $section2['image']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>
			<section id="blockScroll">
			<div class="wrapper">
				<div class="indicators">
					<div class="indicator"></div>
					<div class="indicator"></div>
					<div class="indicator"></div>
					<div class="indicator"></div>
					<div class="indicator"></div>
				</div>
				<div class="point">
					<article>
					<h3>Our Core Values</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We Enable</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle2.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We Create</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle3.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We are Curious</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle4.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We are Community-driven</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle5.png" alt="random" width="700" height="700" />
				</div>
			</div>
		</section>
		<?php
			$section6 = get_field('section6');
			if( $section6 ): ?>
				<section id="six">
					<img src="<?php echo esc_url( $section6['image']['url'] ); ?>" alt="<?php echo esc_attr( $section6['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>
		<section id="eight">
			<h3 class="section-title">Our Founding Team</h3>
			<?php if( have_rows('section8') ): ?>
				<div class="grid-5">
				<?php while( have_rows('section8') ): the_row(); 

					// Load sub field value.
					$photo = get_sub_field('photo');
					$title = get_sub_field('title');
					$subtitle = get_sub_field('subtitle');
					?>
					<div class="card">
						<img class="photo" src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
						<p class="title"><?php the_sub_field('title'); ?></p>
						<p class="subtitle"><?php the_sub_field('subtitle'); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<?php
			$section9 = get_field('section9');
			if( $section9 ): ?>
				<section id="nine">
					<div class="two-columns-text">
						<h2 class="header"><?php echo $section9['header']; ?></h2>
						<p class="paragraph"><?php echo $section9['paragraph']; ?></p>
					</div>
				</section>
				<section id="nineB">
					<div class="timeline">
						<ul>
							<li>
								<div>
									<h2>2013</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
							<li>
								<div>
									<h2>2014</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
							<li>
								<div>
									<h2>2016</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
							<li>
								<div>
									<h2>2017</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
							<li>
								<div>
									<h2>2018</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
							<li>
								<div>
									<h2>2019</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
							<li>
								<div>
									<h2>2020</h2>
									<h5>Kicking things off</h5>
									<p>No matter how well defined your project idea is, we can work it out together. 
										We can start with an existing problem, an existing product that you want to 
										improve or just some rough ideas and requirements.
									</p>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="http://motius.local/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
			<?php endif; ?>
		<?php
			$section10 = get_field('section10');
			if( $section10 ): ?>
				<section id="ten">
					<h2 class="section-title" data-aos="fade-right"><?php echo $section10['header']; ?></h2>
					<img src="<?php echo esc_url( $section10['image']['url'] ); ?>" alt="<?php echo esc_attr( $section10['image']['alt'] ); ?>" data-aos="fade-left" />
				</section>
			<?php endif; ?>
		<section id="eleven">
			<h3 class="section-title" data-aos="fade-right">Offices</h3>
			<?php if( have_rows('section11') ): ?>
				<div class="grid-3">
				<?php while( have_rows('section11') ): the_row(); 

					// Load sub field value.
					$photo = get_sub_field('photo');
					$title = get_sub_field('title');
					$subtitle = get_sub_field('subtitle');
					?>
					<div class="card" data-aos="flip-up">
						<img class="profile-photo" src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
						<p class="title"><?php the_sub_field('title'); ?></p>
						<p class="subtitle"><?php the_sub_field('subtitle'); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>

	</main><!-- #main -->

	<script>
		(function() {

		'use strict';

		// define variables
		var items = document.querySelectorAll(".timeline li");

		// check if an element is in viewport
		// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
		function isElementInViewport(el) {
		var rect = el.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
		}

		function callbackFunc() {
		for (var i = 0; i < items.length; i++) {
			if (isElementInViewport(items[i])) {
			items[i].classList.add("in-view");
			}
		}
		}

		// listen for events
		window.addEventListener("load", callbackFunc);
		window.addEventListener("resize", callbackFunc);
		window.addEventListener("scroll", callbackFunc);

		})();
	</script>

<?php
get_sidebar();
get_footer();
