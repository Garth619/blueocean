<?php
/**
 * Template Name: Main
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
		<div id="slideshow_wrapper">
			<div id="slideshow" class="cycle-slideshow" data-cycle-slides="> div">
				<div class="slide hide">
				<div class="slide_content">
							<span class="slide_one">We Invite you to<br/><i>swim against the tide</i></span>
						</div><!-- slide content -->
						<div style="clear:both"></div>
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/slide1bg.jpg"/>
				</div><!--slide hide -->
				<div class="slide hide">
					<div class="slide_content">
						<span class="slide_four" style="right:255px;font-size:37px;line-height:1.1">JOIN US FOR<br/>HAPPY HOUR<!-- <br/><i style="font-size:25px;">Sunday through Thursday 4 PM to 6 PM</i> --></span>
				</div><!-- slide content -->
				<div style="clear:both"></div>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/slide4bg.jpg"/>
				</div><!--slide hide -->
				<div class="slide hide">
					<div style="display:none" class="slide_content">
						<span class="slide_two">LATE NIGHT SPECIALS<br/><i style="font-size:31px;">FROM 10PM T0 MIDNIGHT</i></span>
				</div><!-- slide content -->
				<div style="clear:both"></div>
					<img style="margin-top:0px;" src="<?php bloginfo( 'template_directory' ); ?>/images/slide_new_late_night.jpg"/>
				</div><!--slide hide -->
				
						
				
<!--
<div class="slide hide">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/slide2bg.jpg"/>
				</div>
				<div class="slide hide">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/slide3bg.jpg"/>
				</div>
				<div class="slide hide">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/slide4bg.jpg"/>
				</div>
-->
			</div><!-- slideshow -->
		</div><!-- slideshow wrapper -->
		<div id="container">
			<div id="content" role="main" style="float:left;width:1020px;">
				<div id="menu">
					<h1 class="main_page"><a href="<?php bloginfo( 'url' ); ?>/menu/#lunch">Menu</a></h1>
					<div class="menu_thumb one">
						<div class="rgba">
							<a href="<?php the_field('menu_1_link'); ?>"><span><?php the_field('menu_1_title'); ?></span></a>
						</div><!-- rgba -->
						<a href="<?php the_field('menu_1_link'); ?>">
						<?php $menu_one = wp_get_attachment_image_src(get_field('menu_thumb_1'), 'main-page-menu'); ?>
            <img class="menu_tiles" src="<?php echo $menu_one[0]; ?>"/></a>
						<a href="<?php the_field('menu_1_link'); ?>" class="icons"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/></a>
					</div><!-- menu thumb -->
					<div class="menu_thumb two">
						<div class="rgba">
							<a href="<?php the_field('menu_2_link'); ?>"><span><?php the_field('menu_2_title'); ?></span></a>
						</div><!-- rgba -->
						<a href="<?php the_field('menu_2_link'); ?>">
						<?php $menu_two = wp_get_attachment_image_src(get_field('menu_thumb_2'), 'main-page-menu'); ?>
            <img class="menu_tiles" src="<?php echo $menu_two[0]; ?>"/></a>
						<a href="<?php the_field('menu_2_link'); ?>" class="icons"><img style="margin: 7px;" src="<?php bloginfo( 'template_directory' ); ?>/images/icon_2.png"/></a>
					</div><!-- menu thumb -->
					<div class="menu_thumb three">
						<div class="rgba">
							<a href="<?php the_field('menu_3_link'); ?>"><span><?php the_field('menu_3_title'); ?></span></a>
						</div><!-- rgba -->
						<a href="<?php the_field('menu_3_link'); ?>">
						<?php $menu_three = wp_get_attachment_image_src(get_field('menu_thumb_3'), 'main-page-menu'); ?>
            <img class="menu_tiles" src="<?php echo $menu_three[0]; ?>"/></a>
						<a href="<?php the_field('menu_3_link'); ?>" class="icons"><img style="margin: 11px 4px 4px 3px;" src="<?php bloginfo( 'template_directory' ); ?>/images/icon_3.png"/></a>
					</div><!-- menu thumb -->
					<div class="menu_thumb four">
						<div class="rgba">
							<a href="<?php the_field('menu_4_link'); ?>"><span><?php the_field('menu_4_title'); ?></span></a>
						</div><!-- rgba -->
						<a href="<?php the_field('menu_4_link'); ?>">
						<?php $menu_four = wp_get_attachment_image_src(get_field('menu_thumb_4'), 'main-page-menu'); ?>
            <img class="menu_tiles" src="<?php echo $menu_four[0]; ?>"/></a>
						<a href="<?php the_field('menu_4_link'); ?>" class="icons"><img style="margin: 4px 4px 4px 7px;" src="<?php bloginfo( 'template_directory' ); ?>/images/icon_4.png"/></a>
					</div><!-- menu thumb -->
				</div><!-- menu -->
				<div id="events">
					<h1 class="main_page h1event"><a href="">Upcoming Events</a></h1>
					<div id="events_inner">
						
						
						<?php $mainevents_query = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => '2', 'order' => 'DSC' ) ); while($mainevents_query->have_posts()) : $mainevents_query->the_post(); ?>
             <div class="single_event">
							<a href="<?php the_permalink(); ?>">
								<?php $mainevent = wp_get_attachment_image_src(get_field('events_image'), 'main-event'); ?>
								<img src="<?php echo $mainevent[0]; ?>"/></a>
							<div class="event_content">
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<h2 class="dates"><a href="<?php the_permalink(); ?>"><?php the_field('date'); ?></a></h2>
								<p class="events_content"><a href="<?php the_permalink(); ?>"><?php the_field('description'); ?></a></p>
								<span class="share">Share</span><br/>
								<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
							</div><!-- event content -->
						</div><!-- single event -->
						  
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>
						<a class="more_events" href="<?php bloginfo( 'url' ); ?>/our-events">SEE ALL EVEnts</a>
					</div><!-- events inner -->
				</div><!-- events -->
			</div><!-- #content -->
		</div><!-- #container -->
		<?php // get_sidebar(); ?>
<?php get_footer(); ?>
