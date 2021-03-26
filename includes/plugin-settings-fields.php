<?php 

function plugin_settings() {

    if( !get_option( 'wpcfmypage_settings')){
        add_option( 'wpcfmypage_settings' );
    }

    add_settings_section(
        'wpcfmypage_settings_section',
        __( 'Plugin Settings Section', 'wpcfmypage'),
        'wpcfmypage_settings_section_callback',
        'wpcfmypage'
    );

    add_settings_field(
        'wpcfmypage_settings_column_name',
        __( 'Tab Label', 'wpcfmypage'),
        'wpcfmypage_settings_custom_text_callback',
        'wpcfmypage',
        'wpcfmypage_settings_section'
    );

    add_settings_field(
        'wpcfmypage_settings_column_description',
        __( 'Tab Description', 'wpcfmypage' ),
        'wpcfmypage_settings_textarea_callback',
        'wpcfmypage',
        'wpcfmypage_settings_section'
    );

    register_setting(
        'wpcfmypage_settings',
        'wpcfmypage_settings'
    );

}

add_action( 'admin_init', 'plugin_settings' );

function wpcfmypage_settings_section_callback() {

    esc_html_e('Plugin settings section description', 'wpcfmypage');

}

function wpcfmypage_settings_custom_text_callback(){
    
    $options = get_option( 'wpcfmypage_settings' );

    $tab_label = '';
    if( isset( $options[ 'tab_label' ])){
        $tab_label = esc_html( $options['tab_label']);
    }

    echo '<input type="text" id="wpcfmypage_tab_label" name="wpcfmypage_settings[tab_label]" value="' . $tab_label . '" />';

}

function wpcfmypage_settings_textarea_callback() {

    $options = get_option( 'wpcfmypage_settings' );

    $tab_description = '';
    if( isset( $options[ 'tab_description' ])){
        $tab_description = esc_html( $options[ 'tab_description' ]);
    }

    echo '<textarea id="wpcfmypage_settings_tab_description" name="wpcfmypage_settings[tab_description]" rows="5" cols="80">' . $tab_description . '</textarea>';

}