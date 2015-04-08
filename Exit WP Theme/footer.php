		<div id="oac" class="row">
			<div class="six columns centered">
				<h4>SPECIAL THANKS TO THE</h4>
				<a href="http://www.arts.on.ca/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/OAC_white.png"/></a>
			</div>
		</div>
		<div id="footer" class="row">
			<div class="four columns centered">
				<p>&copy;<?php echo date("Y"); /*echo " "; bloginfo('name');*/ ?> <a href="http://www.guayoyo.ca">Guayoyo Creative Collective</a></p>
			</div>
		</div>

	</div> <!-- middle_wrapper -->

	<?php wp_footer(); ?>
	
	
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
	  document.write('<script src="wp-content/themes/Exit Theme/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="wp-content/themes/Exit Theme/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	<script src="<?php bloginfo('template_directory');?>/js/libs/lightbox-2.6.min.js"></script>

  </body>
</html>