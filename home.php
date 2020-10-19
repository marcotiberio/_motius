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
					<h3>Title 1</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/block1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>Title 2</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/block2.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>Title 3</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
						electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
						Aldus PageMaker including versions of Lorem Ipsum.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/block3.png" alt="random" width="700" height="700" />
				</div>
			</div>
		</section>
		<section class="two-columns" id="five" data-aos="fade-down">
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
									<p class="type"><?php the_field('type'); ?></p>
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
				$section9 = get_field('section9', 2);
				if( $section9 ): ?>
					<div class="color-blocks">
						<div class="left" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
						<img src="<?php echo esc_url( $section9['image_left']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image_left']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_left']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section9['header_left']; ?></h3>
								<p class="paragraph"><?php echo $section9['paragraph_left']; ?></p>
							</div>
							<button id="blockButton">Contact Us</button>
						</div>
						<div class="right" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
							<img src="<?php echo esc_url( $section9['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image_right']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_right']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section9['header_right']; ?></h3>
								<p class="paragraph"><?php echo $section9['paragraph_right']; ?></p>
							</div>
							<button id="blockButton">Work with us</button>
						</div>
					</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
