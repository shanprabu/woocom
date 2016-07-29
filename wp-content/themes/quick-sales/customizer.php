<?php

function quick_sales_customizer($wp_customize)
{

    $wp_customize->add_section('quick_sales_logo_section', array(
        'title' => __('Logo', 'quick-sales'),
        'priority' => 30
    ));

    $wp_customize->add_setting('quick_sales_logo', array(
        'sanitize_callback' => 'esc_url_raw',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' => __('Upload a logo', 'quick-sales'),
        'section' => 'quick_sales_logo_section',
        'settings' => 'quick_sales_logo'
    )));


    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer', 'quick-sales'),
        'priority' => 80
    ));

    $wp_customize->add_setting('quick_sales_text_in_footer', array(
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control('quick_sales_text_in_footer', array(
        'label' => __('Add text to the footer', 'quick-sales'),
        'section' => 'footer_section',
        'type' => 'text'
    ));

    $wp_customize->add_setting('quick_sales_header-color', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_header-color', array(
        'label' => __('Header Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_header-color'
    )));

    $wp_customize->add_setting('quick_sales_footer-color', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_footer-color', array(
        'label' => __('Footer Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_footer-color'
    )));

    $wp_customize->add_setting('quick_sales_logo-color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_logo-color', array(
        'label' => __('Logo Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_logo-color'
    )));

    $wp_customize->add_setting('quick_sales_link-color', array(
        'default' => '#f38a0a',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_link-color', array(
        'label' => __('Link Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_link-color'
    )));

    $wp_customize->add_setting('quick_sales_menu-color', array(
        'default' => '#30281A',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_menu-color', array(
        'label' => __('Menu Font Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_menu-color'
    )));

    $wp_customize->add_setting('quick_sales_font-color', array(
        'default' => '#30281A',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_font-color', array(
        'label' => __('Text Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_font-color'
    )));

    $wp_customize->add_setting('quick_sales_button-color', array(
        'default' => '#f38a0a',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_button-color', array(
        'label' => __('Button Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_button-color'
    )));

    $wp_customize->add_setting('quick_sales_pointer-color', array(
        'default' => '#f38a0a',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quick_sales_pointer-color', array(
        'label' => __('Pointer Color', 'quick-sales'),
        'section' => 'colors',
        'settings' => 'quick_sales_pointer-color'
    )));
}

add_action('customize_register', 'quick_sales_customizer');

?>
