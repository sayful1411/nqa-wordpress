<?php
/**
 * Nurul Quran Custom Post Types
 *
 * @package Nurul_Quran
 */

 // Feedback Custom Post Type
function nqa_feedback_cpt() {
    register_post_type('feedback', array(
        'labels' => array(
            'name' => __('Feedbacks', 'nqa'),
            'singular_name' => __('Feedback', 'nqa'),
            'add_new'       => __( 'Add New Feedback', 'nqa' ),
            'add_new_item'       => __( 'Add New Feedback', 'nqa' ),
            'edit_item'          => __( 'Edit Feedback', 'nqa' ),
            'search_items'       => __( 'Search Feedbacks', 'nqa' ),
            'not_found'          => __( 'No feedback found', 'nqa' ),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));
}
add_action('init', 'nqa_feedback_cpt');

// Teachers Custom Post Type
function nqa_teachers_cpt() {
    $labels = array(
        'name'               => __( 'Teachers', 'nqa' ),
        'singular_name'      => __( 'Teacher', 'nqa' ),
        'add_new'            => __( 'Add New Teacher', 'nqa' ),
        'add_new_item'       => __( 'Add New Teacher', 'nqa' ),
        'edit_item'          => __( 'Edit Teacher', 'nqa' ),
        'new_item'           => __( 'New Teacher', 'nqa' ),
        'view_item'          => __( 'View Teacher', 'nqa' ),
        'search_items'       => __( 'Search Teachers', 'nqa' ),
        'not_found'          => __( 'No teachers found', 'nqa' ),
        'menu_name'          => __( 'Teachers', 'nqa' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'thumbnail' ),
        'has_archive'        => false,
        'rewrite'            => array( 'slug' => 'teacher' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'teacher', $args );
}
add_action( 'init', 'nqa_teachers_cpt' );