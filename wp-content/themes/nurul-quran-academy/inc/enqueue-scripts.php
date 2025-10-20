<?php
/**
 * Enqueue Scripts and Styles
 *
 * @package Nurul_Quran_Academy
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add code in head
 */
function nqa_preconnect_links() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'nqa_preconnect_links' );

/**
 * Enqueue scripts and styles.
 */
function nurul_quran_academy_scripts() {
	wp_enqueue_style( 'nqa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nqa-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Google Fonts
	wp_enqueue_style('nqa-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@100..900&family=Tiro+Bangla:ital@0;1&display=swap', array(), null);

	// CSS
    wp_enqueue_style("nqa-css", get_template_directory_uri() . '/assets/css/main.css', [], _S_VERSION);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);

    // JS
    wp_enqueue_script('nqa-navigation', get_template_directory_uri() . '/assets/js/navigation.js', [], _S_VERSION, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('gsap-core', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-core'), null, true);
    wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), null, true);
    wp_enqueue_script('nqa-script', get_template_directory_uri() . '/assets/js/main.js', [], _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'nurul_quran_academy_scripts' );
