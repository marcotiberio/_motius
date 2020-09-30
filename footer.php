<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _motius
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
					)
				);
			?>
		</div><!-- .site-info -->
		<div class="secondary-footer">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'secondary-footer-menu',
						'menu_id'        => 'secondary-footer-menu',
					)
				);
			?>
		</div><!-- .secondary-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
