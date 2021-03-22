<?php 

function plugin_options() {

    $options = [];
    $options[ 'name' ] = 'Chris Lee';
    $options[ 'location' ] = 'Vancouver, BC';
    $options[ 'Job' ] = 'Web Developer';

    if( !get_option( 'plugin_option_1' ) ){
        add_option( 'plugin_option_1', $options );
    }

    update_option( 'plugin_option_1', $options );


}
add_action( 'admin_init', 'plugin_options' );