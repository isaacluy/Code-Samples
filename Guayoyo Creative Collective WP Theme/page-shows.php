<?php

	/*
		Template Name: Shows Page
	*/

?>

<?php get_header(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<!-- <div class="row"> -->
					<div id="calendar" class="three columns">
						<h2 id="calendar_title">Calendar</h2>
						<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=330&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=nrrbn2og553g0ro2qan6n2eej8%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FToronto" style=" border-width:0 " width="220" height="330" frameborder="0" scrolling="no"></iframe>
					</div> <!-- calendar -->
				<!-- </div> -->
				<div class="row">
					<div id="shows_title" class="eight columns push_one">
						<h2 class="shows_sprite">Shows</h2>
					</div> <!-- shows_title -->
				</div>
				<?php
                    $i = 1;
                    $args = array(
                        'category' => 4,
                        // 'numberposts' => 1,
                        'orderby' => 'post_date'
                    );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                    	if (count($recent_posts) == 1) {
                    	echo '<div class="row show one">';
                    	} else if ($i < count($recent_posts)) {
                    	echo '<div class="row show">';
                    	} else {
                    	echo '<div class="row show last">';
                    	}
                    	echo    '<a id="'.get_post_meta($recent["ID"], "show-id", true).'_photo" class="three columns push_one shows_sprite show_photo" href="'.get_permalink($recent["ID"]).'"></a>
                    			<div id="'.get_post_meta($recent["ID"], "show-id", true).'_content" class="three columns show_content">
                    				<div class="row">
                    					<p class="eight columns"><a href="'.get_permalink($recent["ID"]).'">'.$recent["post_title"].'</a></p>
                    					<p class="four columns shows_sprite date">'.get_post_meta($recent["ID"], "day", true).'<span>'.get_post_meta($recent["ID"], "month", true).'</span></p>
                    				</div>
                    				<div class="row">
                    					<p class="twelve columns shows_sprite blurb">'.$recent["post_excerpt"].'</p>
                    				</div>
                    			</div> <!-- content -->
                    			<div id="'.get_post_meta($recent["ID"], "show-id", true).'_buttons" class="two columns buttons">
                    				<div class="row">
                    					<div class="twelve columns pretty medium info btn">';
                    	$tix = get_post_meta($recent["ID"], "buy-tickets-url", true);
                    	if(strlen($tix) > 0) {
                    	echo					'<a href="'.$tix.'" style="padding:0px;"><button>Buy Tickets</button></a>';
                    	} else {
                    	echo					'<a href="'.get_permalink($recent["ID"]).'" style="padding:0px;"><button>Free Show</button></a>';	
                    	} 
						echo			'</div>
									</div>
									<div class="row">
										<div class="twelve columns pretty medium info btn">';
						$trailer = get_post_meta($recent["ID"], "trailer-url", true);
						if(strlen($trailer) > 0) {
						echo				'<a href="'.$trailer.'" style="padding:0px;"><button>Trailer</button></a>';
						} else {
						echo				'<a href="https://twitter.com/home?status='.get_permalink($recent["ID"]).'" style="padding:0px;"><button>Tweet</button></a>';
						}
						echo			'</div>
									</div>
									<div class="row">
										<div class="twelve columns pretty medium info btn">
											<a href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink($recent["ID"]).'" style="padding:0px;"><button>Share</button></a>
										</div>
									</div>
								</div> <!-- buttons -->
							</div>';
                        $i++;
                    }
                ?>
			</div>
		</div> <!-- middle_wrapper -->

	</div>			

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
