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

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<div id="fullpage">
			<div class="section " id="section0">
				<div class="intro">
					<h1>Responsive Height</h1>
					<p>This example will turn to normal scroll when the window size gets smaller than 600px height</p>
				</div>
			</div>
			<div class="section" id="section1">
				<div class="slide" id="slide1">
					<div class="intro">
						<h1>Ideal for small screens</h1>
					</div>
				</div>

				<div class="slide" id="slide2">
					<h1>This example uses responsiveHeight: 600</h1>
				</div>

			</div>
			<div class="section" id="section2">
				<div class="intro">
					<h1>Keep it simple!</h1>
				</div>
			</div>
		</div>

	</main><!-- #main -->

	<script type="text/javascript">
		var myFullpage = new fullpage('#fullpage', {
			anchors: ['firstPage', 'secondPage', '3rdPage'],
			sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
			responsiveHeight: 600,
			afterResponsive: function(isResponsive){

			}
		});
	</script>

<?php
get_sidebar();
get_footer();
