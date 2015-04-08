<?php get_header(); ?>

	<!-- index.php -->
	<div id="main">
		<div class="row">
			<div id="videos_container" class="eight columns">
				<?php $i=0; if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- video -->
					<div <?php ($i==0)?post_class('video_title first'):post_class('video_title');$i++; ?>>
						<span></span>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php 
						if (!get_the_excerpt()) {
							//DON'T SHOW EXCERPT	
						} else { ?>
						<p>- <?php the_excerpt(); ?></p>
						<?php 
						} 
						?>
					</div>
					<div class="video_container">
						<?php 
							$video = get_post_meta( $post->ID, 'video-url', true );
							if(strlen($video) > 0) {
								if (strpos($video, "vimeo") == true) {
						?>
						<article class="vimeo video">
							<iframe src="<?php echo $video;?>" width="620" height="349" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</article>
						<?php
								} else { 
						?>
						<article class="youtube video">
							<iframe width="620" height="465" src="<?php echo $video;?>" frameborder="0"allowfullscreen></iframe>
						</article>
						<?php
								}
							} else {
								// POST DOESNT HAVE A VIDEO LINK
								echo '<div class="no-video">';
								echo the_content();
								echo '</div>';
							}
						?>
					</div>
					<div class="video_rating">
						<div class="row">
							<div class="six columns">
								<p>Rate</p>
								<?php 
									if(function_exists("kk_star_ratings")){
										echo kk_star_ratings($post->ID);
									} else {
										echo '<p>Star Rating not available</p>';
									}
								?>
								<p class="share">Share</p>
								<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink() ?>&p[images][0]&p[title]=<?php the_title() ?>&p[summary]=<?php the_excerpt(); ?>" class="share fb" target="_blank"Facebook</a>
								<a href="http://twitter.com/home?status=<?php the_title();?> <?php the_permalink();?>" class="share tw" target="_blank">Twitter</a>
							</div>
							<div class="one columns push_five comments_btn">
								<p><a href="#" class="toggle" gumby-trigger="#comments<?php the_ID(); ?>">Comments</a></p>
							</div>
						</div>
					</div> <!-- video_rating -->
					<div class="drawer video_comments" id="comments<?php the_ID(); ?>">
						<h4>Comments</h4>
						<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="580px" data-numposts="3" datacolorscheme="light"></div>
					</div> <!-- video_comments -->
					<!-- end video -->
	
				<?php endwhile; ?>
	
				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	
				<?php else : ?>
	
					<h2 style="font-size: 42px; font-size: 2.625rem;">Not Found</h2>
	
				<?php endif; ?>
			</div> <!-- videos_container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>