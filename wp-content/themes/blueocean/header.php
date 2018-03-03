<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=1" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/jspkg-archive/vendor/jquery.hashchange.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/jspkg-archive/lib/jquery.easytabs.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready( function() {
      jQuery('#ajax-tab-container').easytabs({
	      panelContext: jQuery(".panel-container")
      });
    });
  </script>
<script>
jQuery(document).ready(function() {
           
           jQuery('.hide').show();
        });
</script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
			'scrolling'   : 'no'
		});
	});
</script>
<script type="text/javascript">
jQuery( document ).ready(function() {
jQuery('body').delay(800).queue(function(){
jQuery(this).addClass('fadein').clearQueue();
});
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function($){
	//variables
	var $window = jQuery(window);
	var $container = jQuery("#mysidebar_menu");
	var $main = jQuery("#main");
	var window_min = 0;
	var window_max = 0;
	var threshold_offset = 50;
	/*
	 set the container's maximum and minimum limits as well as movement thresholds
	*/
	function set_limits(){
		//max and min container movements
		var max_move = $main.offset().top + $main.height() - $container.height() - 2*parseInt($container.css("top") );
		var min_move = $main.offset().top;
		//save them
		$container.attr("data-min", min_move).attr("data-max",max_move);
		//window thresholds so the movement isn't called when its not needed!
		//you may wish to adjust the freshhold offset
		window_min = min_move - threshold_offset;
		window_max = max_move + $container.height() + threshold_offset;
	}
	//sets the limits for the first load
	set_limits();
	
	function window_scroll(){
		//if the window is within the threshold, begin movements
		if( $window.scrollTop() >= window_min && $window.scrollTop() < window_max ){
			//reset the limits (optional)
			set_limits();
			//move the container
			container_move();
		}
	}
	$window.bind("scroll", window_scroll);
	
	/**
	 * Handles moving the container if needed.
	**/
	function container_move(){
		var wst = $window.scrollTop();
		//if the window scroll is within the min and max (the container will be "sticky";
		if( wst >= $container.attr("data-min") && wst <= $container.attr("data-max") ){
			//work out the margin offset
			var margin_top = $window.scrollTop() - $container.attr("data-min");
			//margin it down!
			$container.css("margin-top", margin_top);
		//if the window scroll is below the minimum 
		}else if( wst <= $container.attr("data-min") ){
			//fix the container to the top.
			$container.css("margin-top",0);
		//if the window scroll is above the maximum 
		}else if( wst > $container.attr("data-max") ){
			//fix the container to the top
			$container.css("margin-top", $container.attr("data-max")-$container.attr("data-min")+"px" );
		}
	}
	//do one container move on load
	container_move();
});
</script>


<script>
jQuery(document).ready(function() {
    jQuery('.click').click(function(){
        jQuery('html, body').animate({scrollTop:jQuery('#myscroll').offset().top - 10}, 'slow');

        return false;
    });
});
</script>
</head>
<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">
<div id="top"></div>
	<div id="header">
		<div id="inner_header">
			<a href="<?php bloginfo( 'url' ); ?>"><img alt="Blue Ocean Robata & Sushi Bar - Carlsbad, California" id="logo" src="<?php bloginfo( 'template_directory' ); ?>/images/blue_ocean_robata_sushi_carlsbad.png"/></a>
			<a href="<?php bloginfo( 'url' ); ?>/gift-cards/" class="gift_card">Buy a Gift Card<img class="arrow" src="<?php bloginfo( 'template_directory' ); ?>/images/arrow.png"/></a>
			</div><!-- inner header -->
		<div id="mynav">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- nav -->
	</div><!-- #header -->

	<div id="main">
