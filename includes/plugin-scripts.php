<?php 

function plugin_admin_scripts(){

    wp_enqueue_script(
        'plugin-admin',
        ACFMAPUGIN_URL . 'admin/js/plugin-admin.js',
        ['jquery'],
        time()
    );

}

add_action( 'admin_enqueue_scripts', 'plugin_admin_scripts', 100);