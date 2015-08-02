<?php

function my_site_url( $atts ) {
	return site_url();
}
add_shortcode( 'site_url', 'my_site_url' );
