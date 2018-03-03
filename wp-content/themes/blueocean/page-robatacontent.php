<?php
/*
    Template Name: Robata Content
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
			<!- robata ->
			<div style="clear:both"></div>
				<div id="content" style="overflow: hidden;padding: 0 18px;width:777px;" role="main">
				<img class="menu_header_pic" src="<?php the_field('robata_image'); ?>"/>
					<h1 class="menu_header">ROBATA GrILL</h1>
					<span class="menu_asterik"><?php the_field('robata_description'); ?></span>
					<?php if( get_field('robata_row') ): ?>
						<?php while(has_sub_field('robata_row') ): ?>
							<?php if(get_sub_field('left_row') ): ?>
								<div class="left_menu_col">
									<span class="menu_section_title"><?php the_sub_field('left_row_section_title'); ?></span>
									<ul class="menu_list">
								<?php while(has_sub_field('left_row') ): ?>
										<li>
											<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
											<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
										</li>
								<?php endwhile; ?>
									</ul><!-- menu_list -->
								</div><!-- left_menu_col -->
								<?php endif; ?>
							<?php if(get_sub_field('right_row') ): ?>
								<div class="right_menu_col">
									<span class="menu_section_title"><?php the_sub_field('right_row_section_title'); ?></span>
										<ul class="menu_list">
								<?php while(has_sub_field('right_row') ): ?>
										<li>
											<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
											<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
										</li>
								<?php endwhile; ?>
									</ul><!-- menu_list -->
								</div><!-- right_menu_col -->
							<?php endif; ?>
							<div class="line_wrapper">
								<div class="dotted_line"></div>
							</div>
						<?php endwhile; ?>
				<?php endif;?>
			</div><!-- #content -->
			<!-- </div> content wrapper --> 
<?php wp_footer(); ?>
</body>
</html>
