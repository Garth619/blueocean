<?php
/*
    Template Name: Main
*/


?> 
<!DOCTYPE html>
<html>
<head>
<meta property="fb:app_id" content="<?php $appid = get_post_meta($post->ID, 'appid', TRUE); ?><?php if($appid) { ?><?php echo $appid; ?><?php } ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php wp_title(''); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=3" />
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<style type="text/css">
/*
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
    background: transparent;
    border: 0;
    margin: 0;
    padding: 0;
    vertical-align: baseline;
}
body {
    line-height: 1; overflow:hidden;background: url("") no-repeat;font-family: verdana,sans-serif;
}
body.logged-in {overflow: auto;}
*/

</style>

<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox();
	});
</script>
</head>
<body id="<?php echo $page ?>" <?php body_class(); ?>>

<div id="wrapper">
	<div id="header">
		<div id="inner_header">
		<img alt="Blue Ocean Robata & Sushi Bar - Carlsbad, California" id="logo" src="<?php bloginfo( 'template_directory' ); ?>/images/blue_ocean_robata_sushi_carlsbad.png"/>
			<!-- <a href="#gift_form" class="gift_card fancybox">Buy a Gift Card<img class="arrow" src="<?php bloginfo( 'template_directory' ); ?>/images/arrow.png"/></a> -->
			</div><!-- inner_header -->
	</div><!--- header -->
	<div style="clear:both"></div>
	<div id="main_mobile">
		<div itemscope itemtype="http://schema.org/LocalBusiness">
					<!-- <img id="sushi" src="<?php bloginfo( 'template_directory' ); ?>/images/sushi.png"/> -->
					<div style="clear:both;"></div>
					<div id="reservation">
						<a style="display: none;" class="call" target="_blank" href="https://www.seatme.yelp.com/restaurants/dd947e39-b41b-49f9-95b7-e3ccb6e57365"><span>Make a reservation</span><img id="mobile_arrow" src="<?php bloginfo( 'template_directory' ); ?>/images/arrow.png"/>
						</a>
					</div><!-- reservation -->
					<div id="rest_info">
					<div itemscope itemtype="http://schema.org/LocalBusiness">
					<div id="mobile_address">
					<a style="display:block;font-weight:700" href="tel:<?php the_field('phone','option'); ?>">Call For A Reservation: <br/><span style="border-radius:5px;margin-top:15px;color:#186E89;background:#fff;padding:10px 15px;display: inline-block" itemprop="telephone"><?php the_field('phone','option'); ?></span></a><br/>
						<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span itemprop="name"><?php the_field('name','option'); ?></span></a><br/>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span itemprop="streetAddress"><?php the_field('street_address','option'); ?></span></a><br/>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline" itemprop="addressLocality"><?php the_field('city','option'); ?></span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline;color:#fff">,</span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline" itemprop="addressRegion"><?php the_field('state','option'); ?></span></a>
					<a href="<?php the_field('link_to_google_maps','option'); ?>" target="_blank"><span style="display:inline" itemprop="postalCode"><?php the_field('zip_code','option'); ?></span></a><br/>
					</div>
					<div id="mobile_icons" style="padding:4px 0 20px 0;">
						<a href="https://www.facebook.com/BlueOceanSD" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_facebook.png"/></a>
<!-- 						<a href="https://plus.google.com/+BlueOceanRobataSushiBarCarlsbad/posts" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_googleplus.png"/></a> -->
<!-- 						<a href="https://twitter.com/blueoceanrobata" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_twitter.png"/></a> -->
<!-- 						<a href="https://foursquare.com/v/blue-ocean/52c0c05711d2945c21e5e5bc" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_foursquare.png"/></a> -->
						<a href="http://www.yelp.com/biz/blue-ocean-robata-and-sushi-bar-carlsbad-2" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_yelp.png"/></a>
						<a href="http://instagram.com/blueoceanrobatasushi#" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer_instagram.png"/></a>
					</div>
					<hr/>
					
					<?php if( get_field('hours','option') ): ?>
						<?php while(has_sub_field('hours','option') ): ?>
							<span><?php the_sub_field('title','option'); ?></span><br/>
							<span><?php the_sub_field('time','option'); ?></span><br/><br/>
							<?php endwhile; ?>
					<?php endif; ?>
					
				
				
				</div><!-- schema -->
				<hr/>
				<a href="#eform_club2" class="fancybox" style="font-weight:700">Join Our E-Club</a><br/><br/>
				<a href="<?php the_field('mobile_gift_card_link');?>" style="font-weight:700">Purchase a Gift Card</a>			
				</div><!-- rest info -->
				<div id="mobile_menu_wrapper">
<div class="mymenu_thumb">
<div class="overlay">
<a href="<?php bloginfo('url'); ?>/menu/sushi/">
<span>Sushi</span>
</a>
</div>
<img src="http://blueoceanrobatasushi.com/wp-content/uploads/2014/05/Rainbow290-490x398.jpg">
</div>					
<div class="mymenu_thumb">
<div class="overlay">
<a href="<?php the_field('mobile_lunch_pdf'); ?>"><span><?php the_field('menu_1_title'); ?></span></a>
</div><!-- overlay -->
<?php $menu_one = wp_get_attachment_image_src(get_field('menu_thumb_1'), 'mobile-menu'); ?>
            <img src="<?php echo $menu_one[0]; ?>"/>

</div><!-- mymenu thumb -->
<div class="mymenu_thumb">
<div class="overlay">
<a href="<?php the_field('mobile_dinner_pdf'); ?>"><span><?php the_field('menu_2_title'); ?></span></a>
</div><!-- overlay -->
<?php $menu_two = wp_get_attachment_image_src(get_field('menu_thumb_2'), 'mobile-menu'); ?>
          <img src="<?php echo $menu_two[0]; ?>"/>
</div>
<div class="mymenu_thumb">
<div class="overlay">
<a href="<?php the_field('mobile_robata_pdf'); ?>"><span><?php the_field('menu_3_title'); ?></span></a>
</div><!-- overlay -->
<?php $menu_three = wp_get_attachment_image_src(get_field('menu_thumb_3'), 'mobile-menu'); ?>
           <img src="<?php echo $menu_three[0]; ?>"/>
</div>
<div class="mymenu_thumb">
<div class="overlay">
<a href="<?php the_field('mobile_cocktails_pdf'); ?>"><span><?php the_field('menu_4_title'); ?></span></a>
</div><!-- overlay -->
            <?php $menu_four = wp_get_attachment_image_src(get_field('menu_thumb_4'), 'mobile-menu'); ?>
           <img src="<?php echo $menu_four[0]; ?>"/>
</div>
					
				</div><!-- mobile menu wrap -->
				<!-- <?php echo do_shortcode('[show_theme_switch_link]'); ?> -->
	</div><!-- main mobile -->
<div id="gift_form2" style="display:none;">
			 <?php echo do_shortcode('[gravityform id="1" name="Blue Ocean Gift Card Request" title="false" description="true" ajax="true"]') ?> 
		</div>
		<div id="eform_club2" style="display:none;">
			<?php echo do_shortcode('[gravityform id="2" name="Blue Ocean E-Club Request" title="false" description="true" ajax="true"]') ?> 
		</div>       
</div><!-- #wrapper -->
<!--
<div class="my_footer">
	<a href="http://www.loveboatsushi.com/" target="_blank"><span class="footer_title">LOVE BOAT</span><br/>OCEANSIDE & SAN MARCOS</a>
	<a href="http://bluesmokesushi.com" target="_blank"><span class="footer_title">Blue Smoke</span><br/>Fashion Valley</a>
	<a href="https://www.facebook.com/BigBangSushi" target="_blank"><span class="footer_title">Big Bang</span><br/>Rancho Bernardo</a>
</div>
--><!-- my footer -->
<!--
<a href="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/lunch.jpg"/></a>
					<a href="<?php bloginfo( 'template_directory' ); ?>/pdfs/dinnerwebpdf(1).pdf" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/dinner.jpg"/></a>
					<a href="<?php bloginfo( 'template_directory' ); ?>/pdfs/robatawebpdf.pdf" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/robata.jpg"/></a>
					<a href="<?php bloginfo( 'template_directory' ); ?>/pdfs/cocktailwebpdf.pdf" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/cocktails.jpg"/></a>
-->

<?php wp_footer(); ?>
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
