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

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

	<section id="one">

	</section>
	<section class="two-columns" id="two">
		<div class="text"><?php the_field('section_2_text'); ?></div>
		<div class="image">
			<?php 
			$image = get_field('section_2_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</section>
	<section class="two-columns" id="three">
		<div class="text"><?php the_field('section_3_text'); ?></div>
		<div class="image">
			<?php 
			$image = get_field('section_3_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</section>
	<section class="two-columns" id="four">
		<div class="text"><?php the_field('section_4_text'); ?></div>
		<div class="image">
			<?php 
			$image = get_field('section_4_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</section>
	<section class="two-columns" id="five">
		<div class="text"><?php the_field('section_5_text'); ?></div>
		<div class="image">
			<?php 
			$image = get_field('section_5_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</section>
	<section id="six">

	</section>
	<section id="seven">

	</section>
	<section class="two-columns" id="eight">
		<div class="text"><?php the_field('section_8_text'); ?></div>
		<div class="image">
			<?php 
			$image = get_field('section_8_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</section>
	<section id="nine">

	</section>

<?php
get_sidebar();
get_footer();
