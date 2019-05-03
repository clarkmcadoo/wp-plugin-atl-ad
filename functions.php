<?php

function get_ad_ID( $zone_slug ){
	$ad_id = wp_cache_get('id', $zone_slug);
	if (!$ad_id){
		$params = [
			'post_type' => 'atl_ad',
			'tax_query' => [
				[
					'taxonomy' => 'zones',
					'field' => 'slug',
					'terms' => $zone_slug
				]
				],
			'fields' => 'ids'
		];

	$ad = get_posts($params);
	$index = array_rand($ad, 1);
	$ad_id = $ad[$index];
	wp_cache_set('id', $ad_id, $zone_slug, 10);
	};
	return $ad_id;
}