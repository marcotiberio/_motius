<?php
/**
 * Template Name: Press
 *
 * This is the Talents template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<?php
		$section_hero = get_field('section_hero', 24);
		if( $section_hero ): ?>
			<section id="hero">
				<div class="hero-text">
					<h2 class="header"><?php echo $section_hero['title']; ?></h>
					<p class="paragraph"><?php echo $section_hero['intro']; ?></p>
				</div>
			</section>
		<?php endif; 
	?>

	<main id="primary" class="site-main">
		
			<?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<a href="<?php the_permalink(); ?>">
						<article class="article-centrale <?php the_field('value'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="event-cover">
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail( '' );
								endif;
								?>
							</div>
							<div class="event-header">
								<h5 class="title"><?php print the_title(); ?></h5>
								<p class="intro"><?php the_field('intro'); ?></p>
								<p class="date"><?php the_time( 'M Y' ); ?>,</p>
								<p><?php the_field('author'); ?></p>
							</div>
						</article>
						</a>
						<?php
					endwhile;
				endif; 
			?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
