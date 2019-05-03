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
      'search_items' => 'Search Ads',
      'not_found' => 'No Ads',
      'not_found_in_trash' => 'No Ads in Trash',
      'parent_item_colon' => 'Parent Page',
      'all_items' => 'All Ads',
      'archives' => 'Ad Archives',
      'attribues' => 'Ad Attributes',
      'insert_into_item' => 'Insert Ad',
      'uploaded_to_this_item' => 'Uploaded to this Ad',
      'featured_image' => 'Ad Image',
      'set_featured_image' => 'Set Featured image',
      'remove_featured_iamge' => 'Remove Featured image',
      'use_featured_image' => 'Use Featured Image',
      'menu_name' => 'Ads',
      'name_admin_bar' => 'Ad'
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