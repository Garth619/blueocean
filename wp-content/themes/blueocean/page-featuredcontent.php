<?php
/*
    Template Name: Featured Content
*/

   
?> 
<!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<?php wp_head(); ?>
<script type="text/javascript">
jQuery( document ).ready(function() {
jQuery('body').delay(800).queue(function(){
jQuery(this).addClass('fadein').clearQueue();
});
});
</script>
</head>
<body id="<?php echo $page ?>" <?php body_class(); ?>>
			<!-- <div id="content_wrapper" style="border:none;margin:0;padding:0;"> -->
			<div style="clear:both"></div>
				<div id="content" style="overflow: hidden;padding: 0 18px;width:777px;" role="main">
				<br/>
				<br/>
				
				Coming Soon

					
					
					
					
					
					
					
					
				</div><!-- #content -->
			<!-- </div><!-- content wrapper --> 
<?php wp_footer(); ?>
</body>
</html>