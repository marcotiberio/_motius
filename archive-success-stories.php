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

	<!-- <div class="filter">
		<nav class="filter-list">
			<a href="#" class="clear">All</a>
			<a href="#" class="type">Artificial Intelligence</a>
			<a href="#" class="type">Augmented & Virtual Reality</a>
			<a href="#" class="type">Internet of Things</a>
			<a href="#" class="type">Chatbots</a>
			<a href="#" class="type">Additive Manufacturing</a>
			<a href="#" class="type">Robotics</a>
			<a href="#" class="type">User Centric Design</a>
			<a href="#" class="type">App and Web Development</a>
			<a href="#" class="type">Data Science</a>
			<a href="#" class="type">Blockchain</a>
			<a href="#" class="type">Embedded Development</a>
		</nav>
	</div> -->

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
