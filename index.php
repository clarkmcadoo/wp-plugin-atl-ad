<?php

/*
 * Plugin Name: WP AdServe
 * Plugin URI: 
 * Description: A go-to solution for serving ads in WordPress
 * Version: 1.0
 * Author: Clark McAdoo
 * Author URI: https://gsandf.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-atl-adserve
 * Domain Path: /languages
 */

include __DIR__ . '/ad.php';
include __DIR__ . '/zones.php';
include __DIR__ . '/atl_ad_shortcode.php';
include __DIR__ . '/functions.php';

/* 
 * TODOs:
 * How to create custom meta boxes in WP
 * Proper escaping of all output
 * (specifically user URL inputs)
 * Lookup escaping and sanatization
 * <?php shortcode_atts( $pairs, $atts, $shortcode ); ?> Defaults set for attributes
 */