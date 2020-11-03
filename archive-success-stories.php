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
		<div class="hero-text">
			<h1 class="header">We create the tech products of the future.</h1>
			<p class="paragraph">A selection of case studies and success stories to give you an insight into impactful tech solutions.</p>
		</div>
	</section>

	<div class="filter">
		<a class="type all active">
			<svg class="checked" id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
				get_template_part( 'template-parts/content-archive-success-stories', get_post_type('success-stories') );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

	<script>
		
	</script>


<?php
get_sidebar();
get_footer();
