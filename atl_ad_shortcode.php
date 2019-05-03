<?php

//[Zone Shortcode]
function include_zone( $atts ){
	$ad_id = get_ad_ID($atts['slug']);
	// Use true to get the individual url vs array of urls
	$url = get_post_meta($ad_id, 'url', true);
	$image = get_the_post_thumbnail($ad_id, 'medium');

	$html = "<div>";
	$html .= "<a href='{$url}'>$image</a>";
	$html .= "</div>";

	return $html;
}
add_shortcode( 'ad_zone', 'include_zone' );

