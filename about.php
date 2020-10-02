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
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section id="two">
					<img src="<?php echo esc_url( $section2['image']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>
		<?php
			$section3 = get_field('section3');
			if( $section3 ): ?>
				<section class="two-columns" id="three">
					<div class="text">
						<h3 class="header"><?php echo $section3['header']; ?></h3>
						<p class="paragraph"><?php echo $section3['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section3['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		<?php
			$section4 = get_field('section4');
			if( $section4 ): ?>
				<section id="four">
					<div class="two-columns-text">
						<h3 class="header"><?php echo $section4['header']; ?></h3>
						<p class="paragraph"><?php echo $section4['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section4['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		<?php
			$section5 = get_field('section5');
			if( $section5 ): ?>
				<section class="two-columns" id="five">
					<div class="text">
						<h3 class="header"><?php echo $section5['header']; ?></h3>
						<p class="paragraph"><?php echo $section5['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section5['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		<?php
			$section6 = get_field('section6');
			if( $section6 ): ?>
				<section id="six">
					<img src="<?php echo esc_url( $section6['image']['url'] ); ?>" alt="<?php echo esc_attr( $section6['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>
			<?php
			$section7 = get_field('section7');
			if( $section7 ): ?>
				<section class="two-columns" id="seven">
					<div class="image" style="background-image:url('<?php echo esc_url($section7['image']['url']); ?>');"></div>
					<div class="text">
						<h3 class="header"><?php echo $section7['header']; ?></h3>
						<p class="paragraph"><?php echo $section7['paragraph']; ?></p>
					</div>
				</section>
			<?php endif; ?>
		<?php if( have_rows('section8') ): ?>
			<?php while( have_rows('section8') ): the_row(); 

				// Get sub field values.
				$image = get_sub_field('image');
				$name = get_sub_field('name');
				$position = get_sub_field('position');

				?>
				<section class="grid" id="section8">
					<div class="card">
						<img class="profile-photo" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<p class="name"><?php the_sub_field('name'); ?></p>
						<p class="position"><?php the_sub_field('position'); ?></p>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<section id="nine">
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
