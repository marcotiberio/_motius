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
		<section id="two">
		</section>
		<section id="three">
		</section>
		<?php
			$section4 = get_field('section4');
			if( $section4 ): ?>
				<section id="four" class="two-columns-list">
					<h3 class="header"><?php echo $section4['header']; ?></h3>
					<ul>
						<li>
							<img class="icon-list"src="<?php echo esc_url( $section4['icon_list']['url'] ); ?>" alt="<?php echo esc_attr( $section4['icon_list']['alt'] ); ?>" />
							<p class="header-list"><?php echo $section4['header_list']; ?></p>
							<p class="paragraph-list"><?php echo $section4['paragraph_list']; ?></p>
						</li>
					</ul>
				</section>
			<?php endif; ?>
		<section id="five">
			<?php
				$section5 = get_field('section5');
				if( $section5 ): ?>
					<section id="five" class="two-columns-text">
						<h3 class="header"><?php echo $section5['header']; ?></h3>
						<p class="paragraph"><?php echo $section5['paragraph']; ?></p>
					</section>
				<?php endif; ?>	
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
