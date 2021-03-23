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
        __( 'Custom Text', 'wpcfmypage'),
        'wpcfmypage_settings_custom_text_callback',
        'wpcfmypage',
        'wpcfmypage_settings_section'
    );

    add_settings_field(
        'wpcfmypage_settings_column_description',
        __( 'Text Area', 'wpcfmypage' ),
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

    $custom_text = '';
    if( isset( $options[ 'custom_text' ])){
        $custom_text = esc_html( $options['custom_text']);
    }

    echo '<input type="text" id="wpcfmypage_customtext" name="wpcfmypage_settings[custom_text]" value="' . $custom_text . '" />';

}

function wpcfmypage_settings_textarea_callback() {

    $options = get_option( 'wpcfmypage_settings' );

    $textarea = '';
    if( isset( $options[ 'textarea' ])){
        $textarea = esc_html( $options[ 'textarea' ]);
    }

    echo '<textarea id="wpcfmypage_settings_textarea" name="wpcfmypage_settings[textarea]" rows="5" cols="50">' . $textarea . '</textarea>';

}