<?php get_header(); ?>

	<!-- search.php -->
	<div id="main">
		<div class="row">
			<div id="videos_container" class="eight columns archive">
				<?php if (have_posts()) : ?>

					<h2>Search Results</h2>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<?php while (have_posts()) : the_post(); ?>

						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<h2><?php the_title(); ?></h2>

							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

							<div class="entry">
								<?php the_excerpt(); ?>
							</div>

						</div>

					<?php endwhile; ?>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

				<?php else : ?>

					<h2 style="font-size: 42px; font-size: 2.625rem;">No posts found.</h2>

				<?php endif; ?>
			</div> <!-- videos_container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>