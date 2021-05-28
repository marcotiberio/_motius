<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

?>

	<a href="<?php the_permalink(); ?>">
	<article class="article-centrale <?php the_field('value'); ?> <?php the_field('tag'); ?>" id="post-<?php the_ID(); ?>">
		<div class="event-cover">
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( '' );
			endif;
			?>
		</div>
		<div class="event-header">
			<div class="top">
				<h5 class="title"><?php print the_title(); ?></h5>
				<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
			</div>
			<div class="bottom">
				<p class="date"><?php the_time( 'M Y' ); ?></p>
				<p class="author"><?php the_field('author'); ?></p>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	</a>

