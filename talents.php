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
		<section id="one">
			<?php
				$section1 = get_field('section1');
				if( $section1 ): ?>
					<div class="hero-text panel" data-color="lighter-blue">
						<div class="hero-text">
							<h1 class="header"><?php echo $section1['header']; ?></h1>
							<p class="paragraph"><?php echo $section1['paragraph']; ?></p>
							<a class="block" href="<?php echo $section1['button_link']; ?>" target="_blank" style="background-color:<?php echo $section1['background_color_block']; ?>">
								<p class="header-block"><?php echo $section1['header_block']; ?></p>
								<p class="paragraph-block"><?php echo $section1['paragraph_block']; ?></p>
								<div class="arrow-icon">
									<svg id="arrowSx" width="54" height="43" viewBox="0 0 54 43" fill="none">
										<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
									</svg>
									<svg id="arrowDx" width="54" height="43" viewBox="0 0 54 43" fill="none">
										<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
									</svg>
								</div>
							</a>
						</div>
					</section>
				<?php endif; 
			?>

			<?php
				$section2 = get_field('section2');
				if( $section2 ): ?>
					<div class="panel" data-color="white" id="two">
						<div class="two-columns-text">
							<h3 class="header" data-aos="fade-right"><?php echo $section2['title']; ?></h3>
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
								<button id="blockButton" onclick=" window.open('<?php echo $section2['button_left_link']; ?>','_blank')">Apply Now</button>
							</div>
							<div class="right" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
								<img src="<?php echo esc_url( $section2['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image_right']['alt'] ); ?>" />
								<div class="label"><?php echo $section2['label_right']; ?></div>
								<div class="info">
									<h3 class="header"><?php echo $section2['header_right']; ?></h3>
									<p class="paragraph"><?php echo $section2['paragraph_right']; ?></p>
								</div>
								<button id="blockButton" onclick=" window.open('<?php echo $section2['button_right_link']; ?>','_blank')"><span>Apply Now</span></button>
							</div>
						</div>
					</div>
			<?php endif; ?>
		</section>

		<section id="three">
			<?php
				$howitworks_title = get_field('howitworks_title');
				if( $howitworks_title ): ?>
				<h3 class="section-title"><?php echo $howitworks_title['title']; ?></h3>
					<div class="switch">
						<button class="switch-blue" id="switchTimelineLeft"><h5><?php echo $howitworks_title['button_left']; ?></h5></button>
						<button class="switch-white" id="switchTimelineRight"><h5><?php echo $howitworks_title['button_right']; ?></h5></button>
					</div>
			<?php endif; ?>
			<div id="scrollLineLeft">
				<?php if( have_rows('timeline_left') ): ?>
					<?php while( have_rows('timeline_left') ): the_row(); 

						// Load sub field value.
						$image = get_sub_field('image');
						$number = get_sub_field('number');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						?>
					
					<div class="element talentsTimelineLeft">
						<div class="left" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
						</div>					
						<div class="right">
							<svg class="blueDot" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve"><circle class="svgDot" fill="#ffffff" cx="5" cy="5" r="5"/></svg>
							<div class="textBlock">
								<div class="test">
									<h2><?php the_sub_field('number'); ?></h2>
									<h5 class="textAppear"><?php the_sub_field('title'); ?></h5>
								</div>
								<p class="textAppear"><?php the_sub_field('text'); ?></p>
							</div>					
						</div>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>

				<?php
					$timelineLeftButton = get_field('timelineLeftButton');
					if( $timelineLeftButton ): ?>
						<div class="element talentsTimelineLeft">
							<div></div>
							<div class="timeline-block">
								<a class="block" href="/talent/#jobs" style="background-color: #383e4e;">
									<p class="header-block"><?php echo $timelineLeftButton['header_block']; ?></p>
									<p class="paragraph-block"><?php echo $timelineLeftButton['paragraph_block']; ?></p>
									<div class="arrow-icon">
										<svg id="arrowSx" width="54" height="43" viewBox="0 0 54 43" fill="none">
											<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
										</svg>
										<svg id="arrowDx" width="54" height="43" viewBox="0 0 54 43" fill="none">
											<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
										</svg>
									</div>
								</a>
							</div>
						</div>
					<?php endif; 
				?>
			</div>

			<div id="scrollLineRight">
				<?php if( have_rows('timeline_right') ): ?>
					<?php while( have_rows('timeline_right') ): the_row(); 

						// Load sub field value.
						$image = get_sub_field('image');
						$number = get_sub_field('number');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						?>
					
					<div class="element talentsTimelineRight">
						<div class="left" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
						</div>					
						<div class="right">
							<svg class="blueDot" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve"><circle class="svgDot" cx="5" cy="5" r="5"/></svg>
							<div class="textBlock">
								<div class="test">
									<h2><?php the_sub_field('number'); ?></h2>
									<h5 class="textAppear"><?php the_sub_field('title'); ?></h5>
								</div>
								<p class="textAppear"><?php the_sub_field('text'); ?></p>
							</div>					
						</div>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>
				
				<?php
					$timelineRightButton = get_field('timelineRightButton');
					if( $timelineRightButton ): ?>
						<div class="element talentsTimelineLeft">
							<div></div>
							<div class="timeline-block">
								<a class="block" href="/talents/#jobs">
									<p class="header-block"><?php echo $timelineRightButton['header_block']; ?></p>
									<p class="paragraph-block"><?php echo $timelineRightButton['paragraph_block']; ?></p>
									<div class="arrow-icon">
										<svg id="arrowSx" width="54" height="43" viewBox="0 0 54 43" fill="none">
											<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
										</svg>
										<svg id="arrowDx" width="54" height="43" viewBox="0 0 54 43" fill="none">
											<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#ffffff"/>
										</svg>
									</div>
								</a>
							</div>
						</div>
					<?php endif; 
				?>
			</div>

		</section>

		<section id="four">
			<h2 class="section-title"><?php the_field('section4_title'); ?></h2>
			<div class="two-columns-list">
				<?php if( have_rows('section4') ): ?>
					<ul>
					<?php while( have_rows('section4') ): the_row(); 

						// Load sub field value.
						$iconlist = get_sub_field('icon_list');
						$headerlist = get_sub_field('header_list');
						$paragraphlist = get_sub_field('paragraph_list');
						$buttonlink = get_sub_field('button_link');
						?>
						
							<li class="animated fadeInRight duration1 eds-on-scroll">
								<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
								<p class="header-list"><?php the_sub_field('header_list'); ?></p>
								<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
							</li>
					<?php endwhile; ?>
						<?php
							$howwework_button = get_field('howwework_button');
							if( $howwework_button ): ?>
								<a class="block" href="/about/" style="background-color: #B8E9F4;">
									<p class="header-block"><?php echo $howwework_button['header_block']; ?></p>
									<p class="paragraph-block"><?php echo $howwework_button['paragraph_block']; ?></p>
									<div class="arrow-icon">
										<svg id="arrowSx" width="54" height="43" viewBox="0 0 54 43" fill="none">
											<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#000000"/>
										</svg>
										<svg id="arrowDx" width="54" height="43" viewBox="0 0 54 43" fill="none">
											<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#000000"/>
										</svg>
									</div>
								</a>
							<?php endif; 
						?>
					</ul>
				<?php endif; ?>
			</div>
		</section>
		<section id="five">
			<h2 class="section-title"><?php the_field('benefits_title'); ?></h2>
			<?php if( have_rows('section5') ): ?>
				<div class="grid-3">
				<?php while( have_rows('section5') ): the_row(); 

					// Load sub field value.
					$photo = get_sub_field('photo');
					$title = get_sub_field('title');
					?>
					<div class="card">
						<img class="photo" src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
						<p class="title"><?php the_sub_field('title'); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<section id="six">
			<?php
				$success_stories_carousel = get_field('success_stories_carousel', 13);
				if( $success_stories_carousel ): ?>
					<div class="post-carousel-header">
						<h2><?php echo $success_stories_carousel['header']; ?></h2>
						<a href="<?php echo $success_stories_carousel['url']; ?>"><?php echo $success_stories_carousel['link_text']; ?></a>
					</div>
			<?php endif; ?>
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
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<article class="carousel-cell" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
							<a href="<?php the_permalink(); ?>" class="event-header">
							<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
								<h5 class="title"><?php print the_title(); ?></h5>
							</a> 
						</article>
						<?php
					endwhile;
				endif; ?>
			</div>
		</section>
		<section id="jobs">
			<h2 class="section-title"><?php the_field('jobs_title', 13); ?></h2>
			<!-- job list -->
			<div class="two-columns-list">
				<div id='bzOpeningsContainer'></div>
				<script src='https://motius.breezy.hr/embed/js?inline=true&group_by=dept'></script>
			</div>
		</section>
		<?php
			$section8 = get_field('section8', 13);
			if( $section8 ): ?>
				<section id="eight">
					<div class="two-columns-text-narrow">
						<h2 class="header" data-aos="fade-right"><?php echo $section8['title']; ?></h2>
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
					<h2 class="header"><?php echo $section9['title']; ?></h2>
					<a href="<?php echo $section9['instagram_link']; ?>" target="_blank"><span id="blueWord">@<?php echo $section9['instagram_username']; ?></span></p>
					<img src="<?php echo esc_url( $section9['image']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
