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

/**
 * Footer Customizer
 */
function nqa_footer_customizer($wp_customize) {
    
    // Main Footer Panel
    $wp_customize->add_panel('footer_panel', array(
        'title'    => __('Footer Settings', 'nqa'),
        'priority' => 35,
    ));
    
    // --- About Section ---
    $wp_customize->add_section('footer_about_section', array(
        'title'       => __('About Section', 'nqa'),
        'description' => __('Configure the about/logo section of the footer including logo, description, and button.', 'nqa'),
        'panel'       => 'footer_panel',
        'priority'    => 10,
    ));
    
    $wp_customize->add_setting('footer_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'       => __('Footer Logo', 'nqa'),
        'section'     => 'footer_about_section',
        'description' => __('Upload footer logo', 'nqa'),
    )));
    
    $wp_customize->add_setting('footer_description', array(
        'default'           => 'ইসলামী জ্ঞান অর্জনের অনলাইনভিত্তিক অনন্য একটি শিক্ষা প্রতিষ্ঠান।',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('footer_description', array(
        'label'   => __('Footer Description', 'nqa'),
        'section' => 'footer_about_section',
        'type'    => 'textarea',
    ));
    
    $wp_customize->add_setting('footer_button_text', array(
        'default'           => 'লগ ইন/ সাইন আপ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_button_text', array(
        'label'   => __('Button Text', 'nqa'),
        'section' => 'footer_about_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_button_url', array(
        'default'           => '#login',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_button_url', array(
        'label'   => __('Button URL', 'nqa'),
        'section' => 'footer_about_section',
        'type'    => 'url',
    ));
    
    // --- Contact Section ---
    $wp_customize->add_section('footer_contact_section', array(
        'title'       => __('Contact Section', 'nqa'),
        'description' => __('Configure contact information including title, labels, address, phone, email, and complaint box.', 'nqa'),
        'panel'       => 'footer_panel',
        'priority'    => 20,
    ));
    
    $wp_customize->add_setting('footer_contact_title', array(
        'default'           => 'যোগাযোগ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_contact_title', array(
        'label'       => __('Contact Section Title', 'nqa'),
        'section'     => 'footer_contact_section',
        'type'        => 'text',
        'description' => __('Main heading for the contact section', 'nqa'),
    ));
    
    $wp_customize->add_setting('footer_address_label', array(
        'default'           => 'ঠিকানা:',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_address_label', array(
        'label'   => __('Address Label', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_address', array(
        'default'           => 'বসিলা, মুহাম্মদপুর, ঢাকা।',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_address', array(
        'label'   => __('Address', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_phone_label', array(
        'default'           => 'ফোন নং:',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_phone_label', array(
        'label'   => __('Phone Label', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_phone', array(
        'default'           => '+8801700946569',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_phone', array(
        'label'   => __('Phone Number', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_email_label', array(
        'default'           => 'ইমেইল:',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_email_label', array(
        'label'   => __('Email Label', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_email', array(
        'default'           => 'nurulquran887@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('footer_email', array(
        'label'   => __('Email', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'email',
    ));
    
    $wp_customize->add_setting('footer_complaint_text', array(
        'default'           => 'অভিযোগ বাক্স',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_complaint_text', array(
        'label'   => __('Complaint Box Text', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('footer_complaint_url', array(
        'default'           => '#complaints',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_complaint_url', array(
        'label'   => __('Complaint Box URL', 'nqa'),
        'section' => 'footer_contact_section',
        'type'    => 'url',
    ));
    
    // --- Social Media Section ---
    $wp_customize->add_section('footer_social_section', array(
        'title'       => __('Social Media', 'nqa'),
        'description' => __('Add your social media profile links.', 'nqa'),
        'panel'       => 'footer_panel',
        'priority'    => 30,
    ));
    
    $wp_customize->add_setting('footer_facebook', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_facebook', array(
        'label'   => __('Facebook URL', 'nqa'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));
    
    $wp_customize->add_setting('footer_whatsapp', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_whatsapp', array(
        'label'   => __('WhatsApp URL', 'nqa'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));
    
    $wp_customize->add_setting('footer_linkedin', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_linkedin', array(
        'label'   => __('LinkedIn URL', 'nqa'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));
    
    $wp_customize->add_setting('footer_youtube', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_youtube', array(
        'label'   => __('YouTube URL', 'nqa'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));
    
    // --- Styling Section ---
    $wp_customize->add_section('footer_styling_section', array(
        'title'       => __('Footer Styling', 'nqa'),
        'description' => __('Customize footer appearance and colors.', 'nqa'),
        'panel'       => 'footer_panel',
        'priority'    => 40,
    ));
    
    $wp_customize->add_setting('footer_bg_color', array(
        'default'           => '#f8f5ec',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
        'label'   => __('Footer Background Color', 'nqa'),
        'section' => 'footer_styling_section',
    )));

    // Footer Bottom Image
    $wp_customize->add_setting('show_footer_bottom_image', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    $wp_customize->add_control('show_footer_bottom_image', array(
        'label'   => __('Show Footer Bottom Image', 'nqa'),
        'section' => 'footer_styling_section',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('footer_bottom_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_bottom_image', array(
        'label'       => __('Footer Bottom Background Image', 'nqa'),
        'description' => __('Upload decorative background image for footer bottom section', 'nqa'),
        'section'     => 'footer_styling_section',
    )));
}
add_action('customize_register', 'nqa_footer_customizer');

/**
 * Testimonial Customizer 
 */
function nqa_testimonial_customizer($wp_customize){
	$wp_customize->add_section('nqa_testimonials_section', array(
		'title' => 'Testimonials Section',
		'priority' => 35
	));

    // Show/Hide Testimonial
	$wp_customize->add_setting('nqa_testimonial_section_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_testimonial_section_display', array(
		'label' => 'Show Testimonial Section',
		'section' => 'nqa_testimonials_section',
		'type' => 'checkbox',
	));

	// Heading
	$wp_customize->add_setting('nqa_testimonial_heading', array(
        'default' => 'বিজ্ঞজন আমাদের কাজের <span class="text-gradient bg-clip-text text-transparent">প্রশংসা করেছেন !!</span>',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));

	$wp_customize->add_control('nqa_testimonial_heading', array(
		'label' => 'Section Heading',
        'description' => 'For gradient effect, use: &lt;span class=&quot;text-gradient bg-clip-text text-transparent&quot;&gt;text&lt;/span&gt;',
        'section' => 'nqa_testimonials_section',
        'type' => 'textarea',
	));

	// Description
	$wp_customize->add_setting('nqa_testimonial_description', array(
        'default' => 'আলহামদুলিল্লাহ, নুরুল কোরআন অ্যাকাডেমি ইমসলামের বর্তা সহীহভাবে পৌঁছে দেয়ার জন্য যা করছে তা খুবই প্রশংসনীয়, এবং এই ডিজিটাল যুগে আমাদেরকে ইসলামকে মানুষের কাছে পৌঁছাতে হবে ডিজিটালভাবে, যা এই প্রতিষ্ঠান সফলতার সাথে করে আসছে।',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));

	$wp_customize->add_control('nqa_testimonial_description', array(
		'label' => 'Description',
        'description' => '',
        'section' => 'nqa_testimonials_section',
        'type' => 'textarea',
	));

	// Video Thumbnail
    $wp_customize->add_setting('nqa_testimonial_video_image', array(
        'default' => get_template_directory_uri() . '/assets/images/testimonial-1.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_testimonial_video_image', 
        array(
            'label' => 'Video Thumbnail',
            'section' => 'nqa_testimonials_section',
        )
    ));
    
    // Video URL
    $wp_customize->add_setting('nqa_testimonial_video_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('nqa_testimonial_video_url', array(
        'label' => 'Video URL',
        'description' => 'YouTube or video file URL',
        'section' => 'nqa_testimonials_section',
        'type' => 'url',
    ));
    
    // Author Image
    $wp_customize->add_setting('nqa_testimonial_author_image', array(
        'default' => get_template_directory_uri() . '/assets/images/ahmudullah.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_testimonial_author_image', 
        array(
            'label' => 'Author Image',
            'section' => 'nqa_testimonials_section',
        )
    ));
    
    // Author Name
    $wp_customize->add_setting('nqa_testimonial_author_name', array(
        'default' => 'শায়খ আহমাদুল্লাহ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('nqa_testimonial_author_name', array(
        'label' => 'Author Name',
        'section' => 'nqa_testimonials_section',
        'type' => 'text',
    ));
    
    // Author Title
    $wp_customize->add_setting('nqa_testimonial_author_title', array(
        'default' => 'চেয়ারম্যান, আস-সুন্নাহ ফাউন্ডেশন',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('nqa_testimonial_author_title', array(
        'label' => 'Author Title',
        'section' => 'nqa_testimonials_section',
        'type' => 'text',
    ));

	// Background Color
	$wp_customize->add_setting('nqa_testimonial_bg_color', array(
		'default' => '#f8fffc',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 
        'nqa_testimonial_bg_color', 
        array(
            'label' => 'Background Color',
            'section' => 'nqa_testimonials_section',
        )
    ));
}
add_action('customize_register', 'nqa_testimonial_customizer');

/**
 * Admission Banner Customizer
 */
function nqa_admission_banner_customizer($wp_customize){
	// Admission Banner Section
	$wp_customize->add_section('nqa_admission_banner_section', array(
		'title' => 'Admission Banner',
		'priority' => 36,
	));

	// Show/Hide Banner
	$wp_customize->add_setting('nqa_admission_banner_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_admission_banner_display', array(
		'label' => 'Show Admission Banner',
		'section' => 'nqa_admission_banner_section',
		'type' => 'checkbox',
	));

	// Banner Title Line 1
	$wp_customize->add_setting('nqa_admission_banner_title_line1', array(
		'default' => 'ছোটদের কোরআন শিক্ষা কোর্সে',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_admission_banner_title_line1', array(
		'label' => 'Title Line 1',
		'section' => 'nqa_admission_banner_section',
		'type' => 'text',
	));

	// Banner Title Line 2
	$wp_customize->add_setting('nqa_admission_banner_title_line2', array(
		'default' => 'ভর্তি চলছে!',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_admission_banner_title_line2', array(
		'label' => 'Title Line 2',
		'section' => 'nqa_admission_banner_section',
		'type' => 'text',
	));

	// Button Text
	$wp_customize->add_setting('nqa_admission_banner_button_text', array(
		'default' => 'ক্লিক করুন',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_admission_banner_button_text', array(
		'label' => 'Button Text',
		'section' => 'nqa_admission_banner_section',
		'type' => 'text',
	));

	// Button Link
	$wp_customize->add_setting('nqa_admission_banner_button_link', array(
		'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control('nqa_admission_banner_button_link', array(
		'label' => 'Button Link',
		'section' => 'nqa_admission_banner_section',
		'type' => 'url',
	));

	// Background Color
	$wp_customize->add_setting('nqa_admission_banner_bg_color', array(
		'default' => '#9b1b40',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 
        'nqa_admission_banner_bg_color', 
        array(
            'label' => 'Background Color',
            'section' => 'nqa_admission_banner_section',
        )
    ));
}
add_action('customize_register', 'nqa_admission_banner_customizer');

/**
 * Feedback Customizer
 */
function nqa_feedback_customizer($wp_customize) {
    $wp_customize->add_section('nqa_feedbacks_section', array(
        'title' => 'Feedbacks Section',
        'priority' => 37,
    ));

    // Show/Hide Feedback
	$wp_customize->add_setting('nqa_feedback_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_feedback_display', array(
		'label' => 'Show Feedback Section',
		'section' => 'nqa_feedbacks_section',
		'type' => 'checkbox',
	));
    
    // Heading with HTML support
    $wp_customize->add_setting('nqa_feedback_heading', array(
        'default' => 'আমাদের <span class="text-gradient bg-clip-text text-transparent">শিক্ষার্থীরা</span> কি বলছেন',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));
    
    $wp_customize->add_control('nqa_feedback_heading', array(
        'label' => 'Section Heading',
        'description' => 'For gradient effect, use: &lt;span class=&quot;text-gradient bg-clip-text text-transparent&quot;&gt;text&lt;/span&gt;',
        'section' => 'nqa_feedbacks_section',
        'type' => 'textarea',
    ));

	// Background Image
	$wp_customize->add_setting('nqa_feedback_bg_image', array(
		'default' => get_template_directory_uri() . '/assets/images/testimonial-bg.png',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_feedback_bg_image', 
        array(
            'label' => 'Background Image',
            'section' => 'nqa_feedbacks_section',
            'settings' => 'nqa_feedback_bg_image',
        )
    ));

    // Feedbacks per page
    $wp_customize->add_setting('nqa_feedback_per_page', array(
        'default' => 6,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nqa_feedback_per_page', array(
        'label' => 'Number of Feedbacks to Display',
        'section' => 'nqa_feedbacks_section',
        'type' => 'select',
        'choices' => array(
            '3' => '3 Feedbacks',
            '4' => '4 Feedbacks',
            '5' => '5 Feedbacks',
            '6' => '6 Feedbacks',
        ),
    ));
}
add_action('customize_register', 'nqa_feedback_customizer');

/**
 * Teacher Customizer
 */
function nqa_teacher_customize( $wp_customize ) {

    // Panel or Section
    $wp_customize->add_section( 'nqa_teacher_section', array(
        'title'       => __( 'Teacher Section', 'nqa' ),
        'description' => __( 'Customize the teacher section on homepage.', 'nqa' ),
        'priority'    => 38,
    ) );

    // Show/Hide Teacher
	$wp_customize->add_setting('nqa_teacher_section_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_teacher_section_display', array(
		'label' => 'Show Teacher Section',
		'section' => 'nqa_teacher_section',
		'type' => 'checkbox',
	));

    // Heading text
    $wp_customize->add_setting('nqa_teacher_heading', array(
        'default' => 'আমাদের <span class="text-gradient bg-clip-text text-transparent">অভিজ্ঞ</span> শিক্ষকবৃন্দ',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));

	$wp_customize->add_control('nqa_teacher_heading', array(
		'label' => 'Section Heading',
        'description' => 'For gradient effect, use: &lt;span class=&quot;text-gradient bg-clip-text text-transparent&quot;&gt;text&lt;/span&gt;',
        'section' => 'nqa_teacher_section',
        'type' => 'textarea',
	));

    // Background color
    $wp_customize->add_setting( 'nqa_teacher_bg_color', array(
        'default'           => '#fffcf8',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'nqa_teacher_bg_color',
        array(
            'label'    => __( 'Background Color', 'nqa' ),
            'section'  => 'nqa_teacher_section',
            'settings' => 'nqa_teacher_bg_color',
        )
    ) );

    // Background image
    $wp_customize->add_setting( 'nqa_teacher_bg_image', array(
        'default'           => get_template_directory_uri() . '/assets/images/testimonial-bg.png',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'nqa_teacher_bg_image',
        array(
            'label'    => __( 'Background Image', 'nqa' ),
            'section'  => 'nqa_teacher_section',
            'settings' => 'nqa_teacher_bg_image',
        )
    ) );

    // Teachers per page
    $wp_customize->add_setting('nqa_teacher_per_page', array(
        'default' => 6,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nqa_teacher_per_page', array(
        'label' => 'Number of Teachers to Display',
        'section' => 'nqa_teacher_section',
        'type' => 'select',
        'choices' => array(
            '3' => '3 Teachers',
            '4' => '4 Teachers',
            '5' => '5 Teachers',
            '6' => '6 Teachers',
        ),
    ));
}
add_action( 'customize_register', 'nqa_teacher_customize' );

/**
 * Leaning Path Customizer
 */ 
function nqa_learning_path_customizer($wp_customize) {
    $wp_customize->add_section('learning_path_section', array(
        'title' => 'Learning Path Section',
        'priority' => 39,
    ));

    // Show/Hide Feedback
	$wp_customize->add_setting('nqa_learning_path_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_learning_path_display', array(
		'label' => 'Show Learning Path Section',
		'section' => 'learning_path_section',
		'type' => 'checkbox',
	));
    
    // Section Title
    $wp_customize->add_setting('learning_path_title', array(
        'default' => 'পর্যাক্রমে শিখুন আর এগিয়ে চলুন',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('learning_path_title', array(
        'label' => 'Section Title',
        'section' => 'learning_path_section',
        'type' => 'text',
    ));
    
    // Background Color 1 (Start)
    $wp_customize->add_setting('learning_path_bg_color1', array(
        'default' => '#250210',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 
        'learning_path_bg_color1',
        array(
            'label' => 'Background Color 1 (Start)',
            'section' => 'learning_path_section',
        )
    ));
    
    // Background Color 2 (End)
    $wp_customize->add_setting('learning_path_bg_color2', array(
        'default' => '#9e2447',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 
        'learning_path_bg_color2',
        array(
            'label' => 'Background Color 2 (End)',
            'section' => 'learning_path_section',
        )
    ));
    
    // Background Image
    $wp_customize->add_setting('learning_path_bg_image', array(
        'default' => get_template_directory_uri() . '/assets/images/bg-3.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'learning_path_bg_image', 
        array(
            'label' => 'Background Image',
            'section' => 'learning_path_section',
        )
    ));
}
add_action('customize_register', 'nqa_learning_path_customizer');

/**
 * Feature Customizer
 */
function nqa_feature_customizer($wp_customize) {
    $wp_customize->add_section('nqa_feature_section', array(
        'title' => 'Features Section',
        'priority' => 40,
    ));

    // Show/Hide Feature
	$wp_customize->add_setting('nqa_feature_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_feature_display', array(
		'label' => 'Show Feature Section',
		'section' => 'nqa_feature_section',
		'type' => 'checkbox',
	));
    
    // Heading with HTML support
    $wp_customize->add_setting('nqa_feature_heading', array(
        'default' => 'নূরুল কুরআন একাডেমিতে <br/> <span class="text-gradient bg-clip-text text-transparent">আপনি যা পাচ্ছেন</span>',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));
    
    $wp_customize->add_control('nqa_feature_heading', array(
        'label' => 'Section Heading',
        'description' => 'For gradient effect, use: &lt;span class=&quot;text-gradient bg-clip-text text-transparent&quot;&gt;text&lt;/span&gt;',
        'section' => 'nqa_feature_section',
        'type' => 'textarea',
    ));

    // Feature Image
    $wp_customize->add_setting('nqa_feature_image', array(
        'default' => get_template_directory_uri() . '/assets/images/feature-frame-1.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_feature_image',
        array(
            'label' => 'Feature Image',
            'section' => 'nqa_feature_section',
        )
    ));
}
add_action('customize_register', 'nqa_feature_customizer');

/**
 * Blog Customizer
 */
function nqa_blog_customizer($wp_customize) {
    $wp_customize->add_section('nqa_blog_section', array(
        'title' => 'Blogs Section',
        'priority' => 40,
    ));

    // Show/Hide Blog
	$wp_customize->add_setting('nqa_blog_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_blog_display', array(
		'label' => 'Show Blog Section',
		'section' => 'nqa_blog_section',
		'type' => 'checkbox',
	));
    
    // Heading with HTML support
    $wp_customize->add_setting('nqa_blog_heading', array(
        'default' => 'পছন্দের <span class="text-gradient bg-clip-text text-transparent">ব্লগ</span> পড়ুন',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));
    
    $wp_customize->add_control('nqa_blog_heading', array(
        'label' => 'Section Heading',
        'description' => 'For gradient effect, use: &lt;span class=&quot;text-gradient bg-clip-text text-transparent&quot;&gt;text&lt;/span&gt;',
        'section' => 'nqa_blog_section',
        'type' => 'textarea',
    ));

    // Background Image
    $wp_customize->add_setting('nqa_blog_bg_image', array(
        'default' => get_template_directory_uri() . '/assets/images/testimonial-bg.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_blog_bg_image',
        array(
            'label' => 'Background Image',
            'section' => 'nqa_blog_section',
        )
    ));

    // Posts per page
    $wp_customize->add_setting('nqa_blog_posts_per_page', array(
        'default' => 6,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nqa_blog_posts_per_page', array(
        'label' => 'Number of Posts to Display',
        'section' => 'nqa_blog_section',
        'type' => 'select',
        'choices' => array(
            '3' => '3 Posts',
            '4' => '4 Posts',
            '5' => '5 Posts',
            '6' => '6 Posts',
        ),
    ));
}
add_action('customize_register', 'nqa_blog_customizer');

/**
 * Offer CTA Customizer
 */
function nqa_offer_cta_customizer($wp_customize){
	// Offer CTA Section
	$wp_customize->add_section('nqa_offer_cta_section', array(
		'title' => 'Offer CTA',
		'priority' => 40,
	));

	// Show/Hide Offer CTA
	$wp_customize->add_setting('nqa_offer_cta_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_offer_cta_display', array(
		'label' => 'Show Offer CTA',
		'section' => 'nqa_offer_cta_section',
		'type' => 'checkbox',
	));

	// Offer CTA Title
	$wp_customize->add_setting('nqa_offer_cta_title', array(
		'default' => 'ইসলামী জ্ঞান অর্জনের মাধ্যমে আলোকিত করুন নিজের ভবিষ্যৎ',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_offer_cta_title', array(
		'label' => 'Offer CTA Title',
		'section' => 'nqa_offer_cta_section',
		'type' => 'text',
	));

	// Button Text
	$wp_customize->add_setting('nqa_offer_cta_button_text', array(
		'default' => 'শেখা শুরু করুন',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_offer_cta_button_text', array(
		'label' => 'Button Text',
		'section' => 'nqa_offer_cta_section',
		'type' => 'text',
	));

	// Button Link
	$wp_customize->add_setting('nqa_offer_cta_button_link', array(
		'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control('nqa_offer_cta_button_link', array(
		'label' => 'Button Link',
		'section' => 'nqa_offer_cta_section',
		'type' => 'url',
	));

	// Background Color
	$wp_customize->add_setting('nqa_offer_cta_bg_color', array(
		'default' => '#fefefe',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 
        'nqa_offer_cta_bg_color', 
        array(
            'label' => 'Background Color',
            'section' => 'nqa_offer_cta_section',
        )
    ));

    // Background Image
    $wp_customize->add_setting('nqa_offer_cta_bg_image', array(
        'default' => get_template_directory_uri() . '/assets/images/cta-02.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_offer_cta_bg_image',
        array(
            'label' => 'Background Image',
            'section' => 'nqa_offer_cta_section',
        )
    ));

    // Offer CTA Image
    $wp_customize->add_setting('nqa_offer_cta_mage', array(
        'default' => get_template_directory_uri() . '/assets/images/cta-01.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_offer_cta_mage',
        array(
            'label' => 'Offer CTA Image',
            'section' => 'nqa_offer_cta_section',
        )
    ));
}
add_action('customize_register', 'nqa_offer_cta_customizer');

/**
 * FAQ Customizer
 */
function nqa_faq_customizer($wp_customize) {
    $wp_customize->add_section('nqa_faqs_section', array(
        'title' => 'FAQs Section',
        'priority' => 41,
    ));

    // Show/Hide FAQ
	$wp_customize->add_setting('nqa_faq_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_faq_display', array(
		'label' => 'Show FAQ Section',
		'section' => 'nqa_faqs_section',
		'type' => 'checkbox',
	));
    
    // Heading with HTML support
    $wp_customize->add_setting('nqa_faq_heading', array(
        'default' => '<span class="text-gradient bg-clip-text text-transparent">প্রশ্নোত্তর</span> সবাই জানতে চান',
        'sanitize_callback' => 'wp_kses_post', // Allows safe HTML
    ));
    
    $wp_customize->add_control('nqa_faq_heading', array(
        'label' => 'Section Heading',
        'description' => 'For gradient effect, use: &lt;span class=&quot;text-gradient bg-clip-text text-transparent&quot;&gt;text&lt;/span&gt;',
        'section' => 'nqa_faqs_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'nqa_faq_customizer');

/**
 * Tutorial CTA Customizer
 */
function nqa_tutorial_cta_customizer($wp_customize){
	// Tutorial CTA Section
	$wp_customize->add_section('nqa_tutorial_cta_section', array(
		'title' => 'Tutorial CTA',
		'priority' => 40,
	));

	// Show/Hide Tutorial
	$wp_customize->add_setting('nqa_tutorial_cta_display', array(
		'default' => true,
		'sanitize_callback' => 'rest_sanitize_boolean',
	));

	$wp_customize->add_control('nqa_tutorial_cta_display', array(
		'label' => 'Show Tutorial CTA',
		'section' => 'nqa_tutorial_cta_section',
		'type' => 'checkbox',
	));

	// Tutorial CTA Title
	$wp_customize->add_setting('nqa_tutorial_cta_title', array(
		'default' => 'কীভাবে login করতে হবে জানুন',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_tutorial_cta_title', array(
		'label' => 'Tutorial CTA Title',
		'section' => 'nqa_tutorial_cta_section',
		'type' => 'text',
	));

	// Button Text
	$wp_customize->add_setting('nqa_tutorial_cta_button_text', array(
		'default' => 'ক্লিক করুন',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('nqa_tutorial_cta_button_text', array(
		'label' => 'Button Text',
		'section' => 'nqa_tutorial_cta_section',
		'type' => 'text',
	));

	// Button Link
	$wp_customize->add_setting('nqa_tutorial_cta_button_link', array(
		'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control('nqa_tutorial_cta_button_link', array(
		'label' => 'Button Link',
		'section' => 'nqa_tutorial_cta_section',
		'type' => 'url',
	));

    // Background Image
    $wp_customize->add_setting('nqa_tutorial_cta_bg_image', array(
        'default' => get_template_directory_uri() . '/assets/images/tutorial.svg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'nqa_tutorial_cta_bg_image',
        array(
            'label' => 'Background Image',
            'section' => 'nqa_tutorial_cta_section',
        )
    ));
}
add_action('customize_register', 'nqa_tutorial_cta_customizer');
