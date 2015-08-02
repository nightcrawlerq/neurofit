<?php

if(!function_exists('site_sidebars_widgets_init')){
      function site_sidebars_widgets_init() {

        register_sidebar( array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar-1',
            'description' => 'Appears on the post and project pages as a search widget',
            'before_widget' => '<div class="pro_sidebar_search">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));

        register_sidebar( array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar-2',
            'description' => 'Appears on the post and project pages Nav Tabs was used in the template as a sample widget',
            'before_widget' => '<div class="categories_holder">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="pro_sidebar_title">',
            'after_title' => '</h4>',
        ));

        register_sidebar( array(
            'name' => 'Sidebar 3',
            'id' => 'sidebar-3',
            'description' => 'Appears on the post and project pages used as a latest posts widget ',
            'before_widget' => '<div class="sidebar_latest_posts">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="pro_sidebar_title">',
            'after_title' => '</h4>',
        ));

        register_sidebar( array(
           'name' => 'Sidebar 4',
           'id' => 'sidebar-4',
           'description' => 'Appears on the post and project pages used as a tag cloud widget',
           'before_widget' => '<div class="products_tags">',
           'after_widget' => '</div>',
           'before_title' => '<h4>',
           'after_title' => '</h4>',
        ));

        register_sidebar( array(
           'name' => 'Sidebar 5',
           'id' => 'sidebar-5',
           'description' => 'Appears on the post and project pages as a featured works widget',
           'before_widget' => '<div class="sidebar_featured_works">',
           'after_widget' => '</div>',
           'before_title' => '<h4 class="pro_sidebar_title">',
           'after_title' => '</h4>',
        ));

        register_sidebar( array(
           'name' => 'Sidebar 6',
           'id' => 'sidebar-6',
           'description' => 'Appears on the post and project pages used as a social media widget',
           'before_widget' => '<div class="sidebar_social_icons">',
           'after_widget' => '</div>',
           'before_title' => '<h4>',
           'after_title' => '</h4>',
        ));
    }
}
add_action( 'widgets_init', 'site_sidebars_widgets_init' );