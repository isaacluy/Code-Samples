<?php

	/*
		Template Name: About Page
	*/

?>

<?php get_header(); ?>
<?php the_post(); ?>

		<div id="middle_wrapper" class="row">
			<div id="middle" class="twelve columns">
				<?php //the_content(); ?>
                <div class="row">
                    <div class="five columns push_one" id="about_photo"></div>
                    <div class="five columns" id="about_gcc">
                        <?php
                            $id = 16; // What is Guayoyo? Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="about_sprite" id="title_gcc"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a></p>';
                            echo '<p class="about_sprite" id="content_gcc">'.get_the_excerpt($id).'</p>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
                    </div><!-- about_gcc -->
                </div>
				<div class="row">
					<div id="about_line" class="ten columns centered about_sprite"></div>
				</div>
				<div class="row" id="mission_values_vision">
					<div class="three columns push_one">
						<?php
                            $id = 18; // Mission Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="red"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a></p>';
                            echo the_excerpt();
                            echo '<a href="'.get_permalink($id).'">Read More &gt;&gt;</a>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
					</div>
					<div class="four columns">
						<div class="row">
							<div class="nine columns centered">
								<?php
                            		$id = 20; // Values Page ID
                            		$temp = $post;
                            		$post = get_post($id);
                            		setup_postdata($post);
                            		echo '<p class="red"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a></p>';
                            		echo the_excerpt();
                            		echo '<a href="'.get_permalink($id).'">Read More &gt;&gt;</a>';
                            		wp_reset_postdata();
                            		$post = $temp;
                        		?>
							</div>
						</div>
					</div>
					<div class="three columns">
						<?php
                            $id = 22; // Vision Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="red"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a></p>';
                            echo the_excerpt();
                            echo '<a href="'.get_permalink($id).'">Read More &gt;&gt;</a>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
					</div>
				</div>
				<div id="about_people" class="row">
					<div class="three columns push_one">
						<?php
                            $id = 24; // Isaac Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="about_sprite"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a><span>'.get_post_meta($id, "position", true).'</span></p>';
                            echo '<p class="about_sprite">'.get_the_excerpt($id).'</p>';
                            echo '<a id="isaac" class="about_sprite person" href="'.get_permalink($id).'"></a>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
					</div>
					<div class="four columns">
						<div class="row">
							<div class="nine columns centered">
								<?php
                            		$id = 26; // Noha Page ID
                            		$temp = $post;
                            		$post = get_post($id);
                            		setup_postdata($post);
                            		echo '<p class="about_sprite"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a><span>'.get_post_meta($id, "position", true).'</span></p>';
                            		echo '<p class="about_sprite">'.get_the_excerpt($id).'</p>';
                            		echo '<a id="noha" class="about_sprite person" href="'.get_permalink($id).'"></a>';
                            		wp_reset_postdata();
                            		$post = $temp;
                        		?>
							</div>
						</div>
					</div>
					<div class="three columns">
						<?php
                            $id = 28; // Daniela Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="about_sprite"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a><span>'.get_post_meta($id, "position", true).'</span></p>';
                            echo '<p class="about_sprite">'.get_the_excerpt($id).'</p>';
                            echo '<a id="daniela" class="about_sprite person" href="'.get_permalink($id).'"></a>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
					</div>
				</div>
                <!--<div id="about_people2" class="row">
                    <div class="three columns push_one">
                        <?php
                            $id = 34; // Isaac Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="about_sprite"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a><span>'.get_post_meta($id, "position", true).'</span></p>';
                            echo '<p class="about_sprite">'.get_the_excerpt($id).'</p>';
                            echo '<a id="isaac" class="about_sprite person" href="'.get_permalink($id).'"></a>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
                    </div>
                    <div class="four columns">
                        <div class="row">
                            <div class="nine columns centered">
                                <?php
                                    $id = 36; // Noha Page ID
                                    $temp = $post;
                                    $post = get_post($id);
                                    setup_postdata($post);
                                    echo '<p class="about_sprite"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a><span>'.get_post_meta($id, "position", true).'</span></p>';
                                    echo '<p class="about_sprite">'.get_the_excerpt($id).'</p>';
                                    echo '<a id="noha" class="about_sprite person" href="'.get_permalink($id).'"></a>';
                                    wp_reset_postdata();
                                    $post = $temp;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="three columns">
                        <?php
                            $id = 38; // Daniela Page ID
                            $temp = $post;
                            $post = get_post($id);
                            setup_postdata($post);
                            echo '<p class="about_sprite"><a href="'.get_permalink($id).'">'.get_the_title($id).'</a><span>'.get_post_meta($id, "position", true).'</span></p>';
                            echo '<p class="about_sprite">'.get_the_excerpt($id).'</p>';
                            echo '<a id="daniela" class="about_sprite person" href="'.get_permalink($id).'"></a>';
                            wp_reset_postdata();
                            $post = $temp;
                        ?>
                    </div>
                </div> -->
			</div>
		</div> <!-- middle_wrapper -->

	</div>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>