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
					<h3>Re-inventing <span id="blueWord">R&D</span> to stay ahead</h3>
					<p>We believe the rate of technological change is only increasing. Therefore we created our unique 
					fluid structure to bring together the best tech talent and experienced leaders allowing us to 
					focus on the newest technologies of any occurring tech cycle.
					This way, we can always stay ahead.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/block1.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>Our <span id="blueWord">talent pool</span> brings the newest tech know-how</h3>
					<p>Our fluid structure with a built-in turnover rate of 3-5 years is the key to keep up with rapid 
					technological change. By constantly attracting the best tech talent we are able to develop 
					cutting-edge products and innovative prototypes for companies that want to stay ahead.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/block2.png" alt="random" width="700" height="700" />
				</div>
				<div class="point">
					<article>
					<h3>The core team ensures high quality and <span id="blueWord">long term experience</span></h3>
					<p>We created a core team around key technologies to assure long-term knowledge transfer. The team is responsible 
					for project management, lead engineering and business impact. This way, we can take full care of all your needs.</p>
					</article>
					<img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/block3.png" alt="random" width="700" height="700" />
				</div>
			</div>
		</section>
		<section class="two-columns" id="five" data-aos="fade-right">
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
		<?php
			$section5 = get_field('section5', 11);
			if( $section5 ): ?>
				<section id="seven" data-aos="zoom-in">
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
		<section class="two-columns" id="ten" data-aos="fade-up">
			<?php
				$section10 = get_field('section10', 2);
				if( $section10 ): ?>
						<div class="text">
							<h2>Don’t miss any <span id="blueWord">Insights</span> and keep up with the tech trends<h2>
						</div>
						<div class="text">
							<?php echo $section10['text_right']; ?>
							<div class="contact-form">
								<!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
								<form action='https://forms.zohopublic.eu/louismappes/form/TestDev/formperma/2RFkPD8OjDVpVWGbyRT1P_odwyIg8BsUWVSnDt8Nc18/htmlRecords/submit' name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'>
									<input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
									<input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
									<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
									<p></p>
									<!--Email-->
									<input type="text" maxlength="255" name="Email" value="" placeholder="Your Email" fieldType=9 style="color: #666; border: 1px solid #ccc; border-radius: 15px; padding: 1rem; width: 50%;" />
									<button type="submit" style="color: #ffffff; background-color: #28B9DA; border: 1px solid #ccc; border-radius: 10px; padding: 0.6rem; margin-left: -13%; cursor: pointer;"><em>Submit</em></button>
								</form>
							</div>
						</div>
				<?php endif; ?>
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
							<button id="blockButton" onclick="window.location.href='<?php echo $section9['contactus_link']; ?>'">Contact Us</button>
						</div>
						<div class="right" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
							<img src="<?php echo esc_url( $section9['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image_right']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_right']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section9['header_right']; ?></h3>
								<p class="paragraph"><?php echo $section9['paragraph_right']; ?></p>
							</div>
							<button id="blockButton" onclick="window.location.href='<?php echo $section9['workwithus_link']; ?>'">Work with us</button>
						</div>
					</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
