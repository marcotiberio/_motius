<?php
/**
 * Template Name: Companies
 *
 * This is the Companies template
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
						<div class="block" onclick="window.location.href='<?php echo $section1['button_link']; ?>'" style="background-color:<?php echo $section1['background_color_block']; ?>">
							<p class="header-block"><?php echo $section1['header_block']; ?></p>
							<p class="paragraph-block"><?php echo $section1['paragraph_block']; ?></p>
							<div class="arrow-icon">
								<svg id="arrow" width="54" height="43" viewBox="0 0 54 43" fill="none">
									<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
								</svg>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>
		</section>
		<section id="two" data-aos="fade-down" data-aos-duration="300">
			<h3 class="section-title">Fields of <span id="blueWord">Expertise</span></h3>
			<p class="paragraph">To keep up with rapid technological change our fields of expertise are always evolving.  
			Here’s an overview of the technologies we’re currently working with and respective use cases 
			that we’ve brought to life.</p>
			<?php if( have_rows('fields_of_expertise') ): ?>
				<div class="grid-3">
				<?php while( have_rows('fields_of_expertise') ): the_row(); 

					// Load sub field value.
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$categorylink = get_sub_field('category_link');
					?>
					<div class="flip-card" onclick="window.location.href='<?php the_sub_field('category_link'); ?>'">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img class="icon" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
								<p class="title"><?php the_sub_field('title'); ?></p>
							</div>
							<div class="flip-card-back">
								<p class="title"><?php the_sub_field('title'); ?></p>
								<ul>
									<li><?php the_sub_field('bullet_point1'); ?></li>
									<li><?php the_sub_field('bullet_point2'); ?></li>
									<li><?php the_sub_field('bullet_point3'); ?></li>
								</ul>
								<svg id="arrow" width="54" height="43" viewBox="0 0 54 43" fill="none">
									<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#383E4E"/>
								</svg>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<section id="three">
			<h2 class="section-title">How We <span id="blueWord">Work?</span></h2>
			<div id="scrollLine">
				<div class="element">
					<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/cube.png');">
					</div>
					<div class="right" data-aos="fade-left">
						<h2>1</h2>
						<h5>Kicking things off</h5>
						<p>No matter how well defined your project idea is, we can work it out together. 
							We can start with an existing problem, an existing product that you want to 
							improve or just some rough ideas and requirements.
						</p>
					</div>
				</div>
				<div class="element">
					<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/cube.png');">
					</div>
					<div class="right" data-aos="fade-left">
						<h2>2</h2>
						<h5>Thinking Together</h5>
						<p>No matter how well defined your project idea is, we can work it out together. 
							We can start with an existing problem, an existing product that you want to 
							improve or just some rough ideas and requirements.
						</p>
					</div>
				</div>
				<div class="element">
					<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/cube.png');">
					</div>
					<div class="right" data-aos="fade-left">
						<h2>3</h2>
						<h5>Team Matching</h5>
						<p>No matter how well defined your project idea is, we can work it out together. 
							We can start with an existing problem, an existing product that you want to 
							improve or just some rough ideas and requirements.
						</p>
					</div>
				</div>
				<div class="element">
					<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/cube.png');">
					</div>
					<div class="right" data-aos="fade-left">
						<h2>4</h2>
						<h5>Innovation &Agile Development</h5>
						<p>No matter how well defined your project idea is, we can work it out together. 
							We can start with an existing problem, an existing product that you want to 
							improve or just some rough ideas and requirements.
						</p>
					</div>
				</div>
				<div class="element">
					<div class="left" data-aos="fade-right" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/cube.png');">
					</div>
					<div class="right" data-aos="fade-left">
						<h2>5</h2>
						<h5>Implementation & Support</h5>
						<p>No matter how well defined your project idea is, we can work it out together. 
							We can start with an existing problem, an existing product that you want to 
							improve or just some rough ideas and requirements.
						</p>
					</div>
				</div>
			</div>
		</section>
		<h2 class="section-title-mobile">How it <span id="blueWord">Works?</span></h2>
		<section id="threeMobile" style="background-image: url('http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/scrollline.png');">
			<div id="scrollLine">
				<div class="element" data-aos="fade-right">
					<h2>2013</h2>
					<h5>Kicking things off</h5>
					<p>No matter how well defined your project idea is, we can work it out together. 
						We can start with an existing problem, an existing product that you want to 
						improve or just some rough ideas and requirements.
					</p>
				</div>
				<div class="element" data-aos="fade-right">
					<h2>2013</h2>
					<h5>Kicking things off</h5>
					<p>No matter how well defined your project idea is, we can work it out together. 
						We can start with an existing problem, an existing product that you want to 
						improve or just some rough ideas and requirements.
					</p>
				</div>
				<div class="element" data-aos="fade-right">
					<h2>2013</h2>
					<h5>Kicking things off</h5>
					<p>No matter how well defined your project idea is, we can work it out together. 
						We can start with an existing problem, an existing product that you want to 
						improve or just some rough ideas and requirements.
					</p>
				</div>
				<div class="element" data-aos="fade-right">
					<h2>2013</h2>
					<h5>Kicking things off</h5>
					<p>No matter how well defined your project idea is, we can work it out together. 
						We can start with an existing problem, an existing product that you want to 
						improve or just some rough ideas and requirements.
					</p>
				</div>
			</div>
		</section>
		<section id="four" class="two-columns-list">
			<h2 class="section-title" data-aos="fade-right">Benefits in a sentence formatting</h2>
			<?php if( have_rows('section4') ): ?>
				<ul>
				<?php while( have_rows('section4') ): the_row(); 

					// Load sub field value.
					$iconlist = get_sub_field('icon_list');
					$headerlist = get_sub_field('header_list');
					$paragraphlist = get_sub_field('paragraph_list');
					?>
					
						<li data-aos="fade-left">
							<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
							<p class="header-list"><?php the_sub_field('header_list'); ?></p>
							<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
						</li>

				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</section>
		<?php
			$section5 = get_field('section5');
			if( $section5 ): ?>
				<section id="five" data-aos="zoom-in">
					<div class="two-columns-text">
						<h2 class="header">Matching the best fitting experts from <span id="blueWord">our Talent Pool</span></h2>
						<p class="paragraph"><?php echo $section5['paragraph']; ?></p>
					</div>
					<img class="bounce" src="<?php echo esc_url( $section5['image']['url'] ); ?>" alt="<?php echo esc_attr( $section5['image']['alt'] ); ?>" />
					<div class="clients">
						<p> Clients we work with</p>
						<div class="grid-6">
							<img src="<?php echo esc_url( $section5['client1']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client1']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client2']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client2']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client3']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client3']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client4']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client4']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client5']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client5']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client6']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client6']['alt'] ); ?>" />
						</div>
					</div>
				</section>
			<?php endif; ?>
		<section id="six" class="two-columns-list">
			<h2 class="section-title" data-aos="fade-right">Bringing your idea to a final product</h2>
			<?php if( have_rows('section6') ): ?>
				<ul>
				<?php while( have_rows('section6') ): the_row(); 

					// Load sub field value.
					$iconlist = get_sub_field('icon_list');
					$headerlist = get_sub_field('header_list');
					$paragraphlist = get_sub_field('paragraph_list');
					?>
					
						<li data-aos="fade-left">
							<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
							<p class="header-list"><?php the_sub_field('header_list'); ?></p>
							<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
						</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</section>
		<section id="seven">
			<div class="carousel" data-flickity='{ "wrapAround": true }'>
				<?php if( have_rows('testimonials') ): ?>
					<?php while( have_rows('testimonials') ): the_row(); 

						// Load sub field value.
						$image = get_sub_field('image');
						$quote = get_sub_field('quote');
						$testimonial_name = get_sub_field('testimonial_name');
						$testimonial_position = get_sub_field('testimonial_position');
						$testimonial_company_logo = get_sub_field('testimonial_company_logo');
						?>
						<div class="testimonial-card carousel-cell">
							<div class="inner">
								<div class="image" style="background-image: url(<?php echo esc_url( $image['url'] ); ?>);"></div>
								<div class="quote">
									<?php the_sub_field('quote'); ?>
									<div class="testimonial-info">
										<div class="personal">
											<p class="testimonial-name"><?php the_sub_field('testimonial_name'); ?></p>
											<p class="testimonial_position"><?php the_sub_field('testimonial_position'); ?></p>
										</div>
										<div class="company">
											<img src="<?php echo esc_url( $testimonial_company_logo['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_company_logo['alt'] ); ?>" />
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
		<section id="eight">
			<div class="post-carousel-header">
				<h2>Success Stories</h2>
				<a href="http://motiusrelaunch.flywheelstaging.com/success-stories/">All Cases -></a>
			</div>
			<div class="post-carousel" data-flickity='{ "wrapAround": true }'>
			<?php 
				$args = array(
					'post_type' => 'success-stories',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 10,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
						<article class="carousel-cell" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<a href="<?php the_permalink(); ?>">
								<div class="event-cover">
									<?php
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( '' );
									endif;
									?>
								</div>
								<div class="event-header">
								<p class="type"><?php the_field('type'); ?></p>
									<a href="<?php the_permalink(); ?>"><h5 class="title"><?php print the_title(); ?></h5></a>
								</div>
							</a>
						</article>
						<?php
					endwhile;
				endif; ?>
			</div>
		</section>
		<?php
			$section9 = get_field('section9', 11);
			if( $section9 ): ?>
				<section class="two-columns" id="nine">
					<div class="text">
						<h2 class="header">Agile Pricing for <span id="blueWord">better innovations</span></h2>
						<p class="paragraph"><?php echo $section9['paragraph']; ?></p>
						<div class="info-note">
							<svg width="19" height="19" viewBox="0 0 19 19" fill="none">
								<path d="M9.5 0C6.98022 0 4.5638 1.00121 2.78255 2.78255C1.0013 4.56389 0 6.98041 0 9.5C0 12.0196 1.00121 14.4362 2.78255 16.2175C4.56389 17.9987 6.98041 19 9.5 19C12.0196 19 14.4362 17.9988 16.2175 16.2175C17.9987 14.4361 19 12.0196 19 9.5C19 6.98041 17.9988 4.5638 16.2175 2.78255C14.4361 1.0013 12.0196 0 9.5 0V0ZM10.6875 14.25H8.3125V8.70808H10.6875V14.25ZM10.6875 7.125H8.3125V4.75H10.6875V7.125Z" fill="#939393" />
							</svg>
							<p><?php echo $section9['info_note']; ?></p>
						</div>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section9['image']['url']); ?>');">
						<button id="blockButton" onclick="window.location.href='http://motiusrelaunch.flywheelstaging.com/contact/'">Contact Us -></button>
					</div>
				</section>
			<?php endif; ?>
		<?php
			$section10 = get_field('section10', 11);
			if( $section10 ): ?>
				<section id="ten">
					<div class="two-columns-text">
						<h2 class="header"><?php echo $section10['header']; ?></h2>
						<p class="paragraph"><?php echo $section10['paragraph']; ?></p>
					</div>
					<img src="<?php echo esc_url( $section10['image']['url'] ); ?>" alt="<?php echo esc_attr( $section10['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>

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
