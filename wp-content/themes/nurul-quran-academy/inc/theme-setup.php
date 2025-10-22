<?php
/**
 * Theme Setup Functions
 *
 * @package Nurul_Quran_Academy
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nurul_quran_academy_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on nurul quran academy, use a find and replace
		* to change 'nurul-quran-academy' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nurul-quran-academy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'nqa'),
			'mobile'  => __('Mobile Menu', 'nurul-quran'),
			'footer-menu-1' => __('Footer Menu 1', 'nurul_quran'),
        	'footer-menu-2' => __('Footer Menu 2', 'nurul_quran'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'nurul_quran_academy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nurul_quran_academy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nurul_quran_academy_content_width', 640 );
}
add_action( 'after_setup_theme', 'nurul_quran_academy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nurul_quran_academy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nurul-quran-academy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nurul-quran-academy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nurul_quran_academy_widgets_init' );

// Create Default Page
function nurul_quran_academy_setup_homepage() {
    $home_title = 'Home';

    // Query for the page titled “Home”
    $query = new WP_Query([
        'post_type'              => 'page',
        'title'                  => $home_title,
        'post_status'            => 'any',       // or 'publish' if you prefer
        'posts_per_page'         => 1,
        'no_found_rows'          => true,
        'ignore_sticky_posts'    => true,
        'update_post_term_cache' => false,
        'update_post_meta_cache' => false,
        'orderby'                => 'ID',
        'order'                  => 'ASC',
    ]);

    if ( $query->have_posts() ) {
        $home_page_id = $query->posts[0]->ID;
    } else {
        $home_page_id = wp_insert_post([
            'post_title'   => $home_title,
            'post_content' => '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ]);
    }

    // Set as front page
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_page_id);

    update_post_meta($home_page_id, '_wp_page_template', 'front-page.php');
}
add_action('after_switch_theme', 'nurul_quran_academy_setup_homepage');

