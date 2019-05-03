<?php
  function atl_zone () {

    $taxonomy = 'zones';
    $type = 'atl_ad';
    $args = [
      'labels' => [
        'name' => 'Zones',
        'singular_name' => 'Zone',
        'menu_name' => 'Zones',
        'all_item' => 'All Zones',
        'edit_item' => 'Edit Zones',
        'view_item' => 'View Zones',
        'update_item' => 'Update Zone',
        'add_new_item' => 'Add New Zone',
        'new_item_name' => 'New Zone Name',
        'back_to_items' => 'Back to Zones'
      ],
      'public' => false,
      'show_admin_column' => true,
      'show_ui' => true
    ];

    register_taxonomy( $taxonomy, $type, $args);
  }

add_action( 'init', 'atl_zone' );