<?php

	/*
		Template Name: Under Construction
	*/

?>

<?php get_header(); ?>
<?php the_post(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<div class="row">
					<div id="banner" class="ten columns centered">
						<div class="row">
							<div id="banner_text" class="eight columns centered"> 
								<?php the_content();?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- middle_wrapper -->

	</div>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>