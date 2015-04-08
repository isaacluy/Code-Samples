<?php get_header(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<div class="row">
					<div class="ten columns centered">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

								<?php
								$category = get_the_category();
								$postID = get_the_id();
								if($category[0]->cat_name == "Show") {
								?>
								<h2><a href="<?php echo get_post_meta($postID, 'show-webiste', true); ?>" target="_blank"><?php the_title(); ?></a></h2>
								<?php
								echo '
								<div class="row">
									<div id="details" class="six columns">
										<p>'.get_post_meta($postID, 'day', true).' '.get_post_meta($postID, 'month', true).' '.get_post_meta($postID, 'year', true);
								$aux = get_post_meta($postID, 'day2', true);
								if(strlen($aux) > 0){
								echo
										' - '.get_post_meta($postID, 'day2', true).' '.get_post_meta($postID, 'month2', true).' '.get_post_meta($postID, 'year2', true);
								}
								echo
										'</p>';
								echo
										'<p>'.get_post_meta($postID, 'address', true).'</p>';
								$w = get_post_meta($postID, 'show-webiste', true);
								if(strlen($w) > 0) {
								echo	'<p id="show_links"><i class="icon-globe"></i><a href="'.$w.'" target="_blank">Show\'s Website</a>';
								}
								$w = get_post_meta($postID, 'show-fb-page', true);
								if(strlen($w) > 0) {
								echo ' <i class="icon-facebook"></i><a href="'.$w.'" target="_blank">Show\'s Facebook Page</a></p>';
								}
								$tix = get_post_meta($postID, 'buy-tickets-url', true);
								if(strlen($tix) > 0) {
								echo	'<div class="pretty medium info btn">
                    						<a href="'.$tix.'" target="_blank"><button>Buy Tickets</button></a>
										</div>';
								} else {
								echo	'<div class="pretty medium success btn">
                    						<a target="_blank"><button>Free Show</button></a>
										</div>';
								}
								echo	'<div class="pretty medium info btn">
                    						<a href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'" target="_blank"><button>Share</button></a>
										</div>
										<div id="tweet" class="pretty medium info btn">
                    						<a href="https://twitter.com/home?status='.get_permalink().'" target="_blank"><button>Tweet</button></a>
										</div>
									</div>';
								$aux = get_post_meta($postID, 'trailer-embed', true);
								if(strpos($aux, "youtube")){
								echo 
									'<div id="trailer" class="six columns">
										<article class="youtube video">
											<iframe width="560" height="315" src="'.get_post_meta($postID, 'trailer-embed', true).'" frameborder="0" allowfullscreen></iframe>
										</article>
									</div>';
								} else if(strlen($aux) > 0){
								echo 
									'<div id="photo" class="six columns">
										<img src="'.get_post_meta($postID, 'trailer-embed', true).'" alt="Show Photo" height="315" width="560"/>
									</div>';
								}
								echo
								'</div>';
								
								} else if ($category[0]->cat_name == "People") {
								?>
								<h2><a href="<?php echo get_post_meta($postID, 'website', true); ?>" target="_blank"><?php the_title(); ?></a></h2>
								<?php
									echo '
								<h3 id="position">'.get_post_meta($postID, 'position', true).'</h3>
								<div class="row">
									<div class="four columns image photo">
										<img src="'.get_bloginfo('template_directory').'/images/'.get_post_meta($postID, 'photo', true).'"/>
									</div>
									<div class="eight columns">
										<ul>
											<li>
												<p>Hometown: '.get_post_meta($postID, 'hometown', true).'</p>
											</li>
											<li>
												<p>Current Location: '.get_post_meta($postID, 'current-location', true).'</p>
											</li>
											<li>
												<p>Profession: '.get_post_meta($postID, 'profession', true).'</p>
											</li>
											<li>
												<p>Lastest Production: '.get_post_meta($postID, 'latest-production', true).'</p>
											</li>
											<li>
												<p>'.get_post_meta($postID, 'latest-production', true).' Credits: '.get_post_meta($postID, 'latest-credits', true).'</p>
											</li>
											<li>
												<p id="people_links"><i class="icon-facebook"></i><a href="'.get_post_meta($postID, 'facebook', true).'" target="_blank">Facebook</a> <i class="icon-twitter"></i><a href="'.get_post_meta($postID, 'twitter', true).'" target="_blank">Twitter</a> <i class="icon-linkedin"></i><a href="'.get_post_meta($postID, 'linkedin', true).'" target="_blank">LinkedIn</a></p>
											</li>
										</ul>			
									</div>
								</div>';
								} else {
								?>
								<h2><?php the_title(); ?></h2>
								<?php	
								}
								?>
								<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
								<div class="entry">
									<?php the_content(); ?>
					
									<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
									
									<?php //the_tags( 'Tags: ', ', ', ''); ?>
					
								</div>
								
								<?php edit_post_link('Edit this entry','','.'); ?>
								
							</div>
					
						<?php //comments_template(); ?>
					
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div> <!-- middle_wrapper -->

	</div>

	
<?php //get_sidebar(); ?>

<?php get_footer(); ?>