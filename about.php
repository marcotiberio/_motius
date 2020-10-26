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
					<h3>Our Core <br><span id="blueWord">Values</span></h3>
					<p>The Motius core values are serving as a steering wheel for everything that we do. 
						They shape our brand, our interaction in within the team, our decisions and our day-to-day life. 
						They are deeply rooted at the core of our culture.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We <br><span id="blueWord">Enable</span></h3>
					<p>Life at Motius is about enabling others. All of our actions, projects, and activities have the 
						main objective to enable people. We enable techies to have the biggest possible impact on the world. 
						We enable companies to master new technologies.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle2.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We <br><span id="blueWord">Create</span></h3>
					<p>We love to build impactful things and have a hands-on mindset towards everything we do. 
						Good concepts are important, but as we wantto create impact, developing products and 
						implementing ideas is what we strive for.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle3.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We are <br><span id="blueWord">Curious</span></h3>
					<p>That‘s why we are constantly exploring what happens around us. This curiosity doesn‘t stop at 
						the immediate task. We often look outside of our daily tasks and don‘t shy away from learning 
						new skills. We’re coloring outside of the box.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/circle4.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>We are <br><span id="blueWord">Community-driven</span></h3>
					<p>That‘s why we support each other – by collaboratively creating stuff, sharing our knowledge to 
						help people explore new fields or just supporting people wherever we can. Our integrity and 
						diverse community is an essential part of the Motius culture.</p>
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
			<h3 class="section-title">Our <br><span id="blueWord">Founding Team</span></h3>
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
						<h2 class="header">The <span id="blueWord">Motius</span> <br>Story</h2>
						<p class="paragraph"><?php echo $section9['paragraph']; ?></p>
					</div>
				</section>
				<section id="nineB">
					<div id="scrollLine">
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h3>2013</h3>
								<p>Founding of Motius. Office in Munich and Muscat Oman</p>
							</div>
						</div>
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h3>2014</h3>
								<p>BMW as first major customer</p>
							</div>
						</div>
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h3>2016</h3>
								<p>Mai, 500 Motees in the Talent Pool</p>
							</div>
						</div>
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h3>2017</h3>
								<p>Opening of Office in Dubai and Stuttgart 150 Finished Projects</p>
							</div>
						</div>
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h3>2018</h3>
								<p>Ranked #1 Fastest growing service provider in Germany</p>
							</div>
						</div>
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h3>2019</h3>
								<p>50 Core Team Employees<br>
									800 Motees in the Talent Pool<br>
									300 finished Projects  Investment by Swiss Family Office</p>
							</div>
						</div>
						<div class="element">
							<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg');">
							</div>
							<div class="right" data-aos="fade-left">
								<h2>2020</h2>
								<p>FunKI Research Project<br>
									Research Project: Plattform ?</p>
							</div>
						</div>
					</div>
				</section>
				<!-- <section id="nineB">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
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
									<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/Screen-Shot-2020-08-08-at-22.08-1.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section> -->
			<?php endif; ?>
		<?php
			$section10 = get_field('section10');
			if( $section10 ): ?>
				<section id="ten">
					<h2 class="section-title" data-aos="fade-right"><span id="blueWord">Motius</span> <br>in Numbers</h2>
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
