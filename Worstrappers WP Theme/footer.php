	<?php //include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	<div id="footer">
		<p id="copy">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
		<p>Design: <a href="https://www.facebook.com/bettina.ascaniorivas" target="_blank">Bettina Ascanio</a>. Code:<a href="http://www.isaacluy.com/portfolio.php" target="_blank">Isaac Luy</a></p>
	</div> <!-- footer -->

	<?php wp_footer(); ?>

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
		var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
		if(oldieCheck) {
			document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
		}
	</script>
	<script>
	if(!window.jQuery) {
		if(!oldieCheck) {
		  document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-2.0.2.min.js"><\/script>');
		} else {
		  document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.10.1.min.js"><\/script>');
		}
	}
	</script>


	<script src="<?php bloginfo('template_url'); ?>/js/libs/gumby.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

  </body>
</html>
