<?php get_header(); ?>

	<!-- single.php -->
	<div id="main">
		<div class="row">
			<div id="videos_container" class="eight columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div <?php post_class("single") ?> id="post-<?php the_ID(); ?>">
						
						<h2><?php the_title(); ?></h2>
						
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						
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
							}
						?>
			
						<div class="entry">
							
							<?php the_content(); ?>
			
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
							
							<?php the_tags( 'Tags: ', ', ', ''); ?>
			
						</div>

						<div class="video_comments" id="comments<?php the_ID(); ?>">
							<h4>Comments</h4>
							<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="520px" data-numposts="3" datacolorscheme="light"></div>
						</div> <!-- video_comments -->
						
						<?php edit_post_link('Edit this entry','','.'); ?>
						
					</div>
			
				<?php //comments_template(); ?>
			
				<?php endwhile; endif; ?>

				<?php //include (TEMPLATEPATH . '/inc/nav.php' ); ?>
				
            </div> <!-- videos_container -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>