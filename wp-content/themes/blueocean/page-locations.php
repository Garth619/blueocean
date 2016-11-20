<?php
/**
 * Template Name: Locations
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		<!-- I used the same styling as the events page for times sake -->
		<div id="container">
			<h1  class="inner_page">Locations</h1>
			<div id="content_wrapper_events">
			
          
          
          
          <?php if(get_field('locations')): ?>
						<?php while(has_sub_field('locations')): ?>
							<div class="events_inner">
							<?php $locations_thumb = wp_get_attachment_image_src(get_sub_field('locations_img'), 'event-thumb'); ?>
						<img src="<?php echo $locations_thumb[0]; ?>"/>
						<div class="event_content" style="margin:20px 0 0 0;width: 97%;">
								<h1><?php the_sub_field('location_title'); ?></h1>
								<div itemscope itemtype="http://schema.org/LocalBusiness">
									<a href="<?php the_sub_field('google_map_link'); ?>" target="_blank"><span itemprop="streetAddress"><?php the_sub_field('street_address'); ?></span></a><br/>
									<a href="<?php the_sub_field('google_map_link'); ?>" target="_blank"><span style="display:inline" itemprop="addressLocality"><?php the_sub_field('city'); ?></span></a>
									<a href="<?php the_sub_field('google_map_link'); ?>" target="_blank"><span style="display:inline;color:#fff"><span style="color:#1A7990">,</span></span></a>
									<a href="<?php the_sub_field('google_map_link'); ?>" target="_blank"><span style="display:inline" itemprop="addressRegion"><?php the_sub_field('state'); ?></span></a>
									<a href="<?php the_sub_field('google_map_link'); ?>" target="_blank"><span style="display:inline" itemprop="postalCode"><?php the_sub_field('zip_code'); ?></span></a><br/>
									<span style="margin-top:8px;" itemprop="telephone"><?php the_sub_field('phone'); ?></span>
								</div><!-- schema -->
								<br/>
								
								<a href="<?php the_sub_field('facebook_link'); ?>" target="_blank"><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/facebook_events.png"/></a>
								<a href="<?php the_sub_field('twitter_link'); ?>" target="_blank"><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/twitter_events.png"/></a>
								<a href="<?php the_sub_field('yelp_link'); ?>" target="_blank"><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/yelp.png"/></a>
							</div><!-- event content -->
							
					</div><!-- events_inner -->

        <?php endwhile; ?>
				<?php endif; ?>
          
          
          
          
 					
          
          					
					
					
					
					
	
				
			</div><!-- content wrapper -->
		</div><!-- #container -->


<?php get_footer(); ?>
