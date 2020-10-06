<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

?>

<div class="archive-grid">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				<p class="category"><?php the_category(); ?></p>
			</div>
		</a>
	</article><!-- #post-<?php the_ID(); ?> -->

</div>
