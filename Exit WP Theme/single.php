<?php get_header(); ?>
<?php the_post(); ?>

	<div id="middle_wrapper" class="row">
		<div id="middle" class="twelve columns">
			<div class="row">
				<div class="ten columns centered">
					<div id="template_main" class="row">
						<div class="six columns">
							<h4><?php the_title(); ?></h4>
							<?php
								// Get CONTENT if the EXCERPT is empty
								$c = get_the_excerpt();
								if (strlen($c) <= 0) {
									$c = get_the_content();
								} 
							?>
							<p><?php echo $c; ?></p>
							<p><a href="<?php echo get_post_meta($post->ID, 'website', true ); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'website', true ); ?></a></p>
							<ul>
								<li>
									<h5>WHEN:</h5>
									<ul>
										<?php 
											$numOfShows = (int) get_post_meta($post->ID, 'number-of-shows', true );
											for($i = 1; $i <= $numOfShows; $i++) {
												if($i < 10) {
													$dt = get_post_meta($post->ID, 'date-time-show0'.$i, true );	
												} else {
													$dt = get_post_meta($post->ID, 'date-time-show'.$i, true );
												}
												echo
												"<li>
													<p>".$dt."</p>
												</li>";
											}
										?>
									</ul>
								</li>
								<li>
									<h5>HOW MUCH:</h5>
									<ul>
										<li>
											<p><?php echo get_post_meta($post->ID, 'ticket-price', true ); ?></p>
										</li>
										<li class="pretty medium danger btn">
											<a href="<?php echo get_post_meta($post->ID, 'buy-tickets-url', true ); ?>" target="_blank">Buy Tickets</a>
										</li>
										<li class="pretty medium secondary btn">
											<a href="http://theexitshow.com/category/show/">More Shows</a>
										</li>
										<!-- <li>
											<br/><a href="">Other Shows</a>
										</li> -->
									</ul>
								</li>
							</ul>
						</div>
						<div class="six columns">
							<a href="http://www.theexitshow.com" style="float:right;margin-bottom:10px;">Back home</a>
							<div style="min-height:90px;padding:0px;">
							<img src="<?php bloginfo('template_directory');?>/images/shows/<?php echo get_post_meta($post->ID, 'picture', true ); ?>" width="357" />
							</div>
							<ul>
								<li>
									<h5>WHERE:</h5>
									<ul>
										<li>
											<p><?php echo get_post_meta($post->ID, 'venue-name', true ); ?></p>
										</li>
										<li>
											<p><?php echo get_post_meta($post->ID, 'address', true ); ?></p>
										</li>
										<li>
											<p><?php echo get_post_meta($post->ID, 'city', true ); ?></p>
										</li>
										<li>
											<a href="<?php echo get_post_meta($post->ID, 'google-map', true ); ?>" target="_blank">Google Maps</a>
										</li>
									</ul>
								</li>
								<li>
									<h5>SOCIAL MEDIA:</h5>
									<div class="fb-like" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
								</li>
								<li>
									<a href="https://twitter.com/share" class="twitter-share-button" data-via="theexitshow" data-size="large" data-count="none">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- middle -->
	
<?php //get_sidebar(); ?>

<?php get_footer(); ?>