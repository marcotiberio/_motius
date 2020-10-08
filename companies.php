<?php
/**
 * Template Name: Companies
 *
 * This is the Companies template
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package _motius
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			$section1 = get_field('section1');
			if( $section1 ): ?>
				<section id="one" style="background-color:<?php echo $section1['background_color_section']; ?>">
					<div class="hero-text">
						<h1 class="header"><?php echo $section1['header']; ?></h1>
						<p class="paragraph"><?php echo $section1['paragraph']; ?></p>
						<div class="block" style="background-color:<?php echo $section1['background_color_block']; ?>">
							<p class="header-block"><?php echo $section1['header_block']; ?></p>
							<p class="paragraph-block"><?php echo $section1['paragraph_block']; ?></p>
						</div>
					</div>
				</section>
			<?php endif; ?>
		</section>
		<section id="two">
			<h3 class="section-title">Fields of Expertise</h3>
			<p class="paragraph">To keep up with rapid technological change our fields of expertise are always evolving.  
			Here’s an overview of the technologies we’re currently working with and respective use cases 
			that we’ve brought to life.</p>
			<?php if( have_rows('fields_of_expertise') ): ?>
				<div class="grid-3">
				<?php while( have_rows('fields_of_expertise') ): the_row(); 

					// Load sub field value.
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					?>
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img class="icon" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
								<p class="title"><?php the_sub_field('title'); ?></p>
							</div>
							<div class="flip-card-back">
								<p class="title"><?php the_sub_field('title'); ?></p>
								<ul>
									<li><?php the_sub_field('bullet_point1'); ?></li>
									<li><?php the_sub_field('bullet_point2'); ?></li>
									<li><?php the_sub_field('bullet_point3'); ?></li>
								</ul>
								<svg id="arrow" width="54" height="43" viewBox="0 0 54 43" fill="none">
									<path d="M32.1807 0L29.1772 3.00353L45.2675 19.3084H0V23.5992H45.2675L29.1772 39.9041L32.1807 42.9076L53.6345 21.4538L32.1807 0Z" fill="#383E4E"/>
								</svg>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<section id="three">
			<h2 class="section-title">How It Works?</h2>
			
		</section>
		<section id="four" class="two-columns-list">
			<h2 class="section-title">Benefits in a sentence formatting</h2>
			<?php if( have_rows('section4') ): ?>
				<ul>
				<?php while( have_rows('section4') ): the_row(); 

					// Load sub field value.
					$iconlist = get_sub_field('icon_list');
					$headerlist = get_sub_field('header_list');
					$paragraphlist = get_sub_field('paragraph_list');
					?>
					
						<li>
							<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
							<p class="header-list"><?php the_sub_field('header_list'); ?></p>
							<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
						</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</section>
		<?php
			$section5 = get_field('section5');
			if( $section5 ): ?>
				<section id="five">
					<div class="two-columns-text">
						<h2 class="header"><?php echo $section5['header']; ?></h2>
						<p class="paragraph"><?php echo $section5['paragraph']; ?></p>
					</div>
					<img src="<?php echo esc_url( $section5['image']['url'] ); ?>" alt="<?php echo esc_attr( $section5['image']['alt'] ); ?>" />
					<div class="clients">
						<p> Clients we work with</p>
						<div class="grid-6">
							<img src="<?php echo esc_url( $section5['client1']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client1']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client2']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client2']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client3']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client3']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client4']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client4']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client5']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client5']['alt'] ); ?>" />
							<img src="<?php echo esc_url( $section5['client6']['url'] ); ?>" alt="<?php echo esc_attr( $section5['client6']['alt'] ); ?>" />
						</div>
					</div>
				</section>
			<?php endif; ?>	
		<section id="six" class="two-columns-list">
			<h2 class="section-title">Benefits in a sentence formatting</h2>
			<?php if( have_rows('section6') ): ?>
				<ul>
				<?php while( have_rows('section6') ): the_row(); 

					// Load sub field value.
					$iconlist = get_sub_field('icon_list');
					$headerlist = get_sub_field('header_list');
					$paragraphlist = get_sub_field('paragraph_list');
					?>
					
						<li>
							<img class="icon-list" src="<?php echo esc_url( $iconlist['url'] ); ?>" alt="<?php echo esc_attr( $iconlist['alt'] ); ?>" />
							<p class="header-list"><?php the_sub_field('header_list'); ?></p>
							<p class="paragraph-list"><?php the_sub_field('paragraph_list'); ?></p>
						</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</section>
		<section id="seven">
			<!-- slideshow experiences -->
		</section>
		<section id="eight">
			<!-- slideshow success stories -->
		</section>
		<?php
			$section9 = get_field('section9');
			if( $section9 ): ?>
				<section class="two-columns" id="nine">
					<div class="text">
						<h2 class="header"><?php echo $section9['header']; ?></h2>
						<p class="paragraph"><?php echo $section9['paragraph']; ?></p>
					</div>
					<div class="image" style="background-image:url('<?php echo esc_url($section9['image']['url']); ?>');"></div>
				</section>
			<?php endif; ?>
		<?php
			$section10 = get_field('section10');
			if( $section10 ): ?>
				<section id="ten">
					<div class="two-columns-text">
						<h2 class="header"><?php echo $section10['header']; ?></h2>
						<p class="paragraph"><?php echo $section10['paragraph']; ?></p>
					</div>
					<img src="<?php echo esc_url( $section10['image']['url'] ); ?>" alt="<?php echo esc_attr( $section10['image']['alt'] ); ?>" />
				</section>
			<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
