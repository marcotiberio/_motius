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
		<section id="four" class="two-columns-list">
			<h3 class="section-title">Benefits in a sentence formatting</h3>
			<?php if( have_rows('section4') ): ?>
				<ul>
				<?php while( have_rows('section4') ): the_row(); 

					// Load sub field value.
					$iconlist = get_sub_field('icon_list');
					$headerlist = get_sub_field('header_list');
					$paragraphlist = get_sub_field('paragraph_list');
					?>
					
						<li>
							<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
							<p class="header-list"><?php the_sub_field('header_list'); ?></p>
							<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
						</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</section>
			<?php
				$section5 = get_field('section5');
				if( $section5 ): ?>
					<section id="five">
						<div class="two-columns-text">
							<h3 class="header"><?php echo $section5['header']; ?></h3>
							<p class="paragraph"><?php echo $section5['paragraph']; ?></p>
						</div>
						<img src="<?php echo esc_url( $section5['image']['url'] ); ?>" alt="<?php echo esc_attr( $section5['image']['alt'] ); ?>" />
						<div class="clients">
							<p> Clients we work with</p>
							<div class="grid-6">
								<img src="<?php echo esc_url( $section5['client1']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client1']['alt'] ); ?>" />
								<img src="<?php echo esc_url( $section5['client2']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client2']['alt'] ); ?>" />
								<img src="<?php echo esc_url( $section5['client3']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client3']['alt'] ); ?>" />
								<img src="<?php echo esc_url( $section5['client4']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client4']['alt'] ); ?>" />
								<img src="<?php echo esc_url( $section5['client5']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client5']['alt'] ); ?>" />
								<img src="<?php echo esc_url( $section5['client6']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client6']['alt'] ); ?>" />
							</div>
						</div>
					</section>
				<?php endif; ?>	
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
