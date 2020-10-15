<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<p class="date"><?php echo date('M Y'); ?></p>
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
					<span>Client</span> 
					<span><?php echo $header['client']; ?></span>
					<span class="type"><?php the_field('type'); ?></span>
					<p><?php the_field('author'); ?></p>
				</div>
				<div class="intro">
					<?php echo $header['intro']; ?>
				</div>
			<?php endif; ?>
	</header><!-- .entry-header -->

	<?php _motius_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_motius' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_motius' ),
				'after'  => '</div>',
			)
		);
		?>
		<?php
			$main = get_field('main');
			if( $main ): ?>
				<div class="column-3">
					<div class="column">
						<h3 class="header"><?php echo $main['header1']; ?></h3>
						<p class="paragraph"><?php echo $main['paragraph1']; ?></p>
					</div>
					<div class="column">
						<img src="<?php echo esc_url( $main['image']['url'] ); ?>" alt="<?php echo esc_attr( $main['image']['alt'] ); ?>" />
						<h3 class="header"><?php echo $main['header2']; ?></h3>
						<p class="paragraph"><?php echo $main['paragraph2']; ?></p>
					</div>
					<div class="column">
						<h3 class="header"><?php echo $main['header3']; ?></h3>
						<p class="paragraph"><?php echo $main['paragraph3']; ?></p>
					</div>
				</div>
			<?php endif; ?>

		<?php
			$category = get_field('category');
			if( $category ): ?>
			<h3 class="tag"><?php the_tags(); ?></h3>
				<div class="column-4">
					<div class="column">
						<h5 class="header"><?php echo $category['header1']; ?></h5>
						<p class="paragraph"><?php echo $category['paragraph1']; ?></p>
					</div>
					<div class="column">
						<h5 class="header"><?php echo $category['header2']; ?></h5>
						<p class="paragraph"><?php echo $category['paragraph2']; ?></p>
					</div>
					<div class="column">
						<h5 class="header"><?php echo $category['header3']; ?></h5>
						<p class="paragraph"><?php echo $category['paragraph3']; ?></p>
					</div>
					<div class="column">
						<h5 class="header"><?php echo $category['header4']; ?></h5>
						<p class="paragraph"><?php echo $category['paragraph4']; ?></p>
					</div>
				</div>
			<?php endif; ?>

		<?php
			$sublines = get_field('sublines');
			if( $sublines ): ?>
				<div class="sublines">
					<h5 class="header"><?php echo $sublines['header']; ?></h5>
					<p class="paragraph"><?php echo $sublines['paragraph']; ?></p>
				</div>
			<?php endif; ?>

		<?php
			$outro = get_field('outro');
			if( $outro ): ?>
				<div class="outro">
					<p class="paragraph"><?php echo $outro['paragraph1']; ?></p>
					<img class="image" src="<?php echo esc_url( $outro['image']['url'] ); ?>" alt="<?php echo esc_attr( $outro['image']['alt'] ); ?>" />
					<p class="paragraph"><?php echo $outro['paragraph2']; ?></p>
				</div>
			<?php endif; ?>

		<section id="relatedInsights">

			<div class="section-header">
				<h2>Related Insights</h2>
				<a href="http://motius.local/insights/">All Insights -></a>
			</div>

			<div class="grid-3">
				<?php 
					$args = array(
						'post_type' => 'insights',
						'tax_query' => array(
							'relation' => 'OR',
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => array( 'toolbox' ),
							),
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => array( 'cheat-sheet' ),
							),
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => array( 'our-blog' ),
							),
						),
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
							<article id="post-<?php the_ID(); ?>" style="background-color:<?php the_field('background_color'); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>">
									<div class="event-cover">
										<?php
										if ( has_post_thumbnail() ) :
											the_post_thumbnail( '' );
										endif;
										?>
									</div>
									<div class="event-header">
										<a href="<?php the_permalink(); ?>"><h5 class="title"><?php print the_title(); ?></h5></a>
										<p class="type"><?php the_field('type'); ?></p>
										<p class="date"><?php echo date('M Y'); ?></p>
										<p><?php the_field('author'); ?></p>
									</div>
								</a>
							</article>	
							<?php
						endwhile;
					endif; 
				?>
			</div>
		</section>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
