<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="footer_inner">
			<div id="footer_left">
				<div itemscope itemtype="http://schema.org/LocalBusiness">
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span itemprop="name"><?php the_field('name','option'); ?></span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span itemprop="streetAddress"><?php the_field('street_address','option'); ?></span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline" itemprop="addressLocality"><?php the_field('city','option'); ?></span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline;color:#fff">,</span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline" itemprop="addressRegion"><?php the_field('state','option'); ?></span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline" itemprop="postalCode"><?php the_field('zip_code','option'); ?></span></a>
					<!-- <span style="margin-top:8px;">Call for a reservation</span> -->
					<span style="margin-top:8px;" itemprop="telephone"><?php the_field('phone','option'); ?></span>
					<span id="copy">Copyright <?php echo date("Y"); ?> Blue Ocean</span>
				</div><!-- schema -->
			</div><!-- footer left -->
			<div id="footer_center">
				<?php if( get_field('hours','option') ): ?>
					<?php while(has_sub_field('hours','option') ): ?>
					<span class="align_left"><?php the_sub_field('title','option'); ?></span> <span class="align_right"><?php the_sub_field('time','option'); ?></span><br/>
					<?php endwhile; ?>
			<?php endif; ?>
			</div><!-- footer center -->
			<div id="footer_right">
				<span><a class="fancybox" href="#eclub_form">Join Our E-Club<img class="arrow" src="<?php bloginfo( 'template_directory' ); ?>/images/arrow.png"/></a></span>
				<div id="footer_media">
					<a target="_blank" href="<?php the_field('facebook','option'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_facebook.png"/></a>
<!-- 					<a target="_blank" href="<?php the_field('google_plus','option'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_googleplus.png"/></a> -->
<!-- 					<a target="_blank" href="<?php the_field('twitter','option'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_twitter.png"/></a> -->
<!-- 					<a target="_blank" href="<?php the_field('four_square','option'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_foursquare.png"/></a> -->
					<a target="_blank" href="<?php the_field('yelp','option'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_yelp.png"/></a>
					<a target="_blank" href="<?php the_field('instagram','option'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_instagram.png"/></a>
				</div>
				<span style="margin-top: 10px;"><a href="tel:760.434.4959">Call For a Reservation<br/>760.434.4959</a></span>
			</div><!-- footer right -->
		</div><!-- footer inner -->
	</div><!-- #footer -->
<div id="gift_form">
			 <?php echo do_shortcode('[gravityform id="1" name="Blue Ocean Gift Card Request" title="false" description="true" ajax="true"]') ?> 
		</div>
		<div id="eclub_form">
			<?php echo do_shortcode('[gravityform id="2" name="Blue Ocean E-Club Request" title="false" description="true" ajax="true"]') ?> 
		</div>
		
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52249151-1', 'blueoceanrobatasushi.com');
  ga('send', 'pageview');

</script>

</body>
</html>
