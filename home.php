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

		</section>
		<section class="two-columns" id="two">
		<?php
			$section2 = get_field('section2');
			if( $section2 ): ?>
					<div class="text">
						<?php echo $section2['text']; ?>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section2['image']['url']); ?>');"></div>
			<?php endif; ?>
		</section>
		<section class="two-columns" id="three">
		<?php
			$section3 = get_field('section3');
			if( $section3 ): ?>
					<div class="text">
						<?php echo $section3['text']; ?>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section3['image']['url']); ?>');"></div>
			<?php endif; ?>
		</section>
		<section class="two-columns" id="four">
		<?php
			$section4 = get_field('section4');
			if( $section4 ): ?>
					<div class="text">
						<?php echo $section4['text']; ?>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section4['image']['url']); ?>');"></div>
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
		<section class="color-blocks" id="nine">
			<?php
				$section9 = get_field('section9');
				if( $section9 ): ?>
						<div class="left">
							<div class="label"><?php echo $section9['label_left']; ?></div>
							<div class="info"><?php echo $section9['text_left']; ?></div>
						</div>
						<div class="right">
							<div class="label"><?php echo $section9['label_right']; ?></div>
							<div class="info"><?php echo $section9['text_right']; ?></div>
						</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
