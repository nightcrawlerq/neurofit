<?php

	if (!function_exists('the_breadcrumb')){
        function the_breadcrumb(){
            global $post;
            echo '<div class="pagenation">';
            if (!is_front_page() || is_home()) {
                echo '<a href="';
                echo get_option('home');
                echo '">';
                echo 'Home';
                echo '</a><i> / </i>&nbsp;';
                if(is_category() || is_single()){
                    echo '<i>';
                    the_title();
                    echo '</i>';
                }elseif (is_page()) {
                    if($post->post_parent){
                        $anc = get_post_ancestors( $post->ID );
                        foreach ($anc as $ancestor){
                            $output = '<a href="' .get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a><i>/</i>&nbsp;';
                        }
                        echo $output;
                    }
                }
            }elseif (is_tag()) {
                single_tag_title();
            }elseif (is_day()) {
                echo"Archive for "; the_time('F jS, Y');
            }elseif (is_month()) {
                echo"Archive for "; the_time('F, Y');
            }elseif (is_year()) {
                echo"Archive for "; the_time('Y');
            }elseif (is_author()) {
                echo"Author Archive";
            }elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
                echo "Blog Archives";
            }elseif (is_search()) {
                echo"Search Results";
            }
            echo '</div>';
        }
    }