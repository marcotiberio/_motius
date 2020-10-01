<?php
/**
 * Template Name: About
 *
 * This is the About template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			$section1 = get_field('section1');
			if( $section1 ): ?>
				<section id="one" style="background-color:<?php echo $section1['background_color_section']; ?>">
					<div class="hero-text">
						<h1 class="header"><?php echo $section1['header']; ?></h1>
						<p class="paragraph"><?php echo $section1['paragraph']; ?></p>
					</div>
				</section>
			<?php endif; ?>
		</section>
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section id="two">
					<img src="<?php echo esc_url( $section2['image']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>
		</section>
		<section id="three">
		</section>
		<section id="four">
		</section>
		<section id="five">
		</section>
		<section id="six">
		</section>
		<section id="seven">
		</section>
		<section id="eight">
		</section>
		<section id="nine">
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
