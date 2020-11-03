<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

?>

	<article class="article-centrale <?php the_field('value'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>">
			<div class="event-cover">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( '' );
				endif;
				?>
			</div>
			<div class="event-header">
				<div class="top">
					<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
					<h5 class="title" style="font-size: 20px; line-height: 24px;">
						<a href="<?php the_permalink(); ?>">
							<?php print the_title(); ?>
						</a>
					</h5>
				</div>
				<div class="bottom">
					<p class="date"><?php echo date('M Y'); ?></p>
					<p class="author"><?php the_field('author'); ?></p>
				</div>
			</div>
		</a>
	</article><!-- #post-<?php the_ID(); ?> -->

