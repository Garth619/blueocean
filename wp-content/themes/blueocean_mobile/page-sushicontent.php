<?php
/*
    Template Name: Sushi Content
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
			<div style="clear:both"></div>
				<div id="content" style="overflow: hidden;margin:0 auto;width:89%;" role="main">
				<!-- lunch -->
				<div style="clear:both"></div>
				<img class="menu_header_pic" src="<?php the_field('lunch_image'); ?>"/>
					<h1 class="menu_header">Sushi</h1>
					<?php if(get_field('speciality_rolls')): ?>
						<div class="one_menu_col">
							<span class="menu_section_title">Specialty Rolls</span>
							<ul class="menu_list sushi_list">
					<?php while(has_sub_field('speciality_rolls')): ?>
								<li><span class="menu_item_title sushi_col"><?php the_sub_field('menu_item'); ?></span>
										<span class="menu_description_sushi sushi_col2"><?php the_sub_field('menu_item_description'); ?></span>
										<span class="menu_item_price"><?php the_sub_field('price'); ?></span>
								</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
						</div><!-- one_menu_col -->
					<?php endif; ?>
					<div style="clear:both"></div>
					<?php if(get_field('sushisashimi')): ?>
						<div class="line_wrapper">
							<div class="green_line"></div>
						</div><!-- dotted wrapper -->
						<div class="one_menu_col">
							<span class="menu_section_title sash_col">Sushi & Sashimi</span>
							<span class="menu_section_title sash_col2" style="font-size:17px;line-height:18px;">Nigiri<br/>2 pc</span>
							<span class="menu_section_title sash_col3" style="font-size:17px;line-height:18px;">Sashimi<br/>5 pc</span>
							<ul class="menu_list">
					<?php while(has_sub_field('sushisashimi')): ?>
								<li>
									<span class="menu_item_title sash_col"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_title sash_col2"><?php the_sub_field('nigiri'); ?></span>
									<span class="menu_item_title sash_col3"><?php the_sub_field('sashimi'); ?></span>
									</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
						</div><!-- one_menu_col -->
					<?php endif; ?>
					<?php if(get_field('deluxe_lunch')): ?>
					<div class="line_wrapper">
						<div class="green_line" style="border-top:#00a4d8 2px solid"></div>
					</div><!-- dotted wrapper -->
					<div class="one_menu_col">
						<span class="menu_section_title">Blue Ocean Special</span>
						<ul class="menu_list ocean_special">
					<?php while(has_sub_field('deluxe_lunch')): ?>
							<li>
								<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
								<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					<?php endif; ?>
					<?php if(get_field('unconventional_sushi_lunch')): ?>
					<div class="line_wrapper">
						<div class="green_line" style="border-top:#f1b13b 2px solid"></div>
					</div><!-- dotted wrapper -->
					<div class="one_menu_col">
						<span class="menu_section_title">Unconventional Sushi</span>
						<ul class="menu_list uncon_sushi">
					<?php while(has_sub_field('unconventional_sushi_lunch')): ?>
							<li>
								<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
								<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					<?php endif; ?>
					<?php if(get_field('soups_salads')): ?>
						<div class="line_wrapper">
							<div class="green_line"></div>
						</div><!-- dotted wrapper -->
						<!--
<img class="menu_header_pic" src="<?php the_field('soups_salads_image'); ?>"/>
						<h1 class="menu_header">Soups & Salads</h1>
-->
						<div class="one_menu_col">
							<span class="menu_section_title">Soups & Salads</span>
							<ul class="menu_list">
					<?php while(has_sub_field('soups_salads')): ?>
								<li>
									<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
									<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
								</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
						</div><!-- one_menu_col -->
					<?php endif; ?>
					<div style="clear:both"></div>
					<?php if(get_field('blue_ocean_bentos_')): ?>
						<div class="line_wrapper">
							<div class="green_line" style="border-top:#00a4d8 2px solid"></div>
						</div><!-- dotted wrapper -->
						<!-- <h1 class="menu_header" style="margin-top:25px;">BLUE OCEAN BENTOS</h1> -->
						<div class="one_menu_col">
							<span class="menu_section_title">BLUE OCEAN BENTOS</span>
							<span class="menu_asterik_left"><?php the_field('bentos_description'); ?></span>
							<ul class="menu_list">
					<?php while(has_sub_field('blue_ocean_bentos_')): ?>
								<li>
									<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
									<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
								</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
						</div><!-- one_menu_col -->
					<?php endif; ?>
					<div style="clear:both"></div>
					<?php if(get_field('misc')): ?>
						<div class="line_wrapper">
							<div class="green_line" style="border-top:#f1b13b 2px solid"></div>
						</div><!-- dotted wrapper -->
						<div class="one_menu_col">
							<ul class="menu_list_dashed">
					<?php while(has_sub_field('misc')): ?>
								<li>
									<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
									<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
								</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
						</div><!-- one_menu_col -->
					<?php endif; ?>
					<div style="clear:both"></div>
					<?php if(get_field('sides')): ?>
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<div class="one_menu_col">
						<span class="menu_section_title">Sides</span>
						<ul class="menu_list">
					<?php while(has_sub_field('sides')): ?>
							<li>
								<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
								<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
							</li>
					<?php endwhile; ?>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					<?php endif; ?>
					<?php if(get_field('non_roll_items_lunch')): ?>
					<div class="line_wrapper">
						<div class="green_line" style="border-top:#00a4d8 2px solid;"></div>
					</div><!-- dotted wrapper -->
						<div class="one_menu_col">
							<span class="menu_section_title">Non Roll Items</span>
							<ul class="menu_list">
					<?php while(has_sub_field('non_roll_items_lunch')): ?>
								<li><span class="menu_item_title sushi_col"><?php the_sub_field('menu_item'); ?></span>
										<span class="menu_description_sushi sushi_col2"><?php the_sub_field('menu_item_description'); ?></span>
										<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
								</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
						</div><!-- one_menu_col -->
					<?php endif; ?>
					<div style="clear:both"></div>
					<?php if(get_field('desserts')): ?>
					<div class="line_wrapper">
							<div class="green_line" style="border-top:#f1b13b 2px solid;"></div>
						</div><!-- dotted wrapper -->
						<!-- <h1 class="menu_header" style="margin-top:25px;">BLUE OCEAN BENTOS</h1> -->
						<div class="one_menu_col">
							<span class="menu_section_title">Desserts</span>
							<ul class="menu_list">
					<?php while(has_sub_field('desserts')): ?>
								<li>
									<span class="menu_item_title"><?php the_sub_field('menu_item'); ?></span>
									<span class="menu_item_price"><?php the_sub_field('menu_price'); ?></span>
									<span class="menu_description" style="clear:both"><?php the_sub_field('menu_description'); ?></span>
								</li>
					<?php endwhile; ?>
							</ul><!-- menu_list -->
							<span id="warning">Consuming raw or undercooked meat, fish, shellfish, poultry or eggs may
increase your risk of foodborne illness.<br/><br/>
Please alert your server if you have any food allergies.
</span>
						</div><!-- one_menu_col -->	
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
