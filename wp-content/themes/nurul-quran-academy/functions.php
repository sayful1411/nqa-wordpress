<?php
/**
 * nurul quran academy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nurul_quran_academy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme setup and configuration
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Scripts and styles enqueuing
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Custom Walker
 */
require get_template_directory() . '/inc/dropdown-walker.php';
require get_template_directory() . '/inc/mobile-menu-walker.php';

/**
 * ACF Setup 
 */
require get_template_directory() . '/inc/acf-fields.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Dynamic Menu Title
function nqa_get_menu_name( $theme_location, $fallback = '' ) {
    $locations = get_nav_menu_locations();
    
    if ( ! isset( $locations[ $theme_location ] ) ) {
        return $fallback;
    }
    
    $menu_object = wp_get_nav_menu_object( $locations[ $theme_location ] );
    
    return $menu_object ? $menu_object->name : $fallback;
}


/**
 * Include the TGM Plugin Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Register required and recommended plugins for this theme.
 */
add_action( 'tgmpa_register', 'nqa_register_required_plugins' );

function nqa_register_required_plugins() {

    $plugins = [
        [
            'name'     => 'Advanced Custom Fields',
            'slug'     => 'advanced-custom-fields',
            'required' => true,
        ],
        [
            'name'     => 'SVG Support',
            'slug'     => 'svg-support',
            'required' => false,
        ],
        [
            'name'     => 'Classic Editor',
            'slug'     => 'classic-editor',
            'required' => false,
        ],
    ];

    $config = [
        'id'           => 'nqa', // Unique ID for hashing notices.
        'default_path' => '',        // Leave empty to pull from WP.org
        'menu'         => 'tgmpa-install-plugins', // Admin menu slug
        'has_notices'  => true,      // Show admin notices
        'dismissable'  => true,      // Allow user to dismiss notice
        'dismiss_msg'  => '',        // Optional message before the plugins table
        'is_automatic' => false,     // Automatically activate after install?
        'message'      => '<p>This theme requires or recommends the following plugins to work properly.</p>',
    ];

    tgmpa( $plugins, $config );
}
