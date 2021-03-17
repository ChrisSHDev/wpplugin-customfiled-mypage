<?php
/*
Plugin Name: Add Custom Field My Account Page
Description: Allows users to add cusutom fields to Woocommerce My Account Page
Author: Chris Soohwan Lee
Author URI: https://chrisshdev.github.io
Version: 1.0.0
*/

if( !defined( 'WPINC' )){
    die;
}

function wp_add_custom_field_my_account_admin()
{
    add_menu_page(
        'Plugin Name',
        'Plugin Menu',
        'manage_options',
        'wpcfmypage',
        'wpcfmypage_settings_page_markup',
        'dashicons-wordpress-alt',
        100
    );
}
add_action( 'admin_menu', 'wp_add_custom_field_my_account_admin');

function wpcfmypage_settings_page_markup()
{
    if( !current_user_can('manage_options')){
        return;
    }
    ?>
        <div class="wrap">
            <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
            <p><?php esc_html_e( 'Some Contents', 'wpcfmypage' );  ?></p>
        </div>
    <?php
}