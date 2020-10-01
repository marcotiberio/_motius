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
		<section id="one">
			<?php 
				$heroimage = get_field('heroimage');
				if( !empty( $heroimage ) ): ?>
					<img id="heroImage" src="<?php echo esc_url($heroimage['url']); ?>" alt="<?php echo esc_attr($heroimage['alt']); ?>" />
				<?php endif; ?>
			<div class="color-blocks">
				<?php
					$section1 = get_field('section1');
					if( $section1 ): ?>
							<div class="left">
								<div class="info"><?php echo $section1['text_left']; ?></div>
							</div>
							<div class="right">
								<div class="info"><?php echo $section1['text_right']; ?></div>
							</div>
					<?php endif; ?>
			</div>
		</section>
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
				<section class="two-columns" id="two" style="background-image:url('<?php echo esc_url($section2['image']['url']); ?>');">
					<div class="text">
						<h3 class="header"><?php echo $section2['header']; ?></h3>
						<p class="paragraph"><?php echo $section2['paragraph']; ?></p>
					</div>
				</section>
			<?php endif; ?>
			<?php
			$section3 = get_field('section3');
			if( $section3 ): ?>
				<section class="two-columns" id="three" style="background-image:url('<?php echo esc_url($section3['image']['url']); ?>');">
					<div class="text">
						<h3 class="header"><?php echo $section3['header']; ?></h3>
						<p class="paragraph"><?php echo $section3['paragraph']; ?></p>
					</div>
				</section>
			<?php endif; ?>
		<section class="two-columns" id="four">
		<?php
			$section4 = get_field('section4');
			if( $section4 ): ?>
				<section class="two-columns" id="four" style="background-image:url('<?php echo esc_url($section4['image']['url']); ?>');">
					<div class="text">
						<h3 class="header"><?php echo $section4['header']; ?></h3>
						<p class="paragraph"><?php echo $section4['paragraph']; ?></p>
					</div>
				</section>
			<?php endif; ?>
		</section>
		<section class="two-columns" id="five">
			<?php
				$section5 = get_field('section5');
				if( $section5 ): ?>
						<div class="text">
							<?php echo $section5['text_left']; ?>
						</div>
						<div class="text">
							<?php echo $section5['text_right']; ?>
						</div>
				<?php endif; ?>
		</section>
		<section id="six">

		</section>
		<section class="two-columns" id="seven">
			<?php
				$section7 = get_field('section7');
				if( $section7 ): ?>
						<div class="text">
							<?php echo $section7['text_left']; ?>
						</div>
						<div class="text">
							<?php echo $section7['text_right']; ?>
						</div>
				<?php endif; ?>
		</section>
		<section class="two-columns" id="eight">
			
		</section>
			<?php
				$section9 = get_field('section9');
				if( $section9 ): ?>
					<section class="color-blocks" id="nine">
						<div class="left">
						<img src="<?php echo esc_url( $section9['image_left']['url'] ); ?>" alt="<?php echo esc_attr( $section9['image_left']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_left']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section9['header_left']; ?></h3>
								<p class="paragraph"><?php echo $section9['paragraph_left']; ?></p>
							</div>
						</div>
						<div class="right">
							<img src="<?php echo esc_url( $section9['image_right']['url'] ); ?>" alt="<?php echo esc_attr( $section9['imimage_rightage']['alt'] ); ?>" />
							<div class="label"><?php echo $section9['label_right']; ?></div>
							<div class="info">
								<h3 class="header"><?php echo $section9['header_right']; ?></h3>
								<p class="paragraph"><?php echo $section9['paragraph_right']; ?></p>
							</div>
						</div>
					</section>
				<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
