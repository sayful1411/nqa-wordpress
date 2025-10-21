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
