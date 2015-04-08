<?php get_header(); ?>

	<div id="middle_wrapper" class="row">
		<div id="middle" class="twelve columns">
			<div class="row">
				<div class="ten columns centered">
					<div id="template_main" class="row">

					<?php if (have_posts()) : ?>
				
 						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				
						<?php /* If this is a category archive */ if (is_category()) { ?>

							<!--<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>-->
							<a href="http://www.theexitshow.com"> &lt;&lt; Home</a>
							<h3>NEXT SHOWS</h3>
				
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
				
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h3>Archive for <?php the_time('F jS, Y'); ?></h3>
				
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h3>Archive for <?php the_time('F, Y'); ?></h3>
				
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h3>Archive for <?php the_time('Y'); ?></h3>
				
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h3>Author Archive</h3>
				
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h3>Blog Archives</h3>
						
						<?php } ?>

						<?php while (have_posts()) : the_post(); ?>

							<div class="show_post">
								<div>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<ul class="show_posts_btns">
										<li class="pretty medium danger btn">
											<a href="<?php echo get_post_meta($post->ID, 'buy-tickets-url', true ); ?>" target="_blank">Buy Tickets</a>
										</li>
										<li class="pretty medium primary btn">
											<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Share</a>
										</li>
										<li class="pretty medium primary btn">
											<a href="http://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank">Tweet</a>
										</li>
									</ul>
								</div>
								<div>
									<img src="<?php bloginfo('template_directory');?>/images/shows/<?php echo get_post_meta( $post->ID, 'picture', true ); ?>" width="357" />
								</div>
							</div>
				
						<?php endwhile; ?>
							<a href="http://www.theexitshow.com"> &lt;&lt; Home</a>
							
					<?php else : ?>
				
						<h2>Nothing found</h2>
				
					<?php endif; ?>

					</div>
				</div>
			</div>
		</div> <!-- middle -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>