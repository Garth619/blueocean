<?php
/**
 * Template Name: Press 
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
			<h1  class="inner_page">Press</h1>
			<?php if(get_field('press')): ?>
				<?php while(has_sub_field('press')): ?>
					<?php if(get_sub_field('link')) : ?>
        <div class="press">
         <a href="<?php the_sub_field('link'); ?>" target="_blank">
         <?php $press = wp_get_attachment_image_src(get_sub_field('press_image'), 'press-img'); ?>
         <img src="<?php echo $press[0]; ?>"/></a>
				 <a class="press_title" href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('title'); ?></a>
				 </div>
        <?php endif; ?>
        <?php if(get_sub_field('pdf')) : ?>
        <div class="press">
        	<a href="<?php the_sub_field('pdf'); ?>" target="_blank">
					<?php $press = wp_get_attachment_image_src(get_sub_field('press_image'), 'press-img'); ?>
					<img src="<?php echo $press[0]; ?>"/></a>
					<a class="press_title" href="<?php the_sub_field('pdf'); ?>" target="_blank"><?php the_sub_field('title'); ?></a>
					</div>
					<?php endif; ?>
				
				<?php endwhile; ?>
			<?php endif; ?>

					
					</div><!-- #container -->


<?php get_footer(); ?>
