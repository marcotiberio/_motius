<?php
/**
 * Template Name: Simple Text
 *
 * This is the About template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section id="simpleText">
			<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

			?>
			<?php if( have_rows('simple_text') ): ?>
				<?php while( have_rows('simple_text') ): the_row(); 

					// Load sub field value.
					$header = get_sub_field('header');
					$paragraph = get_sub_field('paragraph');
					?>
					<div class="hero-text">
						<h3 class="header"><?php the_sub_field('header'); ?></h3>
						<p class="paragraph"><?php the_sub_field('paragraph'); ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
