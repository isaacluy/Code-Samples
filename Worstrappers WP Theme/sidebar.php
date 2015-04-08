    <!-- sidebar.php -->
            <div id="right_panel_container" class="four columns">
                <section class="tabs" id="tabs">
                    <ul class="tab-nav">
                        <li id="popular" class="active"><a href="#">POPULAR</a></li>
                        <li id="featured"><a href="#">FEATURED</a></li>
                        <li id="recent"><a href="#">RECENT</a></li>
                    </ul>
                    <div class="tab-content active">
                        <aside id="popular_posts_bars-1">
                            <!-- Popular Posts START -->
                            <ul class="popular_posts_bars">
                                <?php
                                    $i = 0;
                                    $color = array("red","orange","yellow","green","blue");
                                    if(function_exists("kk_star_ratings_get")) { 
                                        $top_rated_posts = kk_star_ratings_get(5); 
                                    }
                                    foreach($top_rated_posts as $post) {
                                        $recent = get_post($post->ID, ARRAY_A);
                                        echo 
                                        '<li class="popular_posts_bars_color_'. $color[$i].'">
                                            <a href="' . get_permalink($post->ID) . '" title="Go to '.esc_attr($recent["post_title"]).'" >' . $recent["post_title"].'</a>
                                            <span class="popular_posts_bars_comment_count_hold">
                                                <a href="' . get_permalink($post->ID) . '" class="popular_posts_bars_comment_count">'.$post->ratings.'</a>
                                            </span>
                                        </li>';
                                        $i++;
                                    }
                                ?>
                            </ul>
                        </aside>
                    </div> <!-- popular posts -->
                    <div class="tab-content">
                        <aside id="popular_posts_bars-2">
                            <!-- Featured Posts START -->
                            <ul class="popular_posts_bars">
                                <?php
                                    $i = 0;
                                    //$color = array("red","orange","yellow","green","blue");
                                    $args = array(
                                        'category' => 2,
                                        'numberposts' => 5,
                                        'orderby' => 'post_date'
                                    );
                                    $recent_posts = wp_get_recent_posts( $args );
                                    foreach( $recent_posts as $recent ){
                                        $rating = get_post_meta($recent["ID"], '_kksr_avg', true);
                                        //if (strlen($rating) <= 0) { $rating = "0.00";}
                                        echo 
                                        '<li class="popular_posts_bars_color_'. $color[$i].'">
                                            <a href="' . get_permalink($recent["ID"]) . '" title="Go to '.esc_attr($recent["post_title"]).'" >' . $recent["post_title"].'</a>
                                            <span class="popular_posts_bars_comment_count_hold">
                                                <a href="' . get_permalink($recent["ID"]) . '" class="popular_posts_bars_comment_count">'.$rating.'</a>
                                            </span>
                                        </li>';
                                        //if(function_exists("kk_star_ratings")) : echo kk_star_ratings($recent["ID"]); endif;
                                        $i++;
                                    }
                                ?>
                            </ul>
                        </aside>
                    </div> <!-- featured posts -->
                    <div class="tab-content">
                        <aside id="popular_posts_bars-3">
                            <!-- Recent Posts START -->
                            <ul class="popular_posts_bars">
                                <?php
                                    $i = 0;
                                    //$color = array("red","orange","yellow","green","blue");
                                    $args = array(
                                        'numberposts' => 5,
                                        'orderby' => 'post_date'
                                    );
                                    $recent_posts = wp_get_recent_posts( $args );
                                    foreach( $recent_posts as $recent ){
                                        $rating = get_post_meta($recent["ID"], '_kksr_avg', true);
                                        //if (strlen($rating) <= 0) { $rating = "0.00";}
                                        echo 
                                        '<li class="popular_posts_bars_color_'. $color[$i].'">
                                            <a href="' . get_permalink($recent["ID"]) . '" title="Go to '.esc_attr($recent["post_title"]).'" >' . $recent["post_title"].'</a>
                                            <span class="popular_posts_bars_comment_count_hold">
                                                <a href="' . get_permalink($recent["ID"]) . '" class="popular_posts_bars_comment_count">'.$rating.'</a>
                                            </span>
                                        </li>';
                                        $i++;
                                    }
                                ?>
                            </ul>
                        </aside>
                    </div> <!-- recent posts -->
                </section> <!-- tabs -->
                <section id="categories">
                    <p><a href="#" class="toggle" gumby-trigger="#drawer1">CATEGORIES</a></p>
                    <div class="drawer active" id="drawer1">
                        <ul>
                            <?php
                                // GET ALL CATEGORIES
                                $args = array(
                                    'exclude' => '2', /* Exclude: Featured */
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'title_li' => ''
                                );
                                wp_list_categories( $args );
                            ?>
                        </ul>
                    </div>
                </section> <!-- categories -->
                <section id="archives">
                    <p><a href="#" class="toggle" gumby-trigger="#drawer2">ARCHIVES</a></p>
                    <div class="drawer active" id="drawer2">
                        <ul>
                            <?php
                                // GET ARCHIVES BY MONTH
                                $args = array (
                                    'limit' => 6,
                                    'type' => 'monthly'
                                );
                                wp_get_archives( $args ); 
                            ?>
                        </ul>
                    </div>
                </section> <!-- archives -->
                <section id="contact" class="row">
                    <div class="ten columns centered">
                        <p>Email us at <a href="mailto:info@worstrappers.com" target="_blank">info@worstrappers.com</a> with your worst rapper video</p>
                    </div>
                </section> <!-- contact -->
                <?php
                    // Check subscription
                    if(isset($_POST["email"]) || isset($_POST["emailtop"])) {
                        $email = $_POST["email"];
                        if (strlen($email <= 0)) { $email = $_POST["emailtop"]; }

                        // Send email
                        if( !mail("i1234567890@hotmail.com", "Worstrappers.com MAILING LIST", $email) || !mail("info@worstrappers.com", "Worstrappers.com MAILING LIST", $email) ) {
                            echo '<p class="subscribe top thankyou">An error acurred. Please try again later.</p>';
                        } else {
                            echo '<p class="subscribe thankyou">Thank you for subscribing!</p>';
                        }
                    } else { 
                ?>
                <form class="subscribe" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="field">
                        <input id="email" class="email input" name="email" type="email" placeholder="Subscribe">
                    </div>
                    <div class="pretty medium warning btn">
                        <input id="submit" type="submit" value="SUBMIT">
                    </div>
                </form> <!-- subscribe -->
                <?php
                    }
                ?>
                <section class="row social_media">
                    <div class="three columns facebook"><a href="https://www.facebook.com/pages/Worstrapperscom/577394999007344" target="_blank">Facebook</a></div>
                    <div class="three columns twitter"><a href="https://twitter.com/worstrappers" target="_blank">Twitter</a></div>
                    <div class="three columns youtube"><a href="https://plus.google.com/u/0/116374385239505814818/posts" target="_blank">Youtube</a></div>
                    <div class="three columns instagram"><a href="http://www.worstrappers.com/?feed=rss2" target="_blank">RSS</a></div>
                </section> <!-- social media -->
            </div> <!-- right_panel_container -->
        </div> <!-- .row -->
    </div> <!-- main -->