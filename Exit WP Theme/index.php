<?php get_header(); ?>

	<div id="middle_wrapper" class="row">
		<div id="middle" class="twelve columns">
			<div class="row">
				<div class="three columns">
					<div id="upcoming_shows">
						<h3><a href="http://theexitshow.com/category/show/">NEXT SHOWS</a></h3>
						<div class="show">
							<?php
                                $i = 0;
                                $args = array(
                                    'category' => 6,
                                    'numberposts' => 1,
                                    'orderby' => 'post_date'
                                );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ){
                                	echo '<a class="title" href="'.get_permalink($recent["ID"]).'" target="_blank">'.$recent["post_title"].'</a>';
                                	echo '<ul><li>'.get_post_meta($recent["ID"], "date-time-show01", true).'</li></ul>';
                                	echo '<p>'.get_post_meta($recent["ID"], "venue-name", true).'</p>';
                                	echo '<p>'.get_post_meta($recent["ID"], "address", true).' '.get_post_meta($recent["ID"], "city", true).'</p>';
                                	echo '<a href="'.get_post_meta($recent["ID"], "buy-tickets-url", true).'" target="_blank">Buy Tickets</a>';
                                    $i++;
                                }
                            ?>
							<br/>
							<a href="http://theexitshow.com/category/show/">More Shows >></a>
						</div>
					</div> <!-- upcoming_shows -->
					<div id="reviews">
						<h3><a href="http://theexitshow.com/about/">ABOUT THE SHOW</a></h3>
						<?php
                            $i = 0;
                            $args = array(
                                'category' => 5,
                                'numberposts' => 1,
                                'orderby' => 'post_date'
                            );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                            	echo '<p>'.$recent["post_content"].'</p>';
                                $i++;
                            }
                        ?>
						<p><a href="http://theexitshow.com/about/">Read More >></a></p>
					</div> <!-- reviews -->
				</div> <!-- three columns -->
				<div class="six columns">
					<div id="video_teaser">
						<article class="youtube video">
							<iframe width="460" height="259" src="http://www.youtube.com/embed/9FrlHpJD3e4?rel=0" frameborder="0" showinfo="0" rel="0" controls="0" allowfullscreen></iframe>
						</article>
						<div id="reviews_holder">
							<h3><a href="http://theexitshow.com/reviews/">REVIEWS</a></h3>
							<p class="bold">SOLD OUT at the Toronto Fringe 2013</p>
							<?php
                                $i = 0;
                                $args = array(
                                    'category' => 4,
                                    'numberposts' => 3,
                                    'orderby' => 'post_date'
                                );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ){
                                	echo '<p>'.$recent["post_excerpt"].'</p>';
                                	echo '<p><a href="'.get_post_meta($recent["ID"], "review-url", true).'" target="_blank"><em>'.$recent["post_title"].'</em></a></p>';
                                    $i++;
                                }
                            ?>
                            <br/>
							<a href="http://theexitshow.com/reviews/">More Reviews >></a>
						</div>
					</div> <!-- video_teaser -->
					<div id="gallery">
						<h3>GALLERY</h3>
						<div class="row">
							<div class="twelve columns">
								<!-- class="no-left" -->
								<a class="no-left" href="<?php bloginfo('template_directory');?>/images/gallery/img11.png" data-lightbox="gallery-set" title="Festival of Images and Words">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb11.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img14.png" data-lightbox="gallery-set" title="Festival of Images and Words">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb14.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img13.png" data-lightbox="gallery-set" title="Festival of Images and Words">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb13.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img01.png" data-lightbox="gallery-set" title="Vancouver Fringe">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb01.png" width="100" height="100"/>
								</a>
								<a class="no-left" href="<?php bloginfo('template_directory');?>/images/gallery/img02.png" data-lightbox="gallery-set" title="Vancouver Fringe">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb02.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img03.png" data-lightbox="gallery-set" title="Vancouver Fringe">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb03.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img04.png" data-lightbox="gallery-set" title="Vancouver Fringe">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb04.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img05.png" data-lightbox="gallery-set" title="Montreal Fringe">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb05.png" width="100" height="100"/>
								</a>
								<a class="no-left" href="<?php bloginfo('template_directory');?>/images/gallery/img06.png" data-lightbox="gallery-set" title="Montreal Fringe">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb06.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img07.png" data-lightbox="gallery-set" title="First Photos">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb07.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img08.png" data-lightbox="gallery-set" title="First Photos">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb08.png" width="100" height="100"/>
								</a>
								<a href="<?php bloginfo('template_directory');?>/images/gallery/img09.png" data-lightbox="gallery-set" title="Exit Logo">
									<img class="example-image" src="<?php bloginfo('template_directory');?>/images/gallery/thumb09.png" width="100" height="100"/>
								</a>
							</div>	
						</div>
					</div> <!-- gallery -->
				</div> <!-- six columns -->
				<div class="three columns">
					<div id="latest_news">
						<h3><a href="http://www.twitter.com/theexitshow" target="_blank">LATEST NEWS</a></h3>
						<a class="twitter-timeline" href="https://twitter.com/theexitshow" data-widget-id="392052451781525505">Tweets by @theexitshow</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					</div> <!-- latest_news -->
					<div id="social_media">
						<a id="twitter" href="http://www.twitter.com/theexitshow" target="_blank">Exit on Twitter</a>
						<a id="facebook" href="http://www.facebook.com/theexitshow" target="_blank">Exit on Facebook</a>
					</div> <!-- social_media -->
					<div id="newsletter">
						<!-- <h3>NEWSLETTER</h3> -->
						<!-- <p>Subscribe:</p> -->
						<!-- <form action="index.html" method="post">
							<ul>
								<li class="field">
									<input class="email input" type="email" placeholder="Input your email"/>
								</li>
								<li class="pretty medium danger btn">
									<input id="subscribe" type="submit" value="Subscribe"/>
								</li>
							</ul>
						</form> -->
						<h3>CONTACT US</h3>
						<a href="mailto:hello@guayoyo.ca">hello@guayoyo.ca</a>
					</div> <!-- newsletter -->
				</div>
			</div>
		</div> <!-- middle -->
<?php //get_sidebar(); ?>

<?php get_footer(); ?>