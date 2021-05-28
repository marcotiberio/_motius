<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

?>

<article class="<?php the_field('tag'); ?>" id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
		<?php
			$header = get_field('header');
			if( $header ): ?>
				<div class="client">
					<?php if( $header['client'] ): ?>
						<span>Client</span> 
						<span class="client-inner"><?php echo $header['client']; ?></span>
					<?php endif; ?>
					<span class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></span>
					<p class="date"><?php the_time( 'M Y' ); ?>,</p>
					<p class="author"><?php the_field('author'); ?></p>
				</div>
				<div class="intro">
					<?php echo $header['intro']; ?>
				</div>
			<?php endif; ?>
	</header><!-- .entry-header -->

	<?php _motius_post_thumbnail(); ?>

	<div class="entry-content">

		<div class="main-section-insights">
			<?php
			the_content(
			);
			?>
		</div>


		<div class="main-section-success-stories">
			<?php
			the_content(
			);
			?>
		</div>

		<div class="main-section-reference-projects">
			<?php
			the_content(
			);
			?>
		</div>


		<div class="main-section-press">
			<?php
			the_content(
			);
			?>
		</div>

		<section id="relatedInsights">

			<div class="section-header">
				<h2>Related Insights</h2>
				<a href="/insights/">All Insights</a>
			</div>

			<div class="grid-3">
				<?php 
					$args = array(
						'post_type' => 'insights',
						'meta_key'		=> 'tag',
						'meta_value'	=> get_field('tag'),
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page' => 3,
					);
					$arr_posts = new WP_Query( $args );
					
					if ( $arr_posts->have_posts() ) :
						
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							<a href="<?php the_permalink(); ?>">
							<article class="article-centrale <?php the_field('value'); ?> <?php the_field('tag'); ?>" id="post-<?php the_ID(); ?>" style="background-color:<?php the_field('background_color'); ?>">
								<div class="event-header">
									<div class="top">
										<h5 class="title"><?php print the_title(); ?></h5>
										<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
									</div>
									<div class="bottom">
										<p class="date"><?php the_time( 'M Y' ); ?></p>
										<p><?php the_field('author'); ?></p>
									</div>
								</div>
							</article>
							</a>
							<?php
						endwhile;
					endif; 
				?>
			</div>
		</section>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
