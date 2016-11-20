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
			<div id="slideshow">
					<a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/images/slide1.jpg"/></a>
			</div><!-- slideshow -->
		</div><!-- slideshow wrapper -->
		<div id="container">
			<div id="content" role="main">
				<div id="menu">
					<h1 class="main_page"><a href="">Menu</a></h1>
					<div class="menu_thumb one">
						<a href=""><img class="menu_tiles" src="<?php bloginfo( 'template_directory' ); ?>/images/menu-test.jpg"/></a>
						<a href="" class="icons"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/></a>
					</div><!-- menu thumb -->
					<div class="menu_thumb two">
						<a href=""><img class="menu_tiles" src="<?php bloginfo( 'template_directory' ); ?>/images/menu-test.jpg"/></a>
						<a href="" class="icons"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/></a>
					</div><!-- menu thumb -->
					<div class="menu_thumb three">
						<a href=""><img class="menu_tiles" src="<?php bloginfo( 'template_directory' ); ?>/images/menu-test.jpg"/></a>
						<a href="" class="icons"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/></a>
					</div><!-- menu thumb -->
					<div class="menu_thumb four">
						<a href=""><img class="menu_tiles" src="<?php bloginfo( 'template_directory' ); ?>/images/menu-test.jpg"/></a>
						<a href="" class="icons"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/></a>
					</div><!-- menu thumb -->
				</div><!-- menu -->
				<div id="events">
					<h1 class="main_page h1event"><a href="">Upcoming Events</a></h1>
					<div id="events_inner">
						<div class="single_event">
							<a href=""><img height="194" src="<?php bloginfo( 'template_directory' ); ?>/images/events_thumbnail.png"/></a>
							<div class="event_content">
								<h1><a href="">Event Title</a></h1>
								<h2 class="dates"><a href="">MAY 10th 2014 6pm -12pm</a></h2>
								<p class="events_content"><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</a></p>
								<span class="share"><a href="">Share</a></span><br/>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/facebook_events.png"/></a>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/twitter_events.png"/></a>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/google_events.png"/></a>
							</div><!-- event content -->
						</div><!-- single event -->
						<div class="single_event">
							<a href=""><img height="194" src="<?php bloginfo( 'template_directory' ); ?>/images/events_thumbnail.png"/></a>
							<div class="event_content">
								<h1><a href="">Event Title</a></h1>
								<h2 class="dates"><a href="">MAY 10th 2014 6pm -12pm</a></h2>
								<p class="events_content"><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</a></p>
								<span class="share"><a href="">Share</a></span><br/>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/facebook_events.png"/></a>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/twitter_events.png"/></a>
								<a href=""><img class="events_social" src="<?php bloginfo( 'template_directory' ); ?>/images/google_events.png"/></a>
							</div><!-- event content -->
						</div><!-- single event -->

					</div><!-- events inner -->
				</div><!-- events -->
			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
