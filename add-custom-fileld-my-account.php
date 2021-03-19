<?php
/*
Plugin Name: Add Custom Field My Account Page
Description: Allows users to add cusutom fields to Woocommerce My Account Page
Author: Chris Soohwan Lee
Author URI: https://chrisshdev.github.io
Version: 1.0.1
*/

if( !defined( 'WPINC' )){
    die;
}

define( 'ACFMAPUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'ACFMAPUGIN_DIR', plugin_dir_path( __FILE__ ));

include( plugin_dir_path( __FILE__ ) . 'includes/plugin-styles.php');

include( plugin_dir_path( __FILE__ ) . 'includes/plugin-menus-setting.php');

include( plugin_dir_path( __FILE__ ) . 'includes/plugin-options.php');

function myplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpcfmypage">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
    return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );

add_filter($filter_name, 'myplugin_add_settings_link');