<?php
    /**
     * The functions file is used to initialize everything in the theme.  It controls how the theme is loaded and
     * sets up the supported features, default actions, and default filters.  If making customizations, users
     * should create a child theme and make changes to its functions.php file (not this one).  Friends don't let
     * friends modify parent theme files. ;)
     *
     * Child themes should do their setup on the 'after_setup_theme' hook with a priority of 11 if they want to
     * override parent theme features.  Use a priority of 9 if wanting to run before the parent theme.
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
     * General Public License as published by the Free Software Foundation; either version 2 of the License,
     * or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
     * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write
     * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     *
     * @package Text Domain
     * @subpackage Functions
     * @version 1.0
     * @author Amen Moja Ra <amen.ra@imaginationeverywhere.info>
     * @copyright Copyright (c) 2014 - 2015, Amen Moja Ra
     * @link http://imaginationeverywhere.info/themes/belife
     * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
     */

    /* Load the core theme framework. */
    require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
    new Hybrid();

    /* Do theme setup on the 'after_setup_theme' hook. */
      add_action( 'after_setup_theme', 'neurofit_setup', 10);

    if (!function_exists('neurofit_setup')){

        /**
         * Text Domain Theme setup.
         *
         * Set up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support post thumbnails.
         *
         * @since Fat Cat Media House WordPress Theme 1.0
         */

        function neurofit_setup(){
            /* Add theme support for framework extensions. */
            
            /*  This is to activate the featured image in Posts
             *  The best thumbnail/image script ever. 
             */
            add_theme_support( 'get-the-image' );

            /* Enable custom template hierarchy. */
            add_theme_support( 'hybrid-core-template-hierarchy' );

            /* Load shortcodes. */
            add_theme_support( 'hybrid-core-shortcodes' );

            /*  Adds input fields in the post editor for adding post-specific 
             *  meta information as well as sets up some defaults on other pages.
             */
            add_theme_support( 'hybrid-core-seo' );

            /*  This theme uses wp_nav_menu() in one location. */
            register_nav_menus( array(
                'front_page_menu' => __( 'Front Page Menu', 'neurofit'),
                'default_page_menu' => __( 'Default Page Menu', 'neurofit'),
            ));

            /*  Here are Hybrid Core Framework Extensions which provide more 
             *  Theme Supports
             */
            
            /* Breadcrumbs. Yay! */
            add_theme_support( 'breadcrumb-trail' );
            
            remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
            remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
            remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
            remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
            remove_action( 'wp_head', 'index_rel_link' ); // index link
            remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
            remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
            remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
            remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP ver
            
            // Hook into the header to add the needed meta 
            add_action('wp_head', 'add_meta_tags', 0);

            // Hook into the header to add the needed meta 
            add_action( 'wp_head', 'add_link_tags', 2);

            // Hook into the 'wp_enqueue_scripts' action
            add_action( 'wp_enqueue_scripts', 'Text Domain_theme_scripts' );
        
            // Enqueue Scripts in the Admin
            //add_action( 'admin_enqueue_scripts', 'Text Domain_post_listing_column_resize' );       
            
            //Set Image Sizes
            //add_action( 'init', 'text_domain_add_image_sizes' );
            
            /* Filters hooks go here. */

            //enable automatic updates for all plugins
            add_filter( 'auto_update_plugin', '__return_true' );

            // enable automatic updates for all themes
            add_filter( 'auto_update_theme', '__return_true' );
            
            /** Gravity Forms Filters 
             *  These functions are located in includes/forms.php  
            **/
            // Add custom classes to inputs
            //add_action("gform_field_input", "gf_custom_class", 10, 5);
 
            /** Gravity Forms Filters 
              * These functions are located in includes/forms.php    
            **/

            // This function forces jQuery calls to be loaded in the footer after all other scripts
            add_filter("gform_init_scripts_footer", "init_scripts");

            // filter the Gravity Forms button type 
            //add_filter("gform_submit_button", "form_submit_button", 10, 2);

            // Add a class to menu icon
            //add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
            
            //Add Prev & Next Link Styled Paginaiton
            add_filter('next_posts_link_attributes', 'next_page_posts_link_attributes');
            add_filter('previous_posts_link_attributes', 'previous_page_posts_link_attributes');

            /**
             * Display column based on Role
             *
             * The column name can be found by opening the settings screen of your column
             * and hover your mouse over "Type". In the tooltip you will find the column Name.
             *
             * In this example we will disable the Custom Field column for the 'subscriber' role
             *
             */
            //add_filter( "manage_edit-post_columns", "myplugin_filter_hide_column_based_on_role", 101, 1 );
            //add_filter( "manage_edit-page_columns", "myplugin_filter_hide_column_based_on_role", 101, 1 );

            
            /**
            * Create Advance Custom Fields Options Pages.
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/options-pages.php');

            /**
            * Register our sidebars and widgetized areas.
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/dynamic-sidebars.php');

            /**
            * Create Breadcrumbs
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/breadcrumbs.php');

            /**
            * Gravity Forms Configuration
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/forms.php');

            /**
            * Create Pagination
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/pagination.php');

            /**
            * Customize Nav Menu
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/walker-menu.php');
        }
    }
    
    //adds meta tags along with the title tag to the header.php file
    if (!function_exists('add_meta_tags')) {
        function add_meta_tags() {
        ?>
            
        <?php
        }
    }

    // Add the appropriate link tags to the header
    if(!function_exists('add_link_tags')){
        function add_link_tags(){
        ?>
                    <!-- Fav Icon -->
            <link rel="shortcut icon" href="<?php if( get_field('favicon','option')) : the_field('favicon','option'); else: ''; endif; ?>">
                    <!-- Iphone Icones -->
            <link rel="apple-touch-icon" href="<?php if( get_field('custom_apple_touch_icon','option')) : the_field('custom_apple_touch_icon','option'); else: ''; endif; ?>">
            <link rel="apple-touch-icon" sizes="72x72" href="<?php if( get_field('apple_touch_icon_72x72','option')) : the_field('apple_touch_icon_72x72','option'); else: ''; endif; ?>">
            <link rel="apple-touch-icon" sizes="114x114" href="<?php if( get_field('apple_touch_icon_114x114','option')) : the_field('apple_touch_icon_114x114','option'); else: ''; endif; ?>">
            <link rel="apple-touch-icon" sizes="144x144" href="<?php if( get_field('apple_touch_icon_144x144','option')) : the_field('apple_touch_icon_144x144','option'); else: ''; endif; ?>">
        <?php
        }
    }

    if (!function_exists('the_slug')) {
        // Get the slug
        function the_slug() {
            $post_data = get_post($post->ID, ARRAY_A);
            $slug = $post_data['post_name'];
            return $slug; 
        }
    }
    
    if (!function_exists('special_nav_class')) {
        function special_nav_class($classes, $item){
             if( in_array('menu-item', $classes) ){
                     $classes[] = 'dropdown';
             }
             return $classes;
        }  
    }

    //Set Image Sizes
    if (!function_exists('neurofit_add_image_sizes')) {
        function text_domain_add_image_sizes() {
           add_image_size('featured-image-name', width, height, true/false);
        }
    }

    /**
     * Display column based on Role
     *
     * The column name can be found by opening the settings screen of your column
     * and hover your mouse over "Type". In the tooltip you will find the column Name.
     *
     * In this example we will disable the Custom Field column for the 'subscriber' role
     *
     */
    function myplugin_filter_hide_column_based_on_role( $column_headings ) {

        // Disable the custom field column with Name 'column-meta' for subscribers
        if ( current_user_can( 'subscriber' ) ) {
            unset( $column_headings[ 'column-meta' ] );
        }

        return $column_headings;
    }

    // Register Script
    if(!function_exists('neurofit_theme_scripts')){
        function neurofit_theme_scripts(){
            global $wp_scripts;
            global $wp_styles;
            
            wp_deregister_style( '' );
            wp_register_style( '',trailingslashit( THEME_URI ) .'', false, '1.0' );
            wp_enqueue_style( '' );
            //Conditonally add styles if necessary
            //wp_style_add_data( '', 'conditional', 'lt IE 9' );
            //wp_style_add_data( '', 'conditional', 'gte IE 9' );
    
            // Load our main stylesheet.
            wp_enqueue_style( '', get_stylesheet_uri(), array() );
         
             wp_deregister_script( '' );
             wp_register_script( '', trailingslashit( THEME_URI ) .'', false, '1.0', true );
             wp_enqueue_script( '' );
             //Use the wp scripts constant if necesarry
             //global $wp_scripts;
             //Conditonally add scripts if necessary
             //$wp_scripts->add_data( '', 'conditional', 'lt IE 9' );
             //$wp_scripts->add_data( '', 'conditional', 'gte IE 9' );
        }
    }






// <?php

// require_once ( 'inc/common.php' );
// require_once ( 'inc/widgets.php' );
// require_once ( 'inc/shortcodes.php' );
// require_once ( 'inc/theme-options.php' );
// //require_once ( 'inc/admin-theme.php' );

// 	add_theme_support( 'post-thumbnails' );
// 		add_image_size( 'slider', 980, 453  , TRUE );
// 		add_image_size( 'pagecover', 980, 310  , TRUE );
// 	register_nav_menu( 'primary', 'Navigation Menu' );
// 	register_nav_menu( 'footer', 'Footer Menu' );
	
// function my_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => 'Main Widget Area', 
// 		'id'            => 'sidebar-1',
// 		'description'   => 'Appears in the sidebar section of the site.',
// 		'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</li>',
// 		'before_title'  => '<h3 class="widget-title">',
// 		'after_title'   => '</h3>',
// 	) );

// }
// add_action( 'widgets_init', 'my_widgets_init' );

// function my_slider() {
 
// 	$labels = array(
// 		'name' => 'slider',
// 		'singular_name' => 'Slider Item',
// 		'add_new' => 'Add New',
// 		'add_new_item' => 'Add New Slider Item',
// 		'edit_item' => 'Edit Slider Item',
// 		'new_item' => 'New Slider Item',
// 		'view_item' => 'View Slider Item',
// 		'search_items' => 'Search Slider',
// 		'not_found' =>  'Nothing found',
// 		'not_found_in_trash' => 'Nothing found in Trash',
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Slider'
// 	);
 
// 	$args = array(
// 		'label' => 'Slider',
// 		'abels' => $labels,
// 		'public' => true,
// 		'show_ui' => true,
// 		'query_var' => true,
// 		'rewrite' => true,
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'taxonomies' => array(),
// 		'supports' => array('title','excerpt','thumbnail','custom-fields')
// 	); 
 
// 	register_post_type( 'slider' , $args );
// }
// add_action('init', 'my_slider');

// add_action( 'init', 'my_add_excerpts_to_pages' );
// function my_add_excerpts_to_pages() {
//      add_post_type_support( 'page', 'excerpt' ); 
// }
