<?php
/**
 * Template Name: Home
 *
 * This is the Home template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="one">
			<?php 
				$heroimage = get_field('heroimage');
				if( !empty( $heroimage ) ): ?>
					<img id="heroImage" src="<?php echo esc_url($heroimage['url']); ?>" alt="<?php echo esc_attr($heroimage['alt']); ?>" />
				<?php endif; ?>
			<div class="color-blocks">
				<?php
					$section1 = get_field('section1');
					if( $section1 ): ?>
							<div class="left">
								<div class="info"><?php echo $section1['text_left']; ?></div>
							</div>
							<div class="right">
								<div class="info"><?php echo $section1['text_right']; ?></div>
							</div>
					<?php endif; ?>
			</div>
		</section>
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section class="two-columns" id="two" data-aos="fade-up" data-aos-duration="3000">
					<div class="text">
						<h2 class="header"><?php echo $section2['header']; ?></h2>
						<p class="paragraph"><?php echo $section2['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section2['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		<?php
			$section3 = get_field('section3');
			if( $section3 ): ?>
				<section class="two-columns" id="three" data-aos="fade-up" data-aos-duration="3000">
					<div class="text">
						<h2 class="header"><?php echo $section3['header']; ?></h2>
						<p class="paragraph"><?php echo $section3['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section3['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		<?php
			$section4 = get_field('section4');
			if( $section4 ): ?>
				<section class="two-columns" id="four" data-aos="fade-up" data-aos-duration="3000">
					<div class="text">
						<h2 class="header"><?php echo $section4['header']; ?></h2>
						<p class="paragraph"><?php echo $section4['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section4['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		</section>
		<section class="two-columns" id="five">
			<?php
				$section5 = get_field('section5');
				if( $section5 ): ?>
						<div class="text">
							<?php echo $section5['text_left']; ?>
						</div>
						<div class="text">
							<?php echo $section5['text_right']; ?>
						</div>
				<?php endif; ?>
		</section>
		<section id="fiveB">
			<div class="carousel" data-flickity='{ "wrapAround": true }'>
				<?php if( have_rows('fields_of_expertise', 11) ): ?>
					<?php while( have_rows('fields_of_expertise', 11) ): the_row(); 

						// Load sub field value.
						$icon = get_sub_field('icon');
						$title = get_sub_field('title');
						?>
						<div class="flip-card carousel-cell">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img class="icon" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									<p class="title"><?php the_sub_field('title'); ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
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
									<p class="category"><?php the_category(); ?></p>
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
				<!-- clients -->
		</section>
		<section id="eight">
		<div class="post-carousel-header">
			<h2>Insights</h2>
			<a href="http://motius.local/insights/">All Insights -></a>
		</div>
		<div class="post-carousel" data-flickity='{ "wrapAround": true }'>
			<?php 
				$args = array(
					'post_type' => 'insights',
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
						<article class="carousel-cell" id="post-<?php the_ID(); ?>" style="background-color:<?php the_field('background_color'); ?>" <?php post_class(); ?>>
							<a href="<?php the_permalink(); ?>">
								<div class="event-cover">
									<?php
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( '' );
									endif;
									?>
								</div>
								<div class="event-header">
									<a href="<?php the_permalink(); ?>"><h5 class="title"><?php print the_title(); ?></h5></a>
									<p class="category"><?php the_category(); ?></p>
									<p class="date"><?php echo date('M Y'); ?></p>
									<p><?php the_field('author'); ?></p>
								</div>
							</a>
						</article>	
						<?php
					endwhile;
				endif; ?>
			</div>
		</section>
		<section id="nine">
			<?php
				$section9 = get_field('section9');
				if( $section9 ): ?>
					<div class="color-blocks">
						<div class="left">
						<img src="<?php echo esc_url( $section9['image_left']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image_left']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_left']; ?></div>
							<div class="info">
								<h2 class="header"><?php echo $section9['header_left']; ?></h2>
								<p class="paragraph"><?php echo $section9['paragraph_left']; ?></p>
							</div>
						</div>
						<div class="right">
							<img src="<?php echo esc_url( $section9['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image_right']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_right']; ?></div>
							<div class="info">
								<h2 class="header"><?php echo $section9['header_right']; ?></h2>
								<p class="paragraph"><?php echo $section9['paragraph_right']; ?></p>
							</div>
						</div>
					</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
