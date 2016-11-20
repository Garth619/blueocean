<?php
/*
    Template Name: Cocktails Content
*/

   
?> 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
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
			<!-- cocktails -->
			<div style="clear:both"></div>
				<div id="content" style="overflow: hidden;margin:0 auto;width:89%;" role="main">
				<img class="menu_header_pic" src="<?php the_field('cocktails_image'); ?>"/>
					<h1 class="menu_header">Drink Like a Fish</h1>
					<div class="one_menu_col">
					<span class="menu_section_title"><?php the_field('happy_hour'); ?></span>
					<?php if(get_field('happy_hour_items')): ?>
					<br/>
					<ul class="menu_list">
					<?php while(has_sub_field('happy_hour_items')): ?>
						<li><span class="menu_item_title"><?php the_sub_field('menu_items'); ?></span></li>
					<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div><!-- one_menu_col -->
				<div class="line_wrapper">
							<div class="green_line"></div>
						</div><!-- dotted wrapper -->
				<div class="one_menu_col">
					<span class="menu_section_title">Beer</span>
					<?php if(get_field('drafts')): ?>
						<br/>
						<span class="menu_section_title">Draft</span>
						<ul class="menu_list" style="margin-bottom:2px;">
							<?php while(has_sub_field('drafts')): ?>
							<li><span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					<?php endif; ?>
				</div><!-- end of one_menu_col -->
					<?php if(get_field('bottle')): ?>
						<br/>
						<div style="clear:both;"></div>
						<br/>
						<span class="menu_section_title">Bottle</span>
						<ul class="menu_list">
							<?php while(has_sub_field('bottle')): ?>
							<li><span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					<?php endif; ?>
				<div class="line_wrapper">
						<div class="green_line"></div>
				</div><!-- dotted wrapper -->
					<div class="one_menu_col">
						<span class="menu_section_title sash_col" style="width:100%;margin-bottom:25px;">Wine</span><br/>
						<span class="menu_section_title sash_col">Sparkling</span>
						<span class="menu_section_title sash_col2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glass.png"/></span>
						<span class="menu_section_title sash_col3" style=""><img class="adjust_bottle" src="<?php bloginfo( 'template_directory' ); ?>/images/bottle.png"/></span>
				<?php if(get_field('sparkling')): ?>
					<ul class="menu_list wine_width" style="overflow: visible;">
						<?php while(has_sub_field('sparkling')): ?>
						<li>
							<span class="menu_item_title sash_col"><?php the_sub_field('menu_item'); ?></span>
							<span class="menu_item_title sash_col2"><?php the_sub_field('menu_glass_price'); ?></span>
							<span class="menu_item_title sash_col3" style=""><?php the_sub_field('menu_bottle_price'); ?></span>
							<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
						</li>
						<?php endwhile; ?>
					</ul><!-- menu_list -->
				<?php endif; ?>
			</div><!-- one_menu_col -->
			<div class="one_menu_col" style="margin-top:0px;">
						<span class="menu_section_title sash_col">CHAMPAGNE</span>
						<span class="menu_section_title sash_col2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glass.png"/></span>
						<span class="menu_section_title sash_col3" style=""><img class="adjust_bottle" src="<?php bloginfo( 'template_directory' ); ?>/images/bottle.png"/></span>
				<?php if(get_field('champagne')): ?>
					<ul class="menu_list wine_width" style="overflow: visible;">
						<?php while(has_sub_field('champagne')): ?>
						<li>
							<span class="menu_item_title sash_col"><?php the_sub_field('menu_item'); ?></span>
							<span class="menu_item_title sash_col2"><?php the_sub_field('menu_glass_price'); ?></span>
							<span class="menu_item_title sash_col3" style=""><?php the_sub_field('menu_bottle_price'); ?></span>
							<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
						</li>
						<?php endwhile; ?>
					</ul><!-- menu_list -->
				<?php endif; ?>
			</div><!-- one_menu_col -->
			<div class="one_menu_col" style="margin-top:0px;">
						<span class="menu_section_title sash_col">White</span>
						<span class="menu_section_title sash_col2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glass.png"/></span>
						<span class="menu_section_title sash_col3" style=""><img class="adjust_bottle" src="<?php bloginfo( 'template_directory' ); ?>/images/bottle.png"/></span>
				<?php if(get_field('white')): ?>
					<ul class="menu_list wine_width" style="overflow: visible;">
						<?php while(has_sub_field('white')): ?>
						<li>
							<span class="menu_item_title sash_col"><?php the_sub_field('menu_item'); ?></span>
							<span class="menu_item_title sash_col2"><?php the_sub_field('menu_glass_price'); ?></span>
							<span class="menu_item_title sash_col3" style=""><?php the_sub_field('menu_bottle_price'); ?></span>
							<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
						</li>
						<?php endwhile; ?>
					</ul><!-- menu_list -->
				<?php endif; ?>
			</div><!-- one_menu_col -->
			<div class="one_menu_col" style="margin-top:0px;">
						<span class="menu_section_title sash_col">Red</span>
						<span class="menu_section_title sash_col2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glass.png"/></span>
						<span class="menu_section_title sash_col3" style=""><img class="adjust_bottle" src="<?php bloginfo( 'template_directory' ); ?>/images/bottle.png"/></span>
				<?php if(get_field('red')): ?>
					<ul class="menu_list wine_width" style="overflow: visible;">
						<?php while(has_sub_field('red')): ?>
						<li>
							<span class="menu_item_title sash_col"><?php the_sub_field('menu_item'); ?></span>
							<span class="menu_item_title sash_col2"><?php the_sub_field('menu_glass_price'); ?></span>
							<span class="menu_item_title sash_col3" style=""><?php the_sub_field('menu_bottle_price'); ?></span>
							<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
						</li>
						<?php endwhile; ?>
					</ul><!-- menu_list -->
				<?php endif; ?>
			</div><!-- one_menu_col -->
			<div class="line_wrapper">
						<div class="green_line"></div>
				</div><!-- dotted wrapper -->
				<div class="one_menu_col">
						<span class="menu_section_title sash_col">Sake</span>
						<span class="menu_section_title sash_col2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glass.png"/></span>
						<span class="menu_section_title sash_col3" style=""><img class="adjust_bottle" src="<?php bloginfo( 'template_directory' ); ?>/images/bottle.png"/></span>
				<?php if(get_field('sake')): ?>
					<ul class="menu_list wine_width" style="overflow: visible;">
						<?php while(has_sub_field('sake')): ?>
						<li>
							<span class="menu_item_title sash_col"><?php the_sub_field('menu_item'); ?></span>
							<span class="menu_item_title sash_col2"><?php the_sub_field('menu_glass_price'); ?></span>
							<span class="menu_item_title sash_col3" style=""><?php the_sub_field('menu_bottle_price'); ?></span>
							<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
						</li>
						<?php endwhile; ?>
					</ul><!-- menu_list -->
				<?php endif; ?>
			</div><!-- one_menu_col -->
			<div class="line_wrapper">
						<div class="green_line"></div>
				</div><!-- dotted wrapper -->
				<div class="one_menu_col">
						<span class="menu_section_title sash_col">Sake Bombs</span>
						<span class="menu_section_title sash_col2"><?php the_field('sake_bombs_price'); ?></span>
						<?php if(get_field('sake_bombs_repeater')): ?>
						<ul class="menu_list" style="overflow: visible;">
						<?php while(has_sub_field('sake_bombs_repeater')): ?>
							<li>
								<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span><br/>
								<span class="menu_description"><?php the_sub_field('menu_description'); ?></span>
							</li>
						<?php endwhile; ?>
						</ul><!-- menu_list -->
						<?php endif; ?>
				</div><!-- one_menu_col -->
				<div class="line_wrapper">
						<div class="green_line"></div>
				</div><!-- dotted wrapper -->
				<div class="one_menu_col">
						<span class="menu_section_title sash_col">Cocktails</span>
						<span class="menu_section_title sash_col2"><?php the_field('cocktails_price'); ?></span>
						<?php if(get_field('cocktails_listdone')): ?>
						<ul class="menu_list cocktail_width" style="overflow: visible;">
						<?php while(has_sub_field('cocktails_listdone')): ?>
							<li>
								<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span><br/>
								<span class="menu_description"><?php the_sub_field('menu_description'); ?></span>
							</li>
						<?php endwhile; ?>
						</ul><!-- menu_list -->
						<?php endif; ?>
				</div><!-- one_menu_col -->
				<div class="line_wrapper">
						<div class="green_line"></div>
				</div><!-- dotted wrapper -->	
				<?php if(get_field('malt_whiskey_list')): ?>
						<br/>
						<div style="clear:both;"></div>
						<br/>
						<span class="menu_section_title">Malt Whiskey</span>
						<ul class="menu_list dinner_width">
							<?php while(has_sub_field('malt_whiskey_list')): ?>
							<li><span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					<?php endif; ?>
					<div class="line_wrapper">
						<div class="green_line"></div>
				</div><!-- dotted wrapper -->	
				<?php if(get_field('republic_of_tea')): ?>
						<br/>
						<div style="clear:both;"></div>
						<br/>
						<span class="menu_section_title">Republic of Tea</span>
						<ul class="menu_list dinner_width">
							<?php while(has_sub_field('republic_of_tea')): ?>
							<li><span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					<?php endif; ?>
					
					
					
						
				</div><!-- #content -->
			<!-- </div> content wrapper --> 
			<div class="my_footer" style="margin-top:15px;">
				<a href="http://blueoceanrobatasushi.com">Back to Main Page</a>
<!--
				<a href="http://www.loveboatsushi.com/" target="_blank"><span class="footer_title">LOVE BOAT</span><br/>OCEANSIDE & SAN MARCOS</a>
				<a href="http://bluesmokesushi.com" target="_blank"><span class="footer_title">Blue Smoke</span><br/>Fashion Valley</a>
				<a href="https://www.facebook.com/BigBangSushi" target="_blank"><span class="footer_title">Big Bang</span><br/>Rancho Bernardo</a>
-->
			</div><!-- my footer -->
			
<?php wp_footer(); ?>
</body>
</html>