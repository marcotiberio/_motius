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
		<a class="type all active"><span id="bulletCategory">&#8226;</span>All</a>
		<a class="type artificial_intelligence"><span id="bulletCategory">&#8226;</span>Artificial Intelligence</a>
		<a class="type augmented_and_virtual_reality"><span id="bulletCategory">&#8226;</span>Augmented & Virtual Reality</a>
		<a class="type internet_of_things"><span id="bulletCategory">&#8226;</span>Internet of Things</a>
		<a class="type chatbots"><span id="bulletCategory">&#8226;</span>Chatbots</a>
		<a class="type additive_manufacturing"><span id="bulletCategory">&#8226;</span>Additive Manufacturing</a>
		<a class="type autonomous_driving"><span id="bulletCategory">&#8226;</span>Autonomous Driving</a>
		<a class="type robotics"><span id="bulletCategory">&#8226;</span>Robotics</a>
		<a class="type user_centric_design"><span id="bulletCategory">&#8226;</span>User Centric Design</a>
		<a class="type app_and_web_development"><span id="bulletCategory">&#8226;</span>App and Web Development</a>
		<a class="type data_science"><span id="bulletCategory">&#8226;</span>Data Science</a>
		<a class="type blockchain"><span id="bulletCategory">&#8226;</span>Blockchain</a>
		<a class="type embedded_development"><span id="bulletCategory">&#8226;</span>Embedded Development</a>
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

	<script>
		
	</script>


<?php
get_sidebar();
get_footer();
