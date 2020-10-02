<?php
/**
 * Template Name: Talents
 *
 * This is the Talents template
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
						<div class="block" style="background-color:<?php echo $section1['background_color_block']; ?>">
							<p class="header-block"><?php echo $section1['header_block']; ?></p>
							<p class="paragraph-block"><?php echo $section1['paragraph_block']; ?></p>
						</div>
					</div>
				</section>
			<?php endif; ?>
		</section>
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section id="two">
					<div class="two-columns-text">
						<h3 class="header"><?php echo $section2['header']; ?></h3>
						<p class="paragraph"><?php echo $section2['paragraph']; ?></p>
					</div>
					<div class="color-blocks">
						<div class="left">
						<img src="<?php echo esc_url( $section2['image_left']['url'] ); ?>" alt="<?php echo esc_attr( $section2['image_left']['alt'] ); ?>" />
							<div class="label"><?php echo $section2['label_left']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section2['header_left']; ?></h3>
								<p class="paragraph"><?php echo $section2['paragraph_left']; ?></p>
							</div>
						</div>
						<div class="right">
							<img src="<?php echo esc_url( $section2['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section2['imimage_rightage']['alt'] ); ?>" />
							<div class="label"><?php echo $section2['label_right']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section2['header_right']; ?></h3>
								<p class="paragraph"><?php echo $section2['paragraph_right']; ?></p>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<section id="three">
			<!-- tab switch timeline -->
		</section>
		<section id="four">
			<!-- list how we work -->
		</section>
		<section id="five">
			<h3 class="section-title">Benefits of Working with Motius</h3>
			<?php if( have_rows('section5') ): ?>
				<div class="grid-3">
				<?php while( have_rows('section5') ): the_row(); 

					// Load sub field value.
					$photo = get_sub_field('photo');
					$title = get_sub_field('title');
					?>
					<div class="card">
						<img class="photo" src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
						<p class="title"><?php the_sub_field('title'); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<section id="six">
			<!-- slideshow success stories -->
		</section>
		<section id="seven">
			<!-- job list -->
		</section>
		<?php
			$section8 = get_field('section8');
			if( $section8 ): ?>
				<section id="eight">
					<div class="two-columns-text-narrow">
						<h1 class="header"><?php echo $section8['header']; ?></h1>
						<div class="paragraph">
							<?php echo $section8['paragraph']; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php
			$section9 = get_field('section9');
			if( $section9 ): ?>
				<section id="nine">
					<h3 class="header"><?php echo $section9['header']; ?></h3>
					<img src="<?php echo esc_url( $section9['image']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
