<?php

//[Zone Shortcode]
function include_zone( $atts ){
	$params = [
		'post_type' => 'atl_ad',
		'tax_query' => [
			[
				'taxonomy' => 'zones',
				'field' => 'slug',
				'terms' => $atts['slug']
			]
		]
	];

	$ad = get_posts($params);

	return $ad[0] -> post_title;
}
add_shortcode( 'ad_zone', 'include_zone' );

