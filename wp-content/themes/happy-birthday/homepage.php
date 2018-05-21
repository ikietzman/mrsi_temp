<?php
/*
 Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<h1><?php the_field('title'); ?></h1>

							<h2><?php the_field('sub-title'); ?></h2>

							<div class="content_area">
								<?php the_field('content_area_one'); ?>
							</div>

							<div class="video-outer">
								<div class="video-container">
									<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php the_field('video_url'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>

							<div class="content_area">
								<?php the_field('content_area_two'); ?>
							</div>

							<div class="divider" style="background-image:url('<?php echo home_url(); ?>/wp-content/themes/happy-birthday/library/images/line.png')"></div>

							<div class="social_media">
								<?php

								// check if the repeater field has rows of data
								if( have_rows('social_media') ):

								 	// loop through the rows of data
								    while ( have_rows('social_media') ) : the_row();

								        // display a sub field value
												echo '<a class="social_media_link" target="_blank" href="'. get_sub_field('link') . '"><img src="' . get_sub_field('icon') . '" /></a>';

								    endwhile;

								else :

								    // no rows found

								endif;

								?>
							</div>


							<div class="content_area">
								<?php the_field('content_area_three'); ?>
							</div>

							<div class="video_row">
								<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
							</div>
							<div class="video_row">
								<?php echo do_shortcode('[wonderplugin_carousel id="2"]'); ?>
							</div>
							<div class="video_row">
								<?php echo do_shortcode('[wonderplugin_carousel id="3"]'); ?>
							</div>
							<div class="video_row">
								<?php echo do_shortcode('[wonderplugin_carousel id="4"]'); ?>
							</div>



						</main>


				</div>

			</div>


<?php get_footer(); ?>
