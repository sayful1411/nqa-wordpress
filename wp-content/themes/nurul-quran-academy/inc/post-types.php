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

