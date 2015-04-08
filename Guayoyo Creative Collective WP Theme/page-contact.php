<?php

	/*
		Template Name: Contact Page
	*/

?>

<?php get_header(); ?>
<?php the_post(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<div class="row">
					<div id="contact_title" class="ten columns centered">
						<h2 class="contact_sprite">Contact</h2>
					</div>
				</div>
				<div class="row">
					<div id="contact_map" class="five columns push_one contact_sprite">
						<iframe width="372" height="212" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2418+Nichols+Dr,+Oakville,+ON&amp;aq=&amp;sll=43.48826,-79.710682&amp;sspn=0.169129,0.363579&amp;ie=UTF8&amp;hq=&amp;hnear=2418+Nichols+Dr,+Oakville,+Ontario+L6H+7A4&amp;t=m&amp;ll=43.489296,-79.709845&amp;spn=0.014945,0.031929&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
					</div>
					<div id="contact_info" class="five columns">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row last">
					<div id="contact_form" class="six columns centered">
						<p class="contact_sprite">Keep in Touch</p>
						<?php
							if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
							//if (isset($_POST["name"])) echo "<h1>NAME</h1>";
						?>
						<!--
						<form action="<?php the_permalink(); ?>" method="post">
							<div class="row">
								<div class="four columns append field">
									<input id="name" name="name" class="wide text input" type="text" placeholder="Your Name"/>
									<span class="adjoined"><i class="icon-user"></i></span>
								</div>
								<div class="four columns append field">
									<input id="email" name="email" class="wide email input" type="email" placeholder="Your Email"/>
									<span class="adjoined"><i class="icon-mail"></i></span>
								</div>
								<div class="four columns append field">
									<input id="subject" name="subject" class="wide text input" type="text" placeholder="Subject"/>
									<span class="adjoined"><i class="icon-pencil"></i></span>
								</div>
							</div>
							<div class="row">
								<div class="twelve columns field">
									<textarea id="message" name="message" class="input textarea" placeholder="Your Message" rows="5"></textarea>
								</div>
							</div>
							<input id="contact_send" class="pretty medium info btn icon-left icon-user" type="submit" placeholder="Send" value="Send"/>
						</form>
						-->
					</div>
				</div>
			</div>
		</div> <!-- middle_wrapper -->

	</div>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>