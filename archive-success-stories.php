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

	<?php
		$section_hero = get_field('section_hero', 15);
		if( $section_hero ): ?>
			<section id="hero">
				<div class="hero-text">
					<h1 class="header"><?php echo $section_hero['title']; ?></h1>
					<p class="paragraph"><?php echo $section_hero['intro']; ?></p>
				</div>
			</section>
	<?php endif; ?>

	<div class="button-filters accordion">
		<p>Filters</p>
		<div class="icon-filter">
			<svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
				<path d="M19.4589 14.943V1.65977C19.4589 1.15634 19.0623 0.759766 18.5589 0.759766C18.0555 0.759766 17.6589 1.15634 17.6589 1.65977V14.943C16.3272 15.3396 15.3555 16.563 15.3555 18.0396C15.3555 19.4796 16.3272 20.7396 17.6589 21.0996V24.3762C17.6589 24.8796 18.0555 25.2762 18.5589 25.2762C19.0623 25.2762 19.4589 24.8796 19.4589 24.3762V21.0996C20.7906 20.703 21.7623 19.4796 21.7623 18.0396C21.7623 16.563 20.7906 15.3396 19.4589 14.943ZM18.5589 19.4078C17.7672 19.4078 17.1555 18.7595 17.1555 18.0043C17.1555 17.2478 17.7672 16.5995 18.5589 16.5995C19.3506 16.5995 19.9623 17.2478 19.9623 18.0029C19.9623 18.7595 19.3506 19.4078 18.5589 19.4078Z" fill="black"></path>
				<path d="M12.2597 4.14319V1.65977C12.2597 1.15634 11.8631 0.759766 11.3597 0.759766C10.8563 0.759766 10.4597 1.15634 10.4597 1.65977V4.14319C9.12796 4.53977 8.15625 5.76319 8.15625 7.23977C8.15625 8.67977 9.12796 9.93977 10.4597 10.2998V24.3765C10.4597 24.8799 10.8563 25.2765 11.3597 25.2765C11.8631 25.2765 12.2597 24.8799 12.2597 24.3765V10.2998C13.5914 9.90319 14.5631 8.67977 14.5631 7.23977C14.5631 5.76319 13.5914 4.53977 12.2597 4.14319ZM11.3597 8.60791C10.568 8.60791 9.95625 7.95962 9.95625 7.20449C9.95625 6.44791 10.568 5.79966 11.3597 5.79966C12.1514 5.79966 12.7631 6.44795 12.7631 7.20308C12.7631 7.95966 12.1514 8.60791 11.3597 8.60791Z" fill="black"></path>
				<path d="M4.33975 10.6235V1.66025C4.33975 1.15683 3.94318 0.760254 3.43975 0.760254C2.93633 0.760254 2.53975 1.15683 2.53975 1.66025V10.6235C1.20804 11.0201 0.236328 12.2435 0.236328 13.7201C0.236328 15.1601 1.20804 16.4201 2.53975 16.7801V24.3768C2.53975 24.8803 2.93633 25.2768 3.43975 25.2768C3.94318 25.2768 4.33975 24.8803 4.33975 24.3768V16.7801C5.67146 16.3835 6.64318 15.1601 6.64318 13.7201C6.64318 12.2435 5.67146 11.0201 4.33975 10.6235ZM3.43975 15.0883C2.64804 15.0883 2.03633 14.44 2.03633 13.6848C2.03633 12.9283 2.64804 12.28 3.43975 12.28C4.23146 12.28 4.84318 12.9283 4.84318 13.6834C4.84318 14.44 4.23146 15.0883 3.43975 15.0883Z" fill="black"></path>
			</svg>
		</div>
	</div>
	<div class="filter success-stories-filter panelz">
		<a class="type all active">
			<svg class="blue-word" id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>All</span></a>
		<a class="type artificial_intelligence">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Artificial Intelligence</span></a>
		<a class="type augmented_and_virtual_reality">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Augmented & Virtual Reality</span></a>
		<a class="type internet_of_things">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Internet of Things</span></a>
		<a class="type chatbots">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Chatbots</span></a>
		<a class="type additive_manufacturing">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Additive Manufacturing</span></a>
		<a class="type autonomous_driving">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Autonomous Driving</span></a>
		<a class="type robotics">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Robotics</span></a>
		<a class="type user_centric_design">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>User Centric Design</span></a>
		<a class="type app_and_web_development">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>App and Web Development</span></a>
		<a class="type data_science">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Data Science</span></a>
		<a class="type blockchain">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Blockchain</span></a>
		<a class="type embedded_development">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg><span>Embedded Development</span></a>
	</div>

	<main id="primary" class="site-main">

			<?php 
				$args = array(
					'post_type' => 'success-stories',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<article class="article-centrale <?php the_field('value'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?> onclick="window.location.href='<?php the_permalink(); ?>'">
							<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
							<div class="event-header">
								<div class="top">
									<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
									<h5 class="title" style="">
										<a href="<?php the_permalink(); ?>">
											<?php print the_title(); ?>
										</a>
									</h5>
								</div>
								<div class="bottom">
									<p class="date"><?php the_time( 'M Y' ); ?></p>
									<p class="author"><?php the_field('author'); ?></p>
								</div>
							</div>
						</article><!-- #post-<?php the_ID(); ?> -->
						<?php
					endwhile;
				endif; 
			?>

	</main><!-- #main -->


	

	<?php
		$section_referenceprojects = get_field('section_referenceprojects', 15);
		if( $section_referenceprojects ): ?>
			<div class="secondary-intro">
			<div class="section-title">
				<h3><?php echo $section_referenceprojects['title']; ?></h3>
				<p><?php echo $section_referenceprojects['intro']; ?></p>
			</div>
	<?php endif; ?>

		<div class="button-filters accordion">
			<p>Filters</p>
			<div class="icon-filter">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
					<path d="M19.4589 14.943V1.65977C19.4589 1.15634 19.0623 0.759766 18.5589 0.759766C18.0555 0.759766 17.6589 1.15634 17.6589 1.65977V14.943C16.3272 15.3396 15.3555 16.563 15.3555 18.0396C15.3555 19.4796 16.3272 20.7396 17.6589 21.0996V24.3762C17.6589 24.8796 18.0555 25.2762 18.5589 25.2762C19.0623 25.2762 19.4589 24.8796 19.4589 24.3762V21.0996C20.7906 20.703 21.7623 19.4796 21.7623 18.0396C21.7623 16.563 20.7906 15.3396 19.4589 14.943ZM18.5589 19.4078C17.7672 19.4078 17.1555 18.7595 17.1555 18.0043C17.1555 17.2478 17.7672 16.5995 18.5589 16.5995C19.3506 16.5995 19.9623 17.2478 19.9623 18.0029C19.9623 18.7595 19.3506 19.4078 18.5589 19.4078Z" fill="black"></path>
					<path d="M12.2597 4.14319V1.65977C12.2597 1.15634 11.8631 0.759766 11.3597 0.759766C10.8563 0.759766 10.4597 1.15634 10.4597 1.65977V4.14319C9.12796 4.53977 8.15625 5.76319 8.15625 7.23977C8.15625 8.67977 9.12796 9.93977 10.4597 10.2998V24.3765C10.4597 24.8799 10.8563 25.2765 11.3597 25.2765C11.8631 25.2765 12.2597 24.8799 12.2597 24.3765V10.2998C13.5914 9.90319 14.5631 8.67977 14.5631 7.23977C14.5631 5.76319 13.5914 4.53977 12.2597 4.14319ZM11.3597 8.60791C10.568 8.60791 9.95625 7.95962 9.95625 7.20449C9.95625 6.44791 10.568 5.79966 11.3597 5.79966C12.1514 5.79966 12.7631 6.44795 12.7631 7.20308C12.7631 7.95966 12.1514 8.60791 11.3597 8.60791Z" fill="black"></path>
					<path d="M4.33975 10.6235V1.66025C4.33975 1.15683 3.94318 0.760254 3.43975 0.760254C2.93633 0.760254 2.53975 1.15683 2.53975 1.66025V10.6235C1.20804 11.0201 0.236328 12.2435 0.236328 13.7201C0.236328 15.1601 1.20804 16.4201 2.53975 16.7801V24.3768C2.53975 24.8803 2.93633 25.2768 3.43975 25.2768C3.94318 25.2768 4.33975 24.8803 4.33975 24.3768V16.7801C5.67146 16.3835 6.64318 15.1601 6.64318 13.7201C6.64318 12.2435 5.67146 11.0201 4.33975 10.6235ZM3.43975 15.0883C2.64804 15.0883 2.03633 14.44 2.03633 13.6848C2.03633 12.9283 2.64804 12.28 3.43975 12.28C4.23146 12.28 4.84318 12.9283 4.84318 13.6834C4.84318 14.44 4.23146 15.0883 3.43975 15.0883Z" fill="black"></path>
				</svg>
			</div>
		</div>
		<div class="filter ideas-filter panelz">
			<a class="type all active">
				<svg class="blue-word" id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>All</span></a>
			<a class="type artificial_intelligence">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Artificial Intelligence</span></a>
			<a class="type augmented_and_virtual_reality">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Augmented & Virtual Reality</span></a>
			<a class="type internet_of_things">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Internet of Things</span></a>
			<a class="type chatbots">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Chatbots</span></a>
			<a class="type additive_manufacturing">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Additive Manufacturing</span></a>
			<a class="type autonomous_driving">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Autonomous Driving</span></a>
			<a class="type robotics">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Robotics</span></a>
			<a class="type user_centric_design">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>User Centric Design</span></a>
			<a class="type app_and_web_development">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>App and Web Development</span></a>
			<a class="type data_science">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Data Science</span></a>
			<a class="type blockchain">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Blockchain</span></a>
			<a class="type embedded_development">
				<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
				</svg><span>Embedded Development</span></a>
		</div>
	</div>

	<main id="secondary" class="site-main">

			<?php 
				$args = array(
					'post_type' => 'reference-projects',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<article class="article-centrale <?php the_field('value'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?> onclick="window.location.href='<?php the_permalink(); ?>'">
							<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
							<div class="event-header">
								<div class="top">
									<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
									<h5 class="title" style="">
										<a href="<?php the_permalink(); ?>">
											<?php print the_title(); ?>
										</a>
									</h5>
								</div>
								<div class="bottom">
									<p class="date"><?php the_time( 'M Y' ); ?></p>
									<p class="author"><?php the_field('author'); ?></p>
								</div>
							</div>
						</article><!-- #post-<?php the_ID(); ?> -->
						<?php
					endwhile;
				endif; 
			?>

	</main><!-- #main -->
	

<?php
get_sidebar();
get_footer();
