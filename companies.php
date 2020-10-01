<?php
/**
 * Template Name: Companies
 *
 * This is the Companies template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="one">
			<div id="heroText"><?php the_field('text_field'); ?></div>
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
		<section class="two-columns" id="two">
		</section>
		<section class="two-columns" id="three">
		</section>
		<section class="two-columns" id="four">
		</section>
		<section class="two-columns" id="five">
		</section>
		<section id="six">
		</section>
		<section class="two-columns" id="seven">
		</section>
		<section class="two-columns" id="eight">
		</section>
		<section class="color-blocks" id="nine">
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
