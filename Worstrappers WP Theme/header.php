<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Product">
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
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
	<meta name="description" content="Worstrappers is your ultimate source for bad rap. Whether it be rap fail, rap parody, or amateur rappers. We got it all. This is some funny shit." />
	<meta name="keywords" content="Worst rap, bad rap, fail rap, shit rap, rap parody, funny rap, fail videos, funny vidoes, rap, hip hop" />
	<!--<meta name="author" content="humans.txt"> -->

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:app_id" content="624263157629162"/>
	<meta property="fb:page_id" content="577394999007344" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/favicon.png" />
	<meta property="og:description" content="Worstrappers is your ultimate source for bad rap. Whether it be rap fail, rap parody, or amateur rappers. We got it all. This is some funny shit."/>
	<meta property="og:title" content="<?php echo bloginfo('name'); ?>"/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="<?php echo bloginfo('name'); ?>">
	<meta itemprop="description" content="Worstrappers is your ultimate source for bad rap. Whether it be rap fail, rap parody, or amateur rappers. We got it all. This is some funny shit.">
	<meta itemprop="image" content="<?php bloginfo('template_url'); ?>/img/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/gumby.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php
		// CHECK FOR FIREFOX OR SAFARI!!!
		$browser = $_SERVER['HTTP_USER_AGENT'];
		if ( strpos($browser, "Chrome") == true ) {
			// DO NOTHING!
		} else if ( strpos($browser, "Firefox") == true ) {
	?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/firefox.css">
	<?php
		} else if ( strpos($browser, "Safari") == true ) {
	?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/safari.css">
	<?php
		} 
		if ( strpos($browser, "Android") == true ) {
			//$android = true;
	?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/android.css">
	<?php
		}
	?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>

	<div id="header">
		<div class="row">
			<div class="eight columns">
				<h1 id="logo"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2 id="slogan"><?php bloginfo('description'); ?></h2>
			</div>
			<div class="four columns">
                <?php
                	// Check subscription
                    if(isset($_POST["email"]) || isset($_POST["emailtop"])) {
                        $email = $_POST["email"];
                        if (strlen($email <= 0)) { $email = $_POST["emailtop"]; }

                        // Send email
                        if( !mail("i1234567890@hotmail.com", "Worstrappers.com MAILING LIST", $email) || !mail("info@worstrappers.com", "Worstrappers.com MAILING LIST", $email) ) {
                            echo '<p class="subscribe top thankyou">An error acurred. Please try again later.</p>';
                        } else {
                            echo '<p class="subscribe top thankyou">Thank you for subscribing!</p>';
                        }
                    } else { 
                ?>
				<form class="subscribe top" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="field">
						<input id="emailtop" name="emailtop" class="email input" type="email" placeholder="Subscribe">
					</div>
					<div class="pretty medium warning btn">
						<input id="submittop" name="submittop" type="submit" value="SUBMIT">
					</div>
				</form> <!-- subscribe -->
				<?php
					}
				?>
				<section class="row social_media top">
					<div class="three columns facebook"><a href="https://www.facebook.com/pages/Worstrapperscom/577394999007344" target="_blank">Facebook</a></div>
					<div class="three columns twitter"><a href="https://twitter.com/worstrappers" target="_blank">Twitter</a></div>
					<div class="three columns youtube"><a href="https://plus.google.com/u/0/116374385239505814818/posts" target="_blank">Youtube</a></div>
					<div class="three columns instagram"><a href="http://www.worstrappers.com/?feed=rss2" target="_blank">RSS</a></div>
				</section> <!-- social media -->
			</div>
		</div>
	</div>