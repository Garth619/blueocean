<?php
/**
 * Template Name: Events 
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
		
		<div id="container">
			<h1  class="inner_page">Events</h1>
			<div class="about_collage" style="display:none;">
				<div href="" class="icons_inner_events">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/events_icon.png"/></div>
				<div id="events_col1">
					<?php $events_one = wp_get_attachment_image_src(get_field('image1'), 'events-img-1'); ?>
          <img id="event_1" class="about_thumbs" src="<?php echo $events_one[0]; ?>"/>
				</div><!-- col1 -->
				<div id="events_col2">
					<?php $events_two = wp_get_attachment_image_src(get_field('image2'), 'events-img-2'); ?>
					<img id="event_2" class="about_thumbs" src="<?php echo $events_two[0]; ?>"/>
					<?php $events_three = wp_get_attachment_image_src(get_field('image3'), 'events-img-3'); ?>
					<img id="event_3" class="about_thumbs" src="<?php echo $events_three[0]; ?>"/>
				</div><!-- col2 -->
				<div id="events_col3">
					<?php $events_four = wp_get_attachment_image_src(get_field('image4'), 'events-img-4'); ?>
					<img id="event_4" class="about_thumbs" src="<?php echo $events_four[0]; ?>"/>
					<?php $events_five = wp_get_attachment_image_src(get_field('image5'), 'events-img-5'); ?>
					<img id="event_5" class="about_thumbs" src="<?php echo $events_five[0]; ?>"/>
				</div><!-- col3 -->
			</div><!-- about collage -->
			<div id="content_wrapper_events">
				
					
					<?php $events_query = new WP_Query( array( 'post_type' => 'events','posts_per_page' => '6', 'order' => 'DSC' ) ); while($events_query->have_posts()) : $events_query->the_post(); ?>
          <div class="events_inner">
          	<?php $events_thumb = wp_get_attachment_image_src(get_field('events_image'), 'event-thumb'); ?>
						<img src="<?php echo $events_thumb[0]; ?>"/>
						<div class="event_content" style="margin:20px 0 0 0;width: 97%;">
								<h1><?php the_title(); ?></h1>
								<h2 class="dates"><?php the_field('date'); ?></h2>
								<p class="events_content"><?php the_field('description'); ?></p>
								<span class="share">Share</span><br/>
								<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
								<!--
<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/facebook_events.png"/></a>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/twitter_events.png"/></a>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/google_events.png"/></a>
-->
							</div><!-- event content -->
							
					</div><!-- events_inner -->
					
          
           <?php endwhile; ?>
           <?php wp_reset_postdata(); // reset the query ?>
					
					
					
					
					
	
				
			</div><!-- content wrapper -->
		</div><!-- #container -->


<?php get_footer(); ?>
