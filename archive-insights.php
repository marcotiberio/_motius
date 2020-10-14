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
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
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

	<div class="section-title">
		<h3>Our Blog</h3>
	</div>
	<div class="ourblog-grid">
		<?php echo do_shortcode('[ajax_load_more id="ourblog" loading_style="white" post_type="insights" category="our-blog" category__not_in="16,14" posts_per_page="3" pause="false" scroll="false" button_label="Load more ->" button_loading_label="Loading more..." button_done_label="Nothing left"]'); ?>
	</div>

	<section class="medium">
		<strong>Looking for more personal insights?</strong>
		<p>Are you interested in our culture, team insights, and behind-the-scenes?
		<br>
		Discover why we are the best place for techies.
		</p>
		<a href="https://medium.com/motius-de" target="_blank">Read more -></a>
	</section>

	<div class="section-title">
		<h3>Resources</h3>
	</div>

	<div class="filter">
		<a class="type all active">All</a>
		<a class="type cheat_sheet">Cheat Sheet</a>
		<a class="type toolbox">Toolbox</a>
	</div>

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
