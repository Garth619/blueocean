<?php
/*
    Template Name: Menu Content
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
				<!-- lunch -->
				<div style="clear:both"></div>
				<img class="menu_header_pic" src="<?php the_field('lunch_image'); ?>"/>
					<h1 class="menu_header">Lunch</h1>
					<?php if(get_field('speciality_rolls')): ?>
						<div class="one_menu_col">
							<span class="menu_section_title">Specialty Rolls</span>
							<ul class="menu_list">
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
							<div class="green_line"></div>
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
							<div class="green_line"></div>
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
					<div style="clear:both"></div>
					<?php if(get_field('desserts')): ?>
					<div class="line_wrapper">
							<div class="green_line"></div>
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
						</div><!-- one_menu_col -->	
					<?php endif; ?>	
					
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<div class="one_menu_col">
						<span class="menu_section_title">Sides</span>
						<ul class="menu_list">
							
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->

					
					
					
					
					
					
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/small_plate.png"/>
					<h1 class="menu_header">Soups & Salads</h1>
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title">Small Plates</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">WAGYU BEEF DUMPLINGS</span><span class="menu_item_price">5</span><span class="menu_description" style="clear:both">kimchi / hibiscus sweet & sour / soy-sesame dipping sauce</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->






					
					
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					
<!-- <img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/sailboat.png"/> -->
					<!-- <h1 class="menu_header">Sushi</h1> -->

					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title sash_col">Sushi & Sashimi</span>
						<span class="menu_section_title sash_col2" style="font-size:17px;line-height:18px;">Nigiri<br/>2 pc</span>
						<span class="menu_section_title sash_col3" style="font-size:17px">Sashimi<br/>5 pc</span>
						<ul class="menu_list" style="overflow: visible;">
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					
					
					
					
					
					
					
					
					<div class="one_menu_col">
						<span class="menu_section_title">Specialty Rolls</span>
						<ul class="menu_list">
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
					<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/robata_menu_pic.png"/>
					<h1 class="menu_header">ROBATA GrILL</h1>
					<span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span>
					<div class="left_menu_col">
						<span class="menu_section_title">MEaTS</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- left_menu_col -->
					<div class="right_menu_col">
						<span class="menu_section_title">MEaTS</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5.5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- right_menu_col -->
					<div class="line_wrapper">
						<div class="dotted_line"></div>
					</div>
					<div class="left_menu_col">
						<span class="menu_section_title">MEaTS</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- left_menu_col -->
					<div class="right_menu_col">
						<span class="menu_section_title">MEaTS</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- right_menu_col -->
					
					<div style="clear:both"></div>
					
					
					
					
					
					<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/small_plate.png"/>
					<h1 class="menu_header">Dinner</h1>
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title">Small Plates</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">WAGYU BEEF DUMPLINGS</span><span class="menu_item_price">5</span><span class="menu_description" style="clear:both">kimchi / hibiscus sweet & sour / soy-sesame dipping sauce</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
						
						
						
						
						<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<!-- 	<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/small_plate.png"/> -->
					<!-- <h1 class="menu_header">Dinner</h1> -->
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title">Small Plates</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">WAGYU BEEF DUMPLINGS</span>
									<span class="menu_item_price">5</span>
									<span class="menu_description" style="clear:both">kimchi / hibiscus sweet & sour / soy-sesame dipping sauce</span>
							</li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					
					
					
					
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<div style="clear:both"></div>
				<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/specialty_rolls.png"/>
					<h1 class="menu_header">Sushi</h1>
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title">Specialty Rolls</span>
						<ul class="menu_list">
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title sushi_col">ALBACORE DELIGHT</span>
									<span class="menu_description_sushi sushi_col2">IN: albacore and crab mixed with miso sauce, cucumber, crunch powder<br/><br/>TOP:
albacore, avocado, green onion (chili oil, ponzu)</span>
									<span class="menu_item_price">5</span>
							</li>
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<!--
<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/specialty_rolls.png"/>
					<h1 class="menu_header">Sushi</h1>
-->
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title">Non-Roll Items</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">FRENCH KISS</span>
									<span class="menu_item_price">5</span>
									<span class="menu_description_sushi sushi_col2" style="clear:both;">IN: crab, avocado<br/><br/>TOP: albacore, 1pc kaiware (no rice) (garlic mustard, spicy mayo, chili drop)</span>
									
							</li>
							<li><span class="menu_item_title">FRENCH KISS</span>
									<span class="menu_item_price">5</span>
									<span class="menu_description_sushi sushi_col2" style="clear:both;">IN: crab, avocado<br/><br/>TOP: albacore, 1pc kaiware (no rice) (garlic mustard, spicy mayo, chili drop)</span>
									
							</li>
							<li><span class="menu_item_title">FRENCH KISS</span>
									<span class="menu_item_price">5</span>
									<span class="menu_description_sushi sushi_col2" style="clear:both;">IN: crab, avocado<br/><br/>TOP: albacore, 1pc kaiware (no rice) (garlic mustard, spicy mayo, chili drop)</span>
									
							</li>
							
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					
<!-- <img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/sailboat.png"/> -->
					<!-- <h1 class="menu_header">Sushi</h1> -->

					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title sash_col">Sushi & Sashimi</span>
						<span class="menu_section_title sash_col2" style="font-size:17px;line-height:18px;">Nigiri<br/>2 pc</span>
						<span class="menu_section_title sash_col3" style="font-size:17px">Sashimi<br/>5 pc</span>
						<ul class="menu_list" style="overflow: visible;">
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					

<span id="warning">Consuming raw or undercooked meat, fish, shellfish, poultry or eggs may
increase your risk of foodborne illness.<br/><br/>
Please alert your server if you have any food allergies.
</span>
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/cocktails.png"/>
					<h1 class="menu_header">Drink Like a Fish</h1>
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
					<span class="menu_section_title">Beer</span>
						<br/>
						<span class="menu_section_title">Draft</span>
						<ul class="menu_list" style="margin-bottom:2px;">
							<li><span class="menu_item_title">sapporo</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
							<li><span class="menu_item_title">KURoBUTA SAUSAGE</span><span class="menu_item_price">5</span></li>
						</ul><!-- menu_list -->
						<br/>
						<div style="clear:both;"></div>
						<br/>
						<span class="menu_section_title">Bottle</span>
						<ul class="menu_list">
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									<span class="menu_item_price">5</span>
							</li>
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									<span class="menu_item_price">5</span>
							</li>
							
						</ul>
					</div><!-- one_menu_col -->
					
					
					
					
					
											
						
						
						
						
						
						<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					<!--
<img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/cocktails.png"/>
					<h1 class="menu_header">Drink Like a Fish</h1>
-->
					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
					<span class="menu_section_title">Robata Grill Happy Hour</span>
						<span class="menu_section_title">Sunday - Thursday</span>
						<span class="menu_section_title">4 PM – 6 PM AND 10 PM – 12 AM</span>
						<br/>
						<ul class="menu_list">
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									
							</li>
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									
							</li>
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									
							</li>
							<li><span class="menu_item_title">KIRIN LIGHT - 12oz</span>
									
							</li>
							
						</ul>
					</div><!-- one_menu_col -->

					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					
<!-- <img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/sailboat.png"/> -->
					<!-- <h1 class="menu_header">Sushi</h1> -->

					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title sash_col">Sake</span>
						<span class="menu_section_title sash_col2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glass.png"/></span>
						<span class="mebombsnu_section_title sash_col3"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bottle.png"/></span>
						<ul class="menu_list" style="overflow: visible;">
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							<li>
								<span class="menu_item_title sash_col">ALBACORE (TOMBO)</span>
								<span class="menu_item_title sash_col2">4.20</span>
								<span class="menu_item_title sash_col3">7</span>
							</li>
							
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					
<!-- <img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/sailboat.png"/> -->
					<!-- <h1 class="menu_header">Sushi</h1> -->

					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title sash_col">Sake Bombs</span>
						<span class="menu_section_title sash_col2">6</span>
						
						<ul class="menu_list" style="overflow: visible;">
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							
							
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->
					
					
					
					
					<div class="line_wrapper">
						<div class="green_line"></div>
					</div><!-- dotted wrapper -->
					
<!-- <img class="menu_header_pic" src="<?php bloginfo( 'template_directory' ); ?>/images/sailboat.png"/> -->
					<!-- <h1 class="menu_header">Sushi</h1> -->

					<!-- <span class="menu_asterik">Served as two skewers. *Starred items served as one skewer</span> -->
					<div class="one_menu_col">
						<span class="menu_section_title sash_col">Cocktails</span>
						<span class="menu_section_title sash_col2">6</span>
						
						<ul class="menu_list" style="overflow: visible;">
							<li>
								<span class="menu_item_title">BANANA COCONUT DAIQUIRI</span><br/>
								<span class="menu_description">aged rum, demerara sugar, lime,
coconut & banana</span>
							</li>
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							<li>
								<span class="menu_item_title">Firebomb</span><br/>
								<span class="menu_description">Cinnamon sake & ginger beer</span>
							</li>
							
							
						</ul><!-- menu_list -->
					</div><!-- one_menu_col -->

					
					
					
					
					
					
					
					
				</div><!-- #content -->
			<!-- </div><!-- content wrapper --> 
<?php wp_footer(); ?>
</body>
</html>
