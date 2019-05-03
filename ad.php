<?php
  function atl_ad () {
  $args = [
    'labels' => [
      'name' => 'Ads',
      'sigular_name' => 'Ad',
      'add_new' => 'Add New Ad',
      'add_new_item' => 'New Ad',
      'edit_item' => 'Edit Ad',
      'new_item' => 'New Ad',
      'view_item' => 'View Ad',
      'view_items' => 'View Ads',
      'search_items' => 'Search Ads'
    ],
    'public' => false,
    'show_ui' => true,
    'supports' => [
      'custom-fields',
      'title',
      'thumbnail'
    ]
  ];

  $post_type = 'atl_ad';

  register_post_type( $post_type, $args);
};

add_action( 'init', 'atl_ad' );