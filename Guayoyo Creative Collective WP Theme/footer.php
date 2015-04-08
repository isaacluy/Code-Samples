	<div id="footer_dot" class="row"></div>
	<div id="footer_wrapper" class="row">
		<div id="footer" class="twelve columns">
			<div class="row">
				<div id="footer_find_us" class="seven columns">
					<p class="red">FIND US</p>
					<p id="footer_title_gm">Google Maps</p>
				</div>
				<div id="footer_social_media" class="three columns push_two">
					<ul>
						<li id="footer_fb"><a href="http://www.facebook.com/guayoyo.ca">facebook</a></li>
						<li id="footer_tw"><a href="http://www.twitter.com/guayoyo_ca">twitter</a></li>
						<li id="footer_yt"><a href="https://www.youtube.com/watch?v=9FrlHpJD3e4">youtube</a></li>
						<li id="footer_ins"><a href="http://www.instagram.com/guayoyo_ca">instagram</a></li>
					</ul>
				</div> <!-- footer_social_media -->
			</div>
			<div class="row">
				<div id="footer_map" class="three columns">
					<a href="https://www.google.ca/maps?q=2418+Nichols+Dr,+Oakville,+ON,+Canada&t=m&hnear=2418+Nichols+Dr,+Oakville,+Ontario+L6H+7A4&z=10" target="_blank">
						<img src="<?php bloginfo('template_directory');?>/images/footer_map.png"/>
					</a>
				</div> <!-- footer_map -->
				<div id="footer_info" class="four columns">
					<p class="bigger">Our Info</p>
					<p>Address: <a href="https://www.google.ca/maps?q=2418+Nichols+Dr,+Oakville,+ON,+Canada&t=m&hnear=2418+Nichols+Dr,+Oakville,+Ontario+L6H+7A4&z=10" target="_blank">2418 Nichols Drive, Oakville, ON</a></p>
					<p>Email: <a href="mailto:hello@guayoyo.ca">hello@guayoyo.ca</a></p>
					<p>Skype: <a href="skype:isaacluy">Isaac Luy</a></p>
					<!-- <p>Phone: <span class="red"></span></p> -->
				</div> <!-- footer_info -->
				<div id="newsletter" class="three columns push_two">
					<p>Subscribe to our newsletter</p>
					<?php
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); }
					?>
				</div>
			</div>
		</div> <!-- footer -->
	</div> <!-- footer_wrapper -->

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="<?php bloginfo("template_directory");?>/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="<?php bloginfo("template_directory");?>/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	<?php if(get_the_ID() == 4) { ?>
	<script src="<?php bloginfo('template_directory');?>/js/libs/jquery.slides.min.js"></script>
	<?php } ?>
	
	<script src="<?php bloginfo('template_directory');?>/js/core.js"></script>


	<?php wp_footer(); ?>

  </body>
</html>
