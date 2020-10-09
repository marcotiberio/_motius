<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

get_header();
?>

	<section id="hero">
	<div class="post-carousel" data-flickity='{ "wrapAround": true }'>
		<?php 
			$args = array(
				'post_type' => 'insights',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 10,
			);
			$arr_posts = new WP_Query( $args );
			
			if ( $arr_posts->have_posts() ) :
				
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
					<article class="carousel-cell" id="post-<?php the_ID(); ?>" style="background-color:<?php the_field('background_color'); ?>" <?php post_class(); ?>>
						<div class="event-cover">
							<?php
							if ( has_post_thumbnail() ) :
								the_post_thumbnail( '' );
							endif;
							?>
						</div>
						<div class="event-header">
							<a href="<?php the_permalink(); ?>"><h2 class="title"><?php print the_title(); ?></h2></a>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							<p class="date"><?php echo date('M Y'); ?></p>
							<p><?php the_field('author'); ?></p>
							</div>
					</article>	
					<?php
				endwhile;
			endif; ?>
		</div>
	</section>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-archive', get_post_type('insights') );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
