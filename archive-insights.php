<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

get_header();
?>

	<section id="hero">
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
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
						<div class="event-header">
							<a href="<?php the_permalink(); ?>"><h2 class="title"><?php print the_title(); ?></h2></a>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							<p class="date"><?php echo date('M Y'); ?></p>
							<p><?php the_field('author'); ?></p>
							</div>
					</article>	
					<?php
				endwhile;
			endif; ?>
		</div>
	</section>

	<div class="section-title">
		<h3>Our Blog</h3>
	</div>
	<div class="ourblog-grid">
		<?php echo do_shortcode('[ajax_load_more id="ourblog" loading_style="white" post_type="insights" category="our-blog" category__not_in="16,14" posts_per_page="3" pause="false" scroll="false" button_label="Load more ->" button_loading_label="Loading more..." button_done_label="Nothing left"]'); ?>
	</div>

	<section class="medium">
		<strong>Looking for more personal insights?</strong>
		<p>Are you interested in our culture, team insights, and behind-the-scenes?
		<br>
		Discover why we are the best place for techies.
		</p>
		<a href="https://medium.com/motius-de" target="_blank">Read more -></a>
	</section>

	<div class="section-title">
		<h3>Resources</h3>
	</div>

	<div class="filter">
		<a class="type all active"><span id="bulletCategory">&#8226;</span>All</a>
		<a class="type cheat_sheet"><span id="bulletCategory">&#8226;</span>Cheat Sheet</a>
		<a class="type toolbox"><span id="bulletCategory">&#8226;</span>Toolbox</a>
	</div>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-archive', get_post_type('insights') );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

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
									<input type="text" maxlength="255" name="Email" value="" placeholder="Your Email" fieldType=9 style="color: #666; border: 1px solid #ccc; border-radius: 15px; padding: 1rem; width: 100%; margin-top: 20px;" />
									<button type="submit" style="color: #ffffff; background-color: #28B9DA; border: 1px solid #ccc; border-radius: 10px; padding: 0.6rem; width: 100%; cursor: pointer; margin-top: 10px;"><em>Submit</em></button>
								</form>
							</div>
						</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
