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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/ScrollTrigger.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js'></script>

<script>
	(function ($) {

		$(document).ready(function () {
			setupFade();
			setupClickToScroll();
			setupPostAnimation();
			setupScrollToTop();
			enableScrollAbortion();

			// Trigger window.scroll, this will initiate some of the scripts
			$(window).scroll();
		});


		// Allow user to cancel scroll animation by manually scrolling
		function enableScrollAbortion() {
			var $viewport = $('html, body');
			$viewport.on('scroll mousedown DOMMouseScroll mousewheel keyup', function (e) {
				if (e.which > 0 || e.type === 'mousedown' || e.type === 'mousewheel') {
					$viewport.stop();
				}
			});
		}

		function setupScrollToTop() {
			var scrollSpeed = 750;
			$('.trigger-scroll-to-top').click(function (e) {
				e.preventDefault();
				$('html, body').animate({
					scrollTop: 0
				}, scrollSpeed);
			});
		}


		function setupPostAnimation() {
			var posts = $('.post-wrapper .post');
			$(window).on('scroll resize', function () {

				var currScroll = $(window).scrollTop() > $(document).scrollTop() ? $(window).scrollTop() : $(
						document).scrollTop(),
					windowHeight = $(window).height(), // Needs to be here because window can resize
					overScroll = Math.ceil(windowHeight * .20),
					treshhold = (currScroll + windowHeight) - overScroll;

				posts.each(function () {

					var post = $(this),
						postScroll = post.offset().top

					if (postScroll > treshhold) {
						post.addClass('hidden');
					} else {
						post.removeClass('hidden');
					}

				});

			});
		}

		function setupFade() {

			var posts = $('.post-wrapper .post').reverse(),
				stemWrapper = $('.stem-wrapper'),
				halfScreen = $(window).height() / 2;

			$(window).on('scroll resize', function () {

				delay(function () {

					var currScroll = $(window).scrollTop() > $(document).scrollTop() ? $(window)
						.scrollTop() : $(document).scrollTop(),
						scrollSplit = currScroll + halfScreen;

					posts.removeClass('active').each(function () {

						var post = $(this),
							postOffset = post.offset().top;

						if (scrollSplit > postOffset) {

							// Add active class to fade in
							post.addClass('active')

							// Get post color
							var color = post.data('stem-color') ? post.data('stem-color') :
								null,
								allColors = 'color-green color-yellow color-white'

							stemWrapper.removeClass(allColors);

							if (color !== null) {
								stemWrapper.addClass('color-' + color);
							}

							return false;
						}

					});
				}, 20);

			});

		}


		function setupClickToScroll(post) {

			var scrollSpeed = 750;

			$('.post-wrapper .post .stem-overlay .icon').click(function (e) {
				e.preventDefault();

				var icon = $(this),
					post = icon.closest('.post'),
					postTopOffset = post.offset().top,
					postHeight = post.height(),
					halfScreen = $(window).height() / 2,
					scrollTo = postTopOffset - halfScreen + (postHeight / 2);

				$('html, body').animate({
					scrollTop: scrollTo
				}, scrollSpeed);
			});

		}

	})(jQuery);




	/*==========  Helpers  ==========*/


	// Timeout function
	var delay = (function () {
		var timer = 0;
		return function (callback, ms) {
			clearTimeout(timer);
			timer = setTimeout(callback, ms);
		};
	})();

	$.fn.reverse = function () {
		return this.pushStack(this.get().reverse(), arguments);
	};
</script>

<script>
	AOS.init();
</script>

<footer id="colophon" class="site-footer">
	<div class="primary-footer">
		<div class="logo"><img src="http://motiusrelaunch.flywheelstaging.com/wp-content/uploads/2020/10/logo-footer.png" alt=""
				onclick="window.location.href='http://motiusrelaunch.flywheelstaging.com/'"></div>
		<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
					)
				);
			?>
		<div class="newsletter">
			<div class="contact-form">
				<!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
				<form
					action='https://forms.zohopublic.eu/louismappes/form/TestDev/formperma/2RFkPD8OjDVpVWGbyRT1P_odwyIg8BsUWVSnDt8Nc18/htmlRecords/submit'
					name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'>
					<input type="hidden" name="zf_referrer_name" value="">
					<!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
					<input type="hidden" name="zf_redirect_url" value="">
					<!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
					<input type="hidden" name="zc_gad" value="">
					<!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
					<h5>Keep up with<br>your tech friends</h5>
					<!--Email-->
					<input type="text" maxlength="255" name="Email" value="" placeholder="Your Email" fieldType=9
						style="color: #666; border: 1px solid #ccc; border-radius: 15px; padding: 1rem; width: 100%; margin-top: 20px;" />
					<button type="submit"
						style="color: #ffffff; background-color: #28B9DA; border: 1px solid #ccc; border-radius: 10px; padding: 0.6rem; width: 100%; cursor: pointer; margin-top: 10px;"><em>Submit</em></button>
				</form>
			</div>
		</div>
	</div><!-- .primary-footer -->
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