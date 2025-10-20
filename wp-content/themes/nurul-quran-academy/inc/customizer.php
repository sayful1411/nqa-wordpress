<?php
/**
 * nurul quran academy Theme Customizer
 *
 * @package nurul_quran_academy
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nurul_quran_academy_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'nurul_quran_academy_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'nurul_quran_academy_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'nurul_quran_academy_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function nurul_quran_academy_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function nurul_quran_academy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nurul_quran_academy_customize_preview_js() {
	wp_enqueue_script( 'nurul-quran-academy-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'nurul_quran_academy_customize_preview_js' );

/**
 * Header Customizer
 * @param mixed $wp_customize
 * @return void
 */
function nqa_header_customizer($wp_customize) {
    
    // Main Header Panel
    $wp_customize->add_panel('header_panel', array(
        'title'    => __('Header Settings', 'nqa'),
        'priority' => 30,
    ));
    
    // ========== OFFER BANNER SECTION ==========
    $wp_customize->add_section('header_offer_section', array(
        'title'       => __('Offer Banner', 'nqa'),
        'description' => __('Configure the promotional banner at the top of the header including text, images, and colors.', 'nqa'),
        'panel'       => 'header_panel',
        'priority'    => 10,
    ));

    $wp_customize->add_setting('show_offer_banner', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    $wp_customize->add_control('show_offer_banner', array(
        'label'   => __('Show Offer Banner', 'nqa'),
        'section' => 'header_offer_section',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('offer_text', array(
        'default'           => 'ছোটদের কোরআন শিক্ষা কোর্সে',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('offer_text', array(
        'label'   => __('Offer Text', 'nqa'),
        'section' => 'header_offer_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('offer_left_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'offer_left_image', array(
        'label'   => __('Left Offer Image', 'nqa'),
        'section' => 'header_offer_section',
    )));

    $wp_customize->add_setting('offer_right_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'offer_right_image', array(
        'label'   => __('Right Offer Image', 'nqa'),
        'section' => 'header_offer_section',
    )));

    $wp_customize->add_setting('offer_bg_color', array(
        'default'           => '#9b1b40',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'offer_bg_color', array(
        'label'   => __('Background Color', 'nqa'),
        'section' => 'header_offer_section',
    )));
    
    // ========== MENU & NAVIGATION SECTION ==========
    $wp_customize->add_section('header_menu_section', array(
        'title'       => __('Menu & Navigation', 'nqa'),
        'description' => __('Configure navigation menu items, special offer link, and action buttons.', 'nqa'),
        'panel'       => 'header_panel',
        'priority'    => 20,
    ));
    
    // Special Offer Menu Item
    $wp_customize->add_setting('special_offer', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    $wp_customize->add_control('special_offer', array(
        'label'       => __('Show Special Offer Menu', 'nqa'),
        'section'     => 'header_menu_section',
        'type'        => 'checkbox',
        'description' => __('Display special offer link in navigation', 'nqa'),
    ));

    $wp_customize->add_setting('special_offer_text', array(
        'default'           => 'স্পেশাল অফার',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('special_offer_text', array(
        'label'   => __('Special Offer Text', 'nqa'),
        'section' => 'header_menu_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('special_offer_url', array(
        'default'           => '#special-offer',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('special_offer_url', array(
        'label'   => __('Special Offer URL', 'nqa'),
        'section' => 'header_menu_section',
        'type'    => 'url',
    ));
    
    // ========== ACTION BUTTONS SECTION ==========
    $wp_customize->add_section('header_buttons_section', array(
        'title'       => __('Action Buttons', 'nqa'),
        'description' => __('Configure login and contact buttons in the header.', 'nqa'),
        'panel'       => 'header_panel',
        'priority'    => 30,
    ));
    
    // Login Button
    $wp_customize->add_setting('show_login_button', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('show_login_button', array(
        'label'   => __('Show Login Button', 'nqa'),
        'section' => 'header_buttons_section',
        'type'    => 'checkbox',
    ));
    
    $wp_customize->add_setting('login_button_text', array(
        'default'           => 'লগ ইন',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('login_button_text', array(
        'label'   => __('Login Button Text', 'nqa'),
        'section' => 'header_buttons_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('login_button_url', array(
        'default'           => '#login',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('login_button_url', array(
        'label'   => __('Login Button URL', 'nqa'),
        'section' => 'header_buttons_section',
        'type'    => 'url',
    ));
    
    // Contact Button
    $wp_customize->add_setting('show_contact_button', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('show_contact_button', array(
        'label'   => __('Show Contact Button', 'nqa'),
        'section' => 'header_buttons_section',
        'type'    => 'checkbox',
    ));
    
    $wp_customize->add_setting('contact_button_text', array(
        'default'           => 'যোগাযোগ করুন',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_button_text', array(
        'label'   => __('Contact Button Text', 'nqa'),
        'section' => 'header_buttons_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('contact_button_url', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('contact_button_url', array(
        'label'   => __('Contact Button URL', 'nqa'),
        'section' => 'header_buttons_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'nqa_header_customizer');
