<!DOCTYPE html>
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
		         wp_title(''); echo ' | '; }
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
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/lightbox.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/gumby.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>

	<script src="<?php bloginfo('template_directory');?>/js/libs/modernizr-2.6.2.min.js"></script>

</head>

<body <?php body_class(); ?>>

	<!-- <div id="page-wrap"> -->
	<div id="header_wrapper" class="row">
		<div id="header" class="twelve columns">
			<div class="row">
				<div class="five columns push_four">
					<h1><a id="header_logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?> Show | <?php bloginfo('description'); ?></a></h1>
				</div>
				<div class="two columns push_one">
					<h2><a id="header_gcc" href="http://www.guayoyo.ca">Guayoyo Creative Collective</a></h2>
				</div>
			</div>
		</div>
	</div>