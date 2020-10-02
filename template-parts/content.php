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
				<p class="intro"><?php echo $header['intro']; ?></p>
				<p class="tag"><?php the_tags(); ?></p>
				<p class="date"><?php echo date('M Y'); ?></p>
				<div class="client">
					<span>Client</span> 
					<span><?php echo $header['client']; ?></span>
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
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
