<?php
/**
 * Template Name: About
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
			<h1 class="inner_page"><?php the_title(); ?> <span class="dash">|</span> <span class="inner_page_sub"><?php the_field('sub_header'); ?></span></h1>
			<div class="about_collage">
				<div class="icons_inner"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon_img.png"/></div>
				<div id="col1">
					<?php $aboutone = wp_get_attachment_image_src(get_field('about_image_1'), 'about-img-1'); ?>
					<img id="about_1" class="about_thumbs" src="<?php echo $aboutone[0]; ?>"/>
				</div><!-- col1 -->
				<div id="col2" style="width: 338px;">
					<?php $abouttwo = wp_get_attachment_image_src(get_field('about_image_2'), 'about-img-2'); ?>
					<img id="about_2" class="about_thumbs" src="<?php echo $abouttwo[0]; ?>"/>
					<?php $aboutthree = wp_get_attachment_image_src(get_field('about_image_3'), 'about-img-3'); ?>
					<img id="about_3" class="about_thumbs" src="<?php echo $aboutthree[0]; ?>"/>
				</div><!-- col2 -->
				<div id="col3">
					<?php $aboutfour = wp_get_attachment_image_src(get_field('about_image_4'), 'about-img-4'); ?>
					<img id="about_4" class="about_thumbs" src="<?php echo $aboutfour[0]; ?>"/>
					<?php $aboutfive = wp_get_attachment_image_src(get_field('about_image_5'), 'about-img-5'); ?>
					<img id="about_5" class="about_thumbs" src="<?php echo $aboutfive[0]; ?>"/>
				</div><!-- col3 -->
			</div><!-- about collage -->
			<!--
			<div id="mysidebar">
				<?php $sidebarimg = wp_get_attachment_image_src(get_field('sidebar_image'), 'sidebar-img'); ?>
				<img src="<?php echo $sidebarimg[0]; ?>"/>
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/trim.png"/>
			</div>
-->
			<div id="content_wrapper" style="width: 91%;border-left:none">
				<div id="content" role="main">
			
					<?php
						/* Run the loop to output the page.
							* If you want to overload this in a child theme then include a file
							* called loop-page.php and that will be used instead.
							*/
							get_template_part( 'loop', 'page' );
							?>

					</div><!-- #content -->
			</div><!-- content wrapper -->
		</div><!-- #container -->


<?php get_footer(); ?>
