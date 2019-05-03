<?php

//[Zone Shortcode]
function include_zone( $atts ){
	return $atts['slug'];
}
add_shortcode( 'ad_zone', 'include_zone' );

