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
		<?php
			$section1 = get_field('section1');
			if( $section1 ): ?>
				<section class="hero-text" id="one" style="background-color:<?php echo $section1['background-color']; ?>">
					<div class="header"><?php echo $section1['header']; ?></div>
					<div class="paragraph"><?php echo $section1['paragraph']; ?></div>
					<div class="block">
						<div class="header-block"><?php echo $section1['header_block']; ?></div>
						<div class="paragraph-block"><?php echo $section1['paragraph_block']; ?></div>
					</div>
				</section>
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
