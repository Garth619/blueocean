<?php
/**
 * Template Name: Open Table
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

		<div id="container" style="min-height:390px;">
			<div id="content" role="main">
			<h1 class="inner_page" style="font-size:18px;"><?php the_title(); ?></h1>
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			
			

			</div><!-- #content -->
			

		</div><!-- #container -->
 
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
