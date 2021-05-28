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
					<div class="text">
						<?php echo $section2['text']; ?>
					</div>
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
						<?php the_field('our_core_values'); ?>
					</article>
					<img src="/wp-content/uploads/2020/12/cake1-1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
						<?php the_field('we_enable'); ?>
					</article>
					<img src="/wp-content/uploads/2020/12/cake2-1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
						<?php the_field('we_create'); ?>
					</article>
					<img src="/wp-content/uploads/2020/12/cake3-1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
						<?php the_field('we_are_curious'); ?>
					</article>
					<img src="/wp-content/uploads/2020/12/cake4-1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
						<?php the_field('we_are_community_driven'); ?>
					</article>
					<img src="/wp-content/uploads/2020/12/cake5-1.png" alt="random" width="700" height="700" />
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
			<h3 class="section-title"><?php the_field('section8_title'); ?></h3>
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
						<h2 class="header"><?php echo $section9['title']; ?></h2>
						<p class="paragraph"><?php echo $section9['paragraph']; ?></p>
					</div>
				</section>
				<section id="nineB">
					<div id="scrollLine">

						<?php if( have_rows('section9b') ): ?>
							<?php while( have_rows('section9b') ): the_row(); 

								// Load sub field value.
								$image = get_sub_field('image');
								$year = get_sub_field('year');
								$text = get_sub_field('text');
								?>
							
							<div class="element aboutTimeline">
								<div class="left" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
								</div>					
								<div class="right">
									<svg class="blueDot" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve"><circle class="svgDot" cx="5" cy="5" r="5"/></svg>
									<div class="textBlock">
										<h3><?php the_sub_field('year'); ?></h3>
										<p><?php the_sub_field('text'); ?></p>
									</div>					
								</div>
							</div>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>
			<?php endif; ?>
		<?php
			$section10 = get_field('section10');
			if( $section10 ): ?>
				<section id="ten" class="animated fadeInRight duration1 eds-on-scroll">
					<h2 class="section-title"><?php echo $section10['title']; ?></h2>
					<div class="grid-6">
						<div class="top-left">
							<h1 class="number"><?php echo $section10['top_left_number']; ?></h1>
							<p class="text"><?php echo $section10['top_left_text']; ?></h1>
						</div>
						<div class="top-center">
							<h1 class="number"><?php echo $section10['top_center_number']; ?></h1>
							<p class="text"><?php echo $section10['top_center_text']; ?></h1>
						</div>
						<div class="top-right">
							<h1 class="number"><?php echo $section10['top_right_number']; ?></h1>
							<p class="text"><?php echo $section10['top_right_text']; ?></h1>
						</div>
						<div class="bottom-left">
							<h1 class="number"><?php echo $section10['bottom_left_number']; ?></h1>
							<p class="text"><?php echo $section10['bottom_left_text']; ?></h1>
						</div>
						<div class="bottom-center">
							<h1 class="number"><?php echo $section10['bottom_center_number']; ?></h1>
							<p class="text"><?php echo $section10['bottom_center_text']; ?></h1>
						</div>
						<div class="bottom-right">
							<h1 class="number"><?php echo $section10['bottom_right_number']; ?></h1>
							<p class="text"><?php echo $section10['bottom_right_text']; ?></h1>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<section id="eleven">
			<h2 class="section-title animated fadeInRight duration1 eds-on-scroll"><?php the_field('section11_title'); ?></h2>
			<?php if( have_rows('section11') ): ?>
				<div class="grid-3">
				<?php while( have_rows('section11') ): the_row(); 

					// Load sub field value.
					$photo = get_sub_field('photo');
					$title = get_sub_field('title');
					$subtitle = get_sub_field('subtitle');
					?>
					<div class="card">
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
