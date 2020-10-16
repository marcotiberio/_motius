<?php
/**
 * Template Name: Talents
 *
 * This is the Talents template
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
						<div class="block" style="background-color:<?php echo $section1['background_color_block']; ?>">
							<p class="header-block"><?php echo $section1['header_block']; ?></p>
							<p class="paragraph-block"><?php echo $section1['paragraph_block']; ?></p>
						</div>
					</div>
				</section>
			<?php endif; ?>
		</section>
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section id="two">
					<div class="two-columns-text">
						<h2 class="header" data-aos="fade-right"><?php echo $section2['header']; ?></h2>
						<p class="paragraph" data-aos="fade-left"><?php echo $section2['paragraph']; ?></p>
					</div>
					<div class="color-blocks">
						<div class="left" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
						<img src="<?php echo esc_url( $section2['image_left']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image_left']['alt'] ); ?>" />
							<div class="label"><?php echo $section2['label_left']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section2['header_left']; ?></h3>
								<p class="paragraph"><?php echo $section2['paragraph_left']; ?></p>
							</div>
							<button id="blockButton">Apply Now</button>
						</div>
						<div class="right" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
							<img src="<?php echo esc_url( $section2['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image_right']['alt'] ); ?>" />
							<div class="label"><?php echo $section2['label_right']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section2['header_right']; ?></h3>
								<p class="paragraph"><?php echo $section2['paragraph_right']; ?></p>
							</div>
							<button id="blockButton">Apply Now</button>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<section id="three">
			<!-- tab switch timeline -->
		</section>
		<section id="four" class="two-columns-list">
			<h3 class="section-title" data-aos="fade-right">How We Work</h3>
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
				<button id="blockButton">Contact Us -></button>
				</ul>
			<?php endif; ?>
		</section>
		<section id="five">
			<h3 class="section-title">Benefits of Working with Motius</h3>
			<?php if( have_rows('section5') ): ?>
				<div class="grid-3">
				<?php while( have_rows('section5') ): the_row(); 

					// Load sub field value.
					$photo = get_sub_field('photo');
					$title = get_sub_field('title');
					?>
					<div class="card" data-aos="flip-left">
						<img class="photo" src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
						<p class="title"><?php the_sub_field('title'); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<section id="six">
			<div class="post-carousel-header">
				<h2>Success Stories</h2>
				<a href="http://motius.local/success-stories/">All Cases -></a>
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
		<section id="seven">
			<h3 class="section-title">Jobs at Motius</h3>
			<!-- job list -->
			<div id='bzOpeningsContainer'></div>
			<script src='https://motius.breezy.hr/embed/js?inline=true&group_by=dept'></script>
		</section>
		<?php
			$section8 = get_field('section8', 13);
			if( $section8 ): ?>
				<section id="eight">
					<div class="two-columns-text-narrow">
						<h2 class="header" data-aos="fade-right"><?php echo $section8['header']; ?></h2>
						<div class="paragraph" data-aos="fade-left">
							<?php echo $section8['paragraph']; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php
			$section9 = get_field('section9', 13);
			if( $section9 ): ?>
				<section id="nine">
					<h2 class="header"><?php echo $section9['header']; ?></h2>
					<img src="<?php echo esc_url( $section9['image']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
