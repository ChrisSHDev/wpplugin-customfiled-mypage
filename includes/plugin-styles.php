<?php

function plugin_admin_styles($hook){

    wp_register_style(
        'plugin-admin', 
        ACFMAPUGIN_URL . 'admin/css/plugin-admin-style.css',
        [],
        time()
    );

    if( 'toplevel_page_wpcfmypage' == $hook ){
        wp_enqueue_style( 'plugin-admin' );
    }

}
add_action( 'admin_enqueue_scripts', 'plugin_admin_styles');

function plugin_frontend_styles() {

    wp_enqueue_style(
        'plugin-frontend',
        ACFMAPUGIN_URL . 'frontend/css/plugin-frontend-style.css',
        [],
        time()
    );
}
add_action( 'wp_enqueue_scripts', 'plugin_frontend_styles', 100);