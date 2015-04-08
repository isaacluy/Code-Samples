<?php get_header(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<div class="row">
					<div class="ten columns centered">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
							<div class="post" id="post-<?php the_ID(); ?>">
					
								<h2><?php the_title(); ?></h2>
					
								<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					
								<div class="entry">
					
									<?php the_content(); ?>
					
									<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
								</div>
					
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					
							</div>
							
							<?php // comments_template(); ?>
					
							<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div> <!-- middle_wrapper -->

	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
