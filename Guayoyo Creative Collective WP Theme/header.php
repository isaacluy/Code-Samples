<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive | '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		      	 if(get_the_ID() == 4) {
		      	 	echo 'Home | ';
		      	 } else {
		         	wp_title(''); echo ' | '; 
		     	 }
		        }
		      elseif (is_404()) {
		         echo 'Not Found | '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' | page '. $paged; }
		   ?>
	</title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="Theatre, Performing, Acting, Toronto, Montreal, Canada, Guayoyo, Creative, Collective, EXIT, Show, Clown" />
	<meta name="author" content="humans.txt">

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/favicon.png" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="284572661708856" />
	<meta property="og:image" content="<?php bloginfo('template_directory');?>/favicon.png" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
	<meta property="og:title" content="<?php wp_title(''); echo ' | ';bloginfo('name'); ?>"/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="<?php wp_title(''); echo ' | ';bloginfo('name'); ?>">
	<meta itemprop="description" content="<?php bloginfo('description'); ?>">
	<meta itemprop="image" content="<?php bloginfo('template_directory');?>/favicon.png">
	<meta name="google-site-verification" content="j1TtZxF67TnxoJTkC9egYFF2aS7_rbWYT4itGOdBcTY" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/gumby.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>

	<script src="<?php bloginfo('template_directory');?>/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<?php
	$pID = get_the_ID();
	$titleClass = get_the_title($pID);
	$titleClass = strtolower($titleClass); 
?>
<body <?php body_class($titleClass); ?>>
	<div id="wrapper" class="row">
		<div id="header_wrapper" class="row">
			<div id="header" class="twelve columns">
				<div class="row">
					<div id="header_lang" class="one columns push_eleven">
						<!-- <a href="es/">Español</a> -->
					</div>
				</div>
				<div class="row">
					<div class="two columns centered">
						<h1><a id="header_logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
						<!-- <div class="description"><?php bloginfo('description'); ?></div> -->
					</div>
				</div>
				<div class="row">
					<div id="header_menu" class="twelve columns">
						<div class="row">
							<?php 
								if($pID != 12) { // UNDER CONSTRUCTION PAGE
							?>
							<div id="header_menu_home" class="one columns push_two">
								<a href="<?php echo get_option('home'); ?>/"<?php if($pID == "4"){echo ' class="current"';}?>>HOME<span>Welcome!</span></a>
							</div>
							<div id="header_menu_about" class="one columns push_one">
								<a href="<?php echo get_permalink(6); ?>"<?php if($pID == "6"){echo ' class="current"';}?>>ABOUT<span>GCC</span></a>
							</div>
							<div id="header_menu_shows" class="one columns push_two">
								<a href="<?php echo get_permalink(8); ?>"<?php if($pID == "8"){echo ' class="current"';}?>>SHOWS<span>&amp; Projects</span></a>
							</div>
							<div id="header_menu_contact" class="one columns push_one">
								<a href="<?php echo get_permalink(10); ?>"<?php if($pID == "10"){echo ' class="current"';}?>>CONTACT<span>Say Hi!</span></a>
							</div>
							<?php
								}
							?>
						</div>
					</div> <!-- header_menu -->
					<div id="header_menu2">
						<?php 
							if($pID != 12) { // UNDER CONSTRUCTION PAGE
						?>
						<ul>
							<li>
								<a href="<?php echo get_option('home'); ?>/"<?php if($pID == "4"){echo ' class="current"';}?>>HOME</a>
							</li>
							<li>
								<a href="<?php echo get_permalink(6); ?>"<?php if($pID == "6"){echo ' class="current"';}?>>ABOUT</a>
							</li>
							<li>
								<a href="<?php echo get_permalink(8); ?>"<?php if($pID == "8"){echo ' class="current"';}?>>SHOWS</a>
							</li>
							<li>
								<a href="<?php echo get_permalink(10); ?>"<?php if($pID == "10"){echo ' class="current"';}?>>CONTACT</a>
							</li>
						</ul>
						<?php
							}
						?>
					</div> <!-- header_menu2 -->

				</div>
			</div> <!-- header -->
		</div> <!-- header_wrapper -->