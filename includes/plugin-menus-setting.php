<?php

function wp_add_custom_field_my_account_admin()
{
    add_menu_page(
        'Custom Fields',
        'CUTSOM MENU',
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

    include( ACFMAPUGIN_DIR . 'templates/admin/settings-page.php' );
}

