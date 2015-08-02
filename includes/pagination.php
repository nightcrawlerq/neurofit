<?php

    if (!function_exists('pagination')){
            function pagination($pages = '', $range = 2){  
                 $showitems = ($range * 2)+1;  

                 global $paged;
                 if(empty($paged)) $paged = 1;

                 if($pages == ''){
                    global $wp_query;
                    $pages = $wp_query->max_num_pages;
                    if(!$pages){
                        $pages = 1;
                    }
                }
                if(1 != $pages){
                    echo '<ul>';
                                //The Below Line of Code Takes effect if there are more than 5 pages of posts and the code renders a double left arrow "<<"
                    if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link(1).'" class="tbutton">&laquo;</a></li>';
                                //The Below Line of Code Takes effect if there are more than 5 pages of posts and the code renders a single left arrow "<"
                                //if($paged > 1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($paged - 1).'"><span>&lsaquo;</span></a></li>';
                    for ($i=1; $i <= $pages; $i++){
                     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                        echo ($paged == $i)? '<li><span class="deactive">'.$i.'</span></li>':'<li><a href="'.get_pagenum_link($i).'" class="tbutton">'.$i.'</a></li>';
                    }
                }
                                 //The Below Line of Code Takes effect if there are more than 5 pages of posts and the code renders a single right arrow ">"
                                 //if ($paged < $pages && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($paged + 1).'">&rsaquo;</a></li>';  
                                 //The Below Line of Code Takes effect if there are more than 5 pages of posts and the code can render a double right arrow ">>" with the html encode of "&raquo;"
                                 //However instead the code is rendering three dots "..." and the last page number 
                if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<li><li><span class="deactive">...</span></li><a href="'.get_pagenum_link($pages).'" class="tbutton">'.$pages.'</a></li>';
                echo '</ul>';
            }
        }
    }

    /*
        These two functions create anchor links, and you can customize a lot of it, 
        but it's impossible to add a class through just using their parameters alone. 
        Gotta add a function to functions.php:
    */

        add_filter('next_posts_link_attributes', 'next_page_posts_link_attributes');
        add_filter('previous_posts_link_attributes', 'previous_page_posts_link_attributes');

        if (!function_exists('next_page_posts_link_attributes')){
            function next_page_posts_link_attributes() {
                return 'class="tbutton pull-right n-page"';
            }
        }

        if (!function_exists('previous_page_posts_link_attributes')){
            function previous_page_posts_link_attributes() {
                return 'class="tbutton pull-left p-page"';
            }
        }

    /**
     * Display pagination information in the format "X - Y of Z".
     * 
     * @param object $wp_query Optionally generate string from custom query, defaults to main.
     */
    if (!function_exists('wp_posts_count')){
        function wp_posts_count( $wp_query = null ) {
            if ( ! $wp_query )
                global $wp_query;

            $posts = min( ( int ) $wp_query->get( 'posts_per_page' ), $wp_query->found_posts );
            $paged = max( ( int ) $wp_query->get( 'paged' ), 1 );
            $count = ( $paged - 1 ) * $posts;

            printf(
                '%d - %d of %d Posts',
                $count + 1,
                $count + $wp_query->post_count,
                $wp_query->found_posts
                );
        }
    }