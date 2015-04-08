<?php

	/*
		Template Name: Home Page
	*/

?>

<?php get_header(); ?>
<?php the_post(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<div class="row">
					<div id="carrousel" class="twelve columns">
						<!-- <img class="exit_link" src="<?php bloginfo('template_directory');?>/images/carrousel_image04.png" alt="EXIT"/> -->
						<!-- <img class="improv_link" src="http://guayoyo.ca/wp-content/uploads/2015/02/improvables_gccShowMain.jpg" alt="Improvables"/> -->
						<img class="improv_link" src="http://guayoyo.ca/wp-content/uploads/2015/02/improvables_.png" alt="Improvables"/>
						<img class="crossings_link" src="<?php bloginfo('template_directory');?>/images/carrousel_image10.jpg" alt="Clown Crossings"/>
						<img class="about_link" src="<?php bloginfo('template_directory');?>/images/carrousel_image05.png" alt="Exit at the Fringe"/>
      					<img class="exit_link" src="<?php bloginfo('template_directory');?>/images/carrousel_image01.png" alt="EXIT Public"/>
      					<img src="<?php bloginfo('template_directory');?>/images/carrousel_image02.png" alt="Masks"/>
      					<!-- <img class="about_link" src="<?php bloginfo('template_directory');?>/images/carrousel_image03.png" alt="EXIT Award"/> -->
						<!-- <div id="carrousel_image"></div> -->
					</div> <!-- carrousel -->
				</div>
				<div class="row">
					<div class="two columns centered">
						<div id="carrousel_stepper">
							<ul>
								<li class="carrousel_item current"></li>
								<li class="carrousel_item"></li>
								<li class="carrousel_item"></li>
								<li class="carrousel_item"></li>
								<li class="carrousel_item"></li>
							</ul> <!-- carrousel_stepper -->
						</div>
					</div>
				</div>
				<div class="row">
					<div id="banner" class="ten columns centered">
						<div class="row">
							<div id="banner_text" class="eight columns centered">
								<?php the_content(); ?>
								<!-- <p><span>GUAYOYO CREATIVE COLLECTIVE</span> conceives and builds experiences that transform audiences. We believe that the only way to make a real difference in the world is by creating space for truthfulness and connection</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- middle_wrapper -->

	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>