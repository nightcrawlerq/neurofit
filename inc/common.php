<?php

add_filter('widget_text', 'do_shortcode');
add_action( 'init', 'my_template' );

function my_template(){
	$template = get_bloginfo('template_url');
	if((!is_admin())&&(!is_login_page())){
		wp_enqueue_style( 'wp-common-css',$template.'/css/wp-core.css');
		wp_enqueue_style( 'bootstrap',$template.'/css/bootstrap.min.css');
		wp_enqueue_style( 'site',$template.'/style.css',array('bootstrap'));
		
		wp_enqueue_script( 'bootstrap',$template.'/js/bootstrap.min.js',array('jquery'));
		wp_enqueue_script( 'theme-script',$template.'/js/script.js',array('jquery','bootstrap'),'1',true);
	}else{
		wp_enqueue_style( 'my-admin-css',$template.'/css/admin.css',array('colors'));
	}

}

function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
	if(in_array('current-menu-item',$classes)){
		$classes[] = 'active';
	} 
     return $classes;
}
