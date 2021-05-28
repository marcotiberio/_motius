<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motius
 */

get_header();
?>

	<section id="hero">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php 
				$args = array(
					'post_type' => 'insights',
					'post_status' => 'publish',
					'category_name' => 'our-blog',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 20,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>

						<article class="swiper-slide" id="post-<?php the_ID(); ?>" style="background-color:<?php the_field('background_color'); ?>" <?php post_class(); ?>>
							<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<div class="event-cover" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
							<div class="event-header">
								<a href="<?php the_permalink(); ?>"><h2 class="title"><?php print the_title(); ?></h2></a>
								<div class="type">
									<span id="bullet">&#8226;</span>
									<span><?php the_field('type'); ?></span>
								</div>
								<div class="excerpt"><?php the_excerpt(); ?></div>
								<p class="date"><?php the_time( 'M Y' ); ?></p>
								<p><?php the_field('author'); ?></p>
								</div>
						</article>	
						
						
						<?php
					endwhile;
				endif; ?>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-container">
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</section>

	<div class="section-title title-our-blog">
		<h3>Our Blog</h3>
	</div>
	<div class="ourblog-grid">
		<?php echo do_shortcode('[ajax_load_more id="ourblog" loading_style="white" post_type="insights" category="our-blog" category__not_in="16,14" posts_per_page="3" pause="false" scroll="false" button_label="Load more" button_loading_label="Loading more..." button_done_label="Nothing left"]'); ?>
	</div>


	<?php
		$section_medium = get_field('section_medium', 3681);
		if( $section_medium ): ?>
			<section class="medium">
				<strong><?php echo $section_medium['title']; ?></strong>
				<p class="paragraph"><?php echo $section_medium['text']; ?></p>
				<a href="https://medium.com/motius-de" target="_blank">Read more -></a>
			</section>
	<?php endif; ?>

	<div class="section-title">
		<h3>Resources</h3>
	</div>

	<div class="filter">
		<a class="type all active">
			<svg class="blue-word" id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg>All</a>
		<a class="type cheat_sheet">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg>Cheat Sheet</a>
		<a class="type toolbox">
			<svg id="checkbox" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<circle cx="12" cy="12" r="11.5" stroke="#A6B7BD"/>
			</svg>Toolbox</a>
	</div>

	<main id="primary" class="site-main">

		<div class="grid-3">
			<?php 
				$args = array(
					'post_type' => 'insights',
					'category_name' => 'cheat-sheet,toolbox',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
						<article class="article-centrale <?php the_field('value'); ?> <?php the_field('tag'); ?>" id="post-<?php the_ID(); ?>" style="background-color:<?php the_field('background_color'); ?>" onclick="window.open('<?php the_permalink(); ?>', '_blank')">
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
						<?php
					endwhile;
				endif; 
			?>
		</div>

		<section class="two-columns" id="ten" data-aos="fade-up">
			<?php
				$section10 = get_field('section10', 2);
				if( $section10 ): ?>
						<div class="text">
							<h2><?php echo $section10['text_left']; ?><h2>
						</div>
						<div class="text">
							<?php echo $section10['text_right']; ?>
							<div class="contact-form">
								<script type="text/javascript" src="https://mh.zoho.eu/js/zc.iframe.js"></script>
								<!--Zoho MarketingHub Web-Optin Form's Header Code Starts Here-->

								<meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
								<script type="text/javascript" src="https://sgbh.maillist-manage.eu/js/optin.min.js" onload="setupSF('sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0','ZCFORMVIEW',false,'light')"></script>
								<script type="text/javascript">
									function runOnFormSubmit_sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0(th){
										/*Before submit, if you want to trigger your event, "include your code here"*/
									};
								</script>

								<style>
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 .quickFormHorizontal [name=SIGNUP_SUBMIT_BUTTON]{
									white-space: normal !important;
									}
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 #customForm *{
									-webkit-box-sizing: border-box !important;
									-moz-box-sizing: border-box !important;
									box-sizing: border-box !important;
									word-break:break-word;
									overflow-wrap: break-word;
									}
									/*** RESPONSIVE START */
									@media only screen and (max-width: 200px){
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 #SIGNUP_BODY{
									max-width:200px !important;
									margin: 0px 0 !important;
									}
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 #SIGNUP_PAGE{
									padding:0px !important	
									}
									}
									/*Major Mobiles*/
									@media screen and (min-width: 320px) and (max-width: 580px) and (orientation : portrait){
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 [name='SIGNUP_BODY']{
									max-width: 80% !important;
									margin: 0px 0 !important;
									}
									}
									/* iPads*/
									@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 [name='SIGNUP_BODY']{
									max-width: 80% !important;
									margin: 0px 0 !important;
									}
									}
									@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape){
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 [name='SIGNUP_BODY']{
									width: 80% !important;
									max-width:1016px !important;
									margin: 0px 0 !important;
									}
									}
									@media screen and (min-width: 475px) and (max-width: 980px) and (orientation : landscape){
									#sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0 #SIGNUP_PAGE{
									max-width:100% !important;
									padding:0px !important;
									}
									}
									/*** RESPONSIVE END */
									.quick_form_8_css form{padding-top:10px}
								</style>

								<!--Zoho MarketingHub Web-Optin Form's Header Code Ends Here--><!--Zoho MarketingHub Web-Optin Form Starts Here-->

								<div id="sf21c44272a71440eb03e2909a1cd695c81185630859ca1fd0" data-type="signupform">
									<div id="customForm">
										<input type="hidden" id="signupFormType" value="QuickForm_Horizontal">
										<div class="quickFormHorizontal quick_form_8_css" style="background-color: rgb(255, 255, 255); color: rgb(68, 68, 68); border: 1px none rgb(255, 255, 255); padding: 0px; margin: 0px auto; overflow: hidden; font-family: Arial; text-align: center; bottom: 2px; width: 100%; font-size: 11px;" name="SIGNUP_BODY" id="SIGNUP_BODY">
											<div style="color: rgb(136, 136, 136); background-color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); font-family: Arial; text-align: left; border-width: 1px; padding-right: 10px; font-size: 14px; padding-top: 0; border-style: none; padding-left: 10px; font-weight: bold;" id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER"></div>
											<div style="position:relative;">
												<div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
													<table width="100%" cellpadding="0" cellspacing="0" border="0">
														<tbody>
															<tr>
																<td width="10%">
																	<img class="successicon" src="https://sgbh.maillist-manage.eu/images/challangeiconenable.jpg" align="absmiddle">
																</td>
																<td>
																	<span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://sgbh.maillist-manage.eu/weboptin.zc" target="_zcSignup">
												<div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; font-size:11px; margin:10px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below.</div>
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td align="left" valign="top">
																<div style=" padding-right:10px;padding-bottom:10px;padding-left:0;">
																	<span>
																		<span>
																			<input savetype="EMBED_FORM_EMAIL_LABEL" changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" style="color: rgb(136, 136, 136); width: 60%; background-color: rgb(255, 255, 255); border: 1px solid rgb(228, 234, 235); vertical-align: middle; padding: 18px; margin: 0px 10px 0px 0px; border-radius: 4px; box-sizing: initial; font-size: 12px; line-height: 20px; height: 24px;" placeholder=" Your Email">
																			<span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Lead Email,2</span>
																		</span>
																	</span>
																	<span style="padding-left:0px; padding-right:0px;padding-bottom:10px;">
																		<input name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" style="appearance: none; background-color: rgb(40, 185, 218); color: rgb(255, 255, 255); cursor: pointer; border: 1px solid rgb(108, 187, 195); vertical-align: middle; padding: 0px; margin: 0px; white-space: normal; text-align: center; box-sizing: initial; outline: 0px; font-family: Arial, Helvetica, sans-serif; border-radius: 13px; width: 25%; line-height: 34px; font-size: 14px; height: 50px;" value="Subscribe">
																	</span>
																</div>
															</td>
														</tr>
													</tbody>
												</table><!-- Do not edit the below Zoho Campaigns hidden tags -->
												<input type="hidden" id="fieldBorder" value="rgb(228, 234, 235)">
												<input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW" onload="">
												<input type="hidden" id="submitType" name="submitType" value="optinCustomView">
												<input type="hidden" id="lD" name="lD" value="1add59364f95c65">
												<input type="hidden" name="emailReportId" id="emailReportId" value="">
												<input type="hidden" id="formType" name="formType" value="QuickForm">
												<input type="hidden" name="zx" id="cmpZuid" value="14ac484ede">
												<input type="hidden" name="zcvers" value="2.0">
												<input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
												<input type="hidden" id="mode" name="mode" value="OptinCreateView">
												<input type="hidden" id="zcld" name="zcld" value="1add59364f95c65">
												<input type="hidden" id="document_domain" value="zoho.eu">
												<input type="hidden" id="zc_Url" value="sgbh.maillist-manage.eu">
												<input type="hidden" id="new_optin_response_in" value="0">
												<input type="hidden" id="duplicate_optin_response_in" value="0">
												<input type="hidden" id="zc_formIx" name="zc_formIx" value="21c44272a71440eb03e2909a1cd695c81185630859ca1fd0"><!-- End of the campaigns hidden tags --></form>
										</div>
										<img src="https://sgbh.maillist-manage.eu/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
									</div>
								</div>
								<div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
								<div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
									<span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
										<img src="https://sgbh.maillist-manage.eu/images/videoclose.png">
									</span>
									<div id="zcOptinSuccessPanel"></div>
								</div>

								<!--Zoho MarketingHub Web-Optin Form Ends Here-->								
								
								<!-- <form action='https://forms.zohopublic.eu/louismappes/form/TestDev/formperma/2RFkPD8OjDVpVWGbyRT1P_odwyIg8BsUWVSnDt8Nc18/htmlRecords/submit' name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'>
									<input type="hidden" name="zf_referrer_name" value="">
									<input type="hidden" name="zf_redirect_url" value="">
									<input type="hidden" name="zc_gad" value="">
									<p></p>
									<input type="text" maxlength="255" name="Email" value="" placeholder="Your Email" fieldType=9 />
									<button type="submit"><em>Subscribe</em></button>
								</form> -->
							</div>
						</div>
				<?php endif; ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
