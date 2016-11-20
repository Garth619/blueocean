<?php
/**
 * Template Name: Menu
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
			
			<div id="mysidebar_menu">
				<h1 class="inner_page_sidebar" style="padding-top:10px">Menu</h1>
				<div id="ajax-tab-container" class='tab-container'>
					<ul class="tabs sidebar_menu">
						<li class="tab"><a class="click" href="<?php bloginfo( 'url' ); ?>/sushi#menu_collage" data-target="#sushi">+ Sushi</a></li>
						<li class="tab"><a class="click" href="<?php bloginfo( 'url' ); ?>/robata#menu_collage" data-target="#robata">+ Robata</a></li>
						<li class="tab"><a class="click" href="<?php bloginfo( 'url' ); ?>/lunch#menu_collage" data-target="#lunch">+ Lunch</a></li>
						<li class="tab"><a class="click" href="<?php bloginfo( 'url' ); ?>/dinner#menu_collage" data-target="#dinner">+ Dinner</a></li>
						<!-- <li class="tab"><a class="click" href="http://processpeak.com/staging/blue_ocean/featured#menu_collage" data-target="#featured">+ Featured</a></li> -->
						<li class="tab"><a class="click" href="<?php bloginfo( 'url' ); ?>/cocktails#menu_collage" data-target="#cocktails">+ Cocktails</a></li>
					</ul>
				</div><!-- ajax container -->
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/trim.png"/>
			</div><!-- sidebar menu -->
			<div id="content_wrapper" style="float:right; min-height: 1000px;">
			<h1 class="inner_page" style="margin-top:0px;"><?php the_field('ajax_menu_title'); ?></h1>
			<div id="menu_collage">
				<div class="icons_inner_menu">
					<img style="margin:4px" src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/>
				</div>
					<div id="menu_col1">
						<div class="menu_thumb_wrapper">
							<?php $imageID = get_field('menu_image_1'); ?>
							<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
							<?php $menu_one = wp_get_attachment_image_src(get_field('menu_image_1'), 'menu-img-1'); ?>
							<img alt="<?php echo $alt_text; ?>" id="inner_menu_1" class="inner_menu_thumbs" src="<?php echo $menu_one[0]; ?>"/>
							<div class="menu_gradient" id="menu_gradient1">
								<?php if(get_field('menu_1_description')): ?>
								<span class="thumb_menu_title"><?php the_field('menu_1_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_1_price'); ?></span>
								<span class="thumb_menu_description"><?php the_field('menu_1_description'); ?></span>
								<?php else : ?>
								<span style="padding-top:18px;" class="thumb_menu_title"><?php the_field('menu_1_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_1_price'); ?></span>
								<?php endif; ?>
								</div><!-- menu gradient -->
						</div><!-- menu_thumb_wrapper -->
						<div class="menu_thumb_wrapper">
							<?php $imagetwo = get_field('menu_image_2'); ?>
							<?php $alt_texttwo = get_post_meta($imagetwo , '_wp_attachment_image_alt', true); ?>
							<?php $menu_two = wp_get_attachment_image_src(get_field('menu_image_2'), 'menu-img-2'); ?>
							<img alt="<?php echo $alt_texttwo; ?>" id="inner_menu_2" class="inner_menu_thumbs" src="<?php echo $menu_two[0]; ?>"/>
							<div class="menu_gradient" id="menu_gradient2">
								<?php if(get_field('menu_2_description')): ?>
								<span class="thumb_menu_title"><?php the_field('menu_2_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_2_price'); ?></span>
								<span class="thumb_menu_description"><?php the_field('menu_2_description'); ?></span>
								<?php else : ?>
								<span style="padding-top:18px;" class="thumb_menu_title"><?php the_field('menu_2_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_2_price'); ?></span>
								<?php endif; ?>
							</div><!-- menu gradient -->
						</div><!-- menu_thumb_wrapper -->
					</div><!-- menu col 1 -->
					<div id="menu_col2">
						<div class="menu_thumb_wrapper">
							<?php $menu_three = wp_get_attachment_image_src(get_field('menu_image_3'), 'menu-img-3'); ?>
							<img height="281" width="412" id="inner_menu_3" class="inner_menu_thumbs" src="<?php echo $menu_three[0]; ?>"/>
							<div class="menu_gradient" id="menu_gradient3">
								<?php if(get_field('menu_3_description')): ?>
								<span class="thumb_menu_title"><?php the_field('menu_3_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_3_price'); ?></span>
								<span class="thumb_menu_description"><?php the_field('menu_3_description'); ?></span>
								<?php else : ?>
								<span style="padding-top:18px;" class="thumb_menu_title"><?php the_field('menu_3_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_3_price'); ?></span>
								<?php endif; ?>
							</div><!-- menu gradient -->
						</div><!-- menu_thumb_wrapper -->
					</div><!-- menu col 2 -->
					<div id="menu_col3">
						<div class="menu_thumb_wrapper">
							<?php $menu_four = wp_get_attachment_image_src(get_field('menu_image_4'), 'menu-img-4'); ?>
							<img id="inner_menu_4" class="inner_menu_thumbs" src="<?php echo $menu_four[0]; ?>"/>
							<div class="menu_gradient" id="menu_gradient4">
								<?php if(get_field('menu_4_description')): ?>
								<span class="thumb_menu_title"><?php the_field('menu_4_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_4_price'); ?></span>
								<span class="thumb_menu_description"><?php the_field('menu_4_description'); ?></span>
								<?php else : ?>
								<span style="padding-top:18px;" class="thumb_menu_title"><?php the_field('menu_4_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_4_price'); ?></span>
								<?php endif; ?>
							</div><!-- menu gradient -->
						</div><!-- menu_thumb_wrapper -->
						<div class="menu_thumb_wrapper">
							<?php $menu_five = wp_get_attachment_image_src(get_field('menu_image_5'), 'menu-img-4'); ?>
							<img id="inner_menu_5" class="inner_menu_thumbs" src="<?php echo $menu_five[0]; ?>"/>
							<div class="menu_gradient" id="menu_gradient5">
								<?php if(get_field('menu_5_description')): ?>
								<span class="thumb_menu_title"><?php the_field('menu_5_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_5_price'); ?></span>
								<span class="thumb_menu_description"><?php the_field('menu_5_description'); ?></span>
								<?php else : ?>
								<span style="padding-top:18px;" class="thumb_menu_title"><?php the_field('menu_5_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_5_price'); ?></span>
								<?php endif; ?>
							</div><!-- menu gradient -->
						</div><!-- menu_thumb_wrapper -->
						<div class="menu_thumb_wrapper">
							<?php $menu_six = wp_get_attachment_image_src(get_field('menu_image_6'), 'menu-img-4'); ?>
							<img id="inner_menu_6" class="inner_menu_thumbs" src="<?php echo $menu_six[0]; ?>"/>
							<div class="menu_gradient" id="menu_gradient6">
								<?php if(get_field('menu_6_description')): ?>
								<span class="thumb_menu_title"><?php the_field('menu_6_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_6_price'); ?></span>
								<span class="thumb_menu_description"><?php the_field('menu_6_description'); ?></span>
								<?php else : ?>
								<span style="padding-top:18px;margin-top: 0;" class="thumb_menu_title"><?php the_field('menu_6_title'); ?>&nbsp;&nbsp;&nbsp;<?php the_field('menu_6_price'); ?></span>
								<?php endif; ?>
							</div><!-- menu gradient -->
						</div><!-- menu_thumb_wrapper -->
					</div><!-- menu col 3 -->
				</div><!-- menu collage -->
			
			<div id="myscroll">
				<div class='panel-container'>
				
					<div id="sushi"></div>
					<div id="robata"></div>
					<div id="lunch"></div>
					<div id="dinner"></div>
					<div id="featured"></div>
					<div id="cocktails"></div>
				</div><!-- my scroll -->	
				</div><!-- panel container -->
			</div><!-- content wrapper -->
		</div><!-- #container -->


<?php get_footer(); ?>
