<?php
/**
 * Template Name: Gift Cards
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
			<h1 class="inner_page"><?php the_title(); ?><?php the_field('sub_header'); ?></h1>

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
