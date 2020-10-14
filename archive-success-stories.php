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
		<a class="type all active">All</a>
		<a class="type artificial_intelligence">Artificial Intelligence</a>
		<a class="type augmented_and_virtual_reality">Augmented & Virtual Reality</a>
		<a class="type internet_of_things">Internet of Things</a>
		<a class="type chatbots">Chatbots</a>
		<a class="type additive_manufacturing">Additive Manufacturing</a>
		<a class="type robotics">Robotics</a>
		<a class="type user_centric_design">User Centric Design</a>
		<a class="type app_and_web_development">App and Web Development</a>
		<a class="type data_science">Data Science</a>
		<a class="type blockchain">Blockchain</a>
		<a class="type embedded_development">Embedded Development</a>
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
				get_template_part( 'template-parts/content-archive', get_post_type('success-stories') );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
