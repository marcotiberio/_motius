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

  <script>
    AOS.init();
  </script>

	<footer id="colophon" class="site-footer">
		<div class="primary-footer">
			<div class="logo"><img src="http://motius.local/wp-content/uploads/2020/09/logo-footer.png" alt="" onclick="window.location.href='http://motius.local/'"></div>
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
					<form action='https://forms.zohopublic.eu/louismappes/form/TestDev/formperma/2RFkPD8OjDVpVWGbyRT1P_odwyIg8BsUWVSnDt8Nc18/htmlRecords/submit' name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'>
						<input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
						<input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
						<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
						<h5>Keep up with<br>your tech friends</h5>
						<!--Email-->
						<input type="text" maxlength="255" name="Email" value="" placeholder="Your Email" fieldType=9 style="color: #666; border: 1px solid #ccc; border-radius: 15px; padding: 1rem; width: 100%; margin-top: 20px;" />
						<button type="submit" style="color: #ffffff; background-color: #28B9DA; border: 1px solid #ccc; border-radius: 10px; padding: 0.6rem; width: 100%; cursor: pointer; margin-top: 10px;"><em>Submit</em></button>
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
