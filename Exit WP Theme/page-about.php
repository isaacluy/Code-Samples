<?php

	/*
		Template Name: About Page
	*/

?>

<?php get_header(); ?>
<?php the_post(); ?>

	<div id="middle_wrapper" class="row">
		<div id="middle" class="twelve columns">
			<div class="row">
				<div class="ten columns centered">
					<div id="template_main" class="row">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div> <!-- middle -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>