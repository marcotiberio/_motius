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
		<section class="" id="one" data-color="light-blue">
			<?php
				$section1 = get_field('section1');
				if( $section1 ): ?>
						<div class="hero-text panel" data-color="light-blue">
							<h1 class="header"><?php echo $section1['header']; ?></h1>
							<p class="paragraph"><?php echo $section1['paragraph']; ?></p>
							<a class="block" href="/contact/" style="background-color:<?php echo $section1['background_color_block']; ?>">
								<p class="header-block"><?php echo $section1['header_block']; ?></p>
								<p class="paragraph-block"><?php echo $section1['paragraph_block']; ?></p>
								<div class="arrow-icon">
									<svg id="arrowSx" width="54" height="43" viewBox="0 0 54 43" fill="none">
										<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#000000"/>
									</svg>
									<svg id="arrowDx" width="54" height="43" viewBox="0 0 54 43" fill="none">
										<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#000000"/>
									</svg>
								</div>
							</a>
						</div>
				<?php endif; 
			?>
		
			<div class="panel" data-color="white" id="two">
				<?php
					$section2 = get_field('section2');
					if( $section2 ): ?>
							<h3 class="section-title"><?php echo $section2['title']; ?></h3>
							<p class="paragraph"><?php echo $section2['text']; ?></p>
					<?php endif; 
				?>
				
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
									<p class="title"><span id="bullet" style="display: none;">&#8226;</span><?php the_sub_field('title'); ?></p>
								</div>
								<div class="flip-card-back">
									<p class="title"><span id="bullet" color="#28B9DA">&#8226;</span><?php the_sub_field('title'); ?></p>
									<ul>
										<li><span>
												<svg width="18" height="18" viewBox="0 0 18 18" fill="none">
													<path d="M17.7188 9.25C17.7188 7.70312 17.2969 6.22656 16.5234 4.89062C15.75 3.55469 14.6953 2.5 13.3594 1.72656C12.0234 0.953125 10.5469 0.53125 9 0.53125C7.41797 0.53125 5.97656 0.953125 4.64062 1.72656C3.30469 2.5 2.21484 3.55469 1.44141 4.89062C0.667969 6.22656 0.28125 7.70312 0.28125 9.25C0.28125 10.832 0.667969 12.2734 1.44141 13.6094C2.21484 14.9453 3.30469 16.0352 4.64062 16.8086C5.97656 17.582 7.41797 17.9688 9 17.9688C10.5469 17.9688 12.0234 17.582 13.3594 16.8086C14.6953 16.0352 15.75 14.9453 16.5234 13.6094C17.2969 12.2734 17.7188 10.832 17.7188 9.25ZM7.98047 13.8555C7.875 13.9961 7.73438 14.0312 7.59375 14.0312C7.41797 14.0312 7.27734 13.9961 7.20703 13.8555L3.55078 10.1992C3.41016 10.1289 3.375 9.98828 3.375 9.8125C3.375 9.67188 3.41016 9.53125 3.55078 9.42578L4.32422 8.61719C4.42969 8.51172 4.57031 8.44141 4.71094 8.44141C4.85156 8.44141 4.99219 8.51172 5.13281 8.61719L7.59375 11.0781L12.8672 5.80469C12.9727 5.69922 13.1133 5.62891 13.2539 5.62891C13.3945 5.62891 13.5352 5.69922 13.6758 5.80469L14.4492 6.61328C14.5547 6.71875 14.625 6.85938 14.625 7C14.625 7.17578 14.5547 7.31641 14.4492 7.38672L7.98047 13.8555Z" fill="#383E4E"/>
												</svg>
											</span>
											<?php the_sub_field('bullet_point1'); ?>
										</li>
										<li><span>
												<svg width="18" height="18" viewBox="0 0 18 18" fill="none">
													<path d="M17.7188 9.25C17.7188 7.70312 17.2969 6.22656 16.5234 4.89062C15.75 3.55469 14.6953 2.5 13.3594 1.72656C12.0234 0.953125 10.5469 0.53125 9 0.53125C7.41797 0.53125 5.97656 0.953125 4.64062 1.72656C3.30469 2.5 2.21484 3.55469 1.44141 4.89062C0.667969 6.22656 0.28125 7.70312 0.28125 9.25C0.28125 10.832 0.667969 12.2734 1.44141 13.6094C2.21484 14.9453 3.30469 16.0352 4.64062 16.8086C5.97656 17.582 7.41797 17.9688 9 17.9688C10.5469 17.9688 12.0234 17.582 13.3594 16.8086C14.6953 16.0352 15.75 14.9453 16.5234 13.6094C17.2969 12.2734 17.7188 10.832 17.7188 9.25ZM7.98047 13.8555C7.875 13.9961 7.73438 14.0312 7.59375 14.0312C7.41797 14.0312 7.27734 13.9961 7.20703 13.8555L3.55078 10.1992C3.41016 10.1289 3.375 9.98828 3.375 9.8125C3.375 9.67188 3.41016 9.53125 3.55078 9.42578L4.32422 8.61719C4.42969 8.51172 4.57031 8.44141 4.71094 8.44141C4.85156 8.44141 4.99219 8.51172 5.13281 8.61719L7.59375 11.0781L12.8672 5.80469C12.9727 5.69922 13.1133 5.62891 13.2539 5.62891C13.3945 5.62891 13.5352 5.69922 13.6758 5.80469L14.4492 6.61328C14.5547 6.71875 14.625 6.85938 14.625 7C14.625 7.17578 14.5547 7.31641 14.4492 7.38672L7.98047 13.8555Z" fill="#383E4E"/>
												</svg>
											</span><?php the_sub_field('bullet_point2'); ?></li>
										<li><span>
												<svg width="18" height="18" viewBox="0 0 18 18" fill="none">
													<path d="M17.7188 9.25C17.7188 7.70312 17.2969 6.22656 16.5234 4.89062C15.75 3.55469 14.6953 2.5 13.3594 1.72656C12.0234 0.953125 10.5469 0.53125 9 0.53125C7.41797 0.53125 5.97656 0.953125 4.64062 1.72656C3.30469 2.5 2.21484 3.55469 1.44141 4.89062C0.667969 6.22656 0.28125 7.70312 0.28125 9.25C0.28125 10.832 0.667969 12.2734 1.44141 13.6094C2.21484 14.9453 3.30469 16.0352 4.64062 16.8086C5.97656 17.582 7.41797 17.9688 9 17.9688C10.5469 17.9688 12.0234 17.582 13.3594 16.8086C14.6953 16.0352 15.75 14.9453 16.5234 13.6094C17.2969 12.2734 17.7188 10.832 17.7188 9.25ZM7.98047 13.8555C7.875 13.9961 7.73438 14.0312 7.59375 14.0312C7.41797 14.0312 7.27734 13.9961 7.20703 13.8555L3.55078 10.1992C3.41016 10.1289 3.375 9.98828 3.375 9.8125C3.375 9.67188 3.41016 9.53125 3.55078 9.42578L4.32422 8.61719C4.42969 8.51172 4.57031 8.44141 4.71094 8.44141C4.85156 8.44141 4.99219 8.51172 5.13281 8.61719L7.59375 11.0781L12.8672 5.80469C12.9727 5.69922 13.1133 5.62891 13.2539 5.62891C13.3945 5.62891 13.5352 5.69922 13.6758 5.80469L14.4492 6.61328C14.5547 6.71875 14.625 6.85938 14.625 7C14.625 7.17578 14.5547 7.31641 14.4492 7.38672L7.98047 13.8555Z" fill="#383E4E"/>
												</svg>
											</span><?php the_sub_field('bullet_point3'); ?></li>
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
			</div>
		</section>

		<section id="three">

			<h2 class="section-title"><?php the_field('section3_title'); ?></h2>
			<div id="scrollLine">
				<?php if( have_rows('section3') ): ?>
					<?php while( have_rows('section3') ): the_row(); 

						// Load sub field value.
						$image = get_sub_field('image');
						$number = get_sub_field('number');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						?>
					
					<div class="element aboutTimeline">
						<div class="left" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
						</div>					
						<div class="right">
							<svg class="blueDot" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve"><circle class="svgDot" cx="5" cy="5" r="5" fill="#ffffff" stroke-width="1"/></svg>								
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
						?>
						
							<li class="animated fadeInRight duration1 eds-on-scroll">
								<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
								<p class="header-list"><?php the_sub_field('header_list'); ?></p>
								<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
							</li>

					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</section>
		<?php
			$section5 = get_field('section5');
			if( $section5 ): ?>
				<section id="five">
					<div class="two-columns-text">
						<h2 class="header animated fadeInLeft duration1 eds-on-scroll"><?php echo $section5['title']; ?></h2>
						<p class="paragraph animated fadeInRight duration1 eds-on-scroll"><?php echo $section5['paragraph']; ?></p>
					</div>
					<img class="bounce" src="<?php echo esc_url( $section5['image']['url'] ); ?>" alt="<?php echo esc_attr( $section5['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>
					
		<section id="fiveB">
			<h6><?php the_field('clients_section_title', 2); ?></h6>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php if( have_rows('clients_container', 2) ): ?>
							<?php while( have_rows('clients_container', 2) ): the_row(); 

								// Load sub field value.
								$logo = get_sub_field('logo');
								?>
								<div class="swiper-slide">
									<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
								</div>
								
							<?php endwhile; ?>
						<?php endif; ?>
					<div>
				</div>
		</section>


			
		<section id="six">
			<h2 class="section-title"><?php the_field('section6_title'); ?></h2>
			<div class="two-columns-list">
				<?php if( have_rows('section6') ): ?>
					<ul>
					<?php while( have_rows('section6') ): the_row(); 

						// Load sub field value.
						$iconlist = get_sub_field('icon_list');
						$headerlist = get_sub_field('header_list');
						$paragraphlist = get_sub_field('paragraph_list');
						?>
						
							<li class="animated fadeInRight duration1 eds-on-scroll">
								<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
								<p class="header-list"><?php the_sub_field('header_list'); ?></p>
								<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
							</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
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
									<p><?php the_sub_field('quote'); ?></p>
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
			<?php
				$success_stories_carousel = get_field('success_stories_carousel', 11);
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
		<?php
			$section9 = get_field('section9', 11);
			if( $section9 ): ?>
				<section class="two-columns" id="nine">
					<div class="text">
						<h2 class="header"><?php echo $section9['title']; ?></h2>
						<p class="paragraph"><?php echo $section9['paragraph']; ?></p>
						<div class="info-note">
							<svg width="19" height="19" viewBox="0 0 19 19" fill="none">
								<path d="M9.5 0C6.98022 0 4.5638 1.00121 2.78255 2.78255C1.0013 4.56389 0 6.98041 0 9.5C0 12.0196 1.00121 14.4362 2.78255 16.2175C4.56389 17.9987 6.98041 19 9.5 19C12.0196 19 14.4362 17.9988 16.2175 16.2175C17.9987 14.4361 19 12.0196 19 9.5C19 6.98041 17.9988 4.5638 16.2175 2.78255C14.4361 1.0013 12.0196 0 9.5 0V0ZM10.6875 14.25H8.3125V8.70808H10.6875V14.25ZM10.6875 7.125H8.3125V4.75H10.6875V7.125Z" fill="#939393" />
							</svg>
							<p><?php echo $section9['info_note']; ?></p>
						</div>
					</div>
					<div class="image">
						<img src="<?php echo esc_url($section9['image']['url']); ?>" alt="">
						<button id="blockButton" onclick="window.location.href='/contact/'">Contact Us</button>
					</div>
				</section>
			<?php endif; ?>
		
		<?php
		$section10 = get_field('section10', 11);
		if( $section10 ): ?>
			<section id="ten">
				<div class="two-columns-flex">
					<h2 class="header"><?php echo $section10['title']; ?></h2>
					<?php echo $section10['paragraph']; ?>
				</div>
				<div class="grid-4">
					<div class="top-left">
						<h1 class="number"><?php echo $section10['top_left_number']; ?></h1>
						<p class="text"><?php echo $section10['top_left_text']; ?></h1>
					</div>
					<div class="top-right">
						<h1 class="number"><?php echo $section10['top_right_number']; ?></h1>
						<p class="text"><?php echo $section10['top_right_text']; ?></h1>
					</div>
					<div class="bottom-left">
						<h1 class="number"><?php echo $section10['bottom_left_number']; ?></h1>
						<p class="text"><?php echo $section10['bottom_left_text']; ?></h1>
					</div>
					<div class="bottom-right">
						<h1 class="number"><?php echo $section10['bottom_right_number']; ?></h1>
						<p class="text"><?php echo $section10['bottom_right_text']; ?></h1>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<section class="two-columns" id="eleven">
			<?php
				$section11 = get_field('section11', 11);
				if( $section11 ): ?>
						<div class="text">
							<h1><?php echo $section11['text_left']; ?><h1>
						</div>
						<div class="text">
							<?php echo $section11['text_right']; ?>
							<a class="block" href="/contact/" style="background-color:<?php echo $section11['background_color_block']; ?>">
								<p class="header-block"><?php echo $section11['header_block']; ?></p>
								<p class="paragraph-block"><?php echo $section11['paragraph_block']; ?></p>
								<div class="arrow-icon">
									<svg id="arrowSx" width="54" height="43" viewBox="0 0 54 43" fill="none">
										<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#000000"/>
									</svg>
									<svg id="arrowDx" width="54" height="43" viewBox="0 0 54 43" fill="none">
										<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#000000"/>
									</svg>
								</div>
							</a>
						</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->
	

<?php
get_sidebar();
get_footer();
