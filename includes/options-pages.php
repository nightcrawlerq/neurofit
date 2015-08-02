<?php

if(function_exists('acf_add_options_page')) { 

	acf_add_options_page(array(
		'page_title' => 'Global Options',
		'menu_title' => 'Global Options',
		'menu_slug' => 'site-global-options'
	));
	acf_add_options_sub_page(array(
		'title' => 'Global Settings',
		'slug' => 'settings-page',
		'parent' => 'site-global-options'
	));
	acf_add_options_sub_page(array(
		'title' => 'Social Media',
		'slug' => 'social-media-page',
		'parent' => 'site-global-options'
	));
}