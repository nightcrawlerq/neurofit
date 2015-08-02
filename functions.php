<?php

require_once ( 'inc/common.php' );
require_once ( 'inc/widgets.php' );
require_once ( 'inc/shortcodes.php' );
require_once ( 'inc/theme-options.php' );
//require_once ( 'inc/admin-theme.php' );

	add_theme_support( 'post-thumbnails' );
		add_image_size( 'slider', 980, 453  , TRUE );
		add_image_size( 'pagecover', 980, 310  , TRUE );
	register_nav_menu( 'primary', 'Navigation Menu' );
	register_nav_menu( 'footer', 'Footer Menu' );
	
function my_widgets_init() {
	register_sidebar( array(
		'name'          => 'Main Widget Area', 
		'id'            => 'sidebar-1',
		'description'   => 'Appears in the sidebar section of the site.',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );

function my_slider() {
 
	$labels = array(
		'name' => 'slider',
		'singular_name' => 'Slider Item',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Slider Item',
		'edit_item' => 'Edit Slider Item',
		'new_item' => 'New Slider Item',
		'view_item' => 'View Slider Item',
		'search_items' => 'Search Slider',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Slider'
	);
 
	$args = array(
		'label' => 'Slider',
		'abels' => $labels,
		'public' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'taxonomies' => array(),
		'supports' => array('title','excerpt','thumbnail','custom-fields')
	); 
 
	register_post_type( 'slider' , $args );
}
add_action('init', 'my_slider');

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' ); 
}
