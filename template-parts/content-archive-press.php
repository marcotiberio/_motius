<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

?>

	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
	<article class="article-centrale <?php the_field('value'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?> onclick="window.location.href='<?php the_permalink(); ?>'">
		<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
		<div class="event-header">
			<div class="top">
				<p class="type"><span id="bullet">&#8226;</span><?php the_field('type'); ?></p>
				<h5 class="title" style="">
					<a href="<?php the_permalink(); ?>">
						<?php print the_title(); ?>
					</a>
				</h5>
			</div>
			<div class="bottom">
				<p class="date"><?php the_time( 'M Y' ); ?></p>
					<p class="author">
					<?php if( get_field('author') ): ?>
						<?php the_field('author'); ?>
					<?php endif; ?>
				</p>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->

