<?php 

function plugin_options() {

    if( !get_option( 'plugin_option' ) ){
        add_option( 'plugin_option', 'My New Plugin Options' );
    }

    update_option( 'plugin_option', 'My Updated Plugin Options 1' );

    if( !get_option( 'plugin_option_name' ) ){
        add_option( 'plugin_option_name', 'Chris' );
    }

    update_option( 'plugin_option_name', 'Chris' );


}
add_action( 'admin_init', 'plugin_options' );