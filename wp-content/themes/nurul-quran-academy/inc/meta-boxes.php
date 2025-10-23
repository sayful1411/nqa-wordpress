<?php
/**
 * Nurul Quran Custom Meta Box
 *
 * @package Nurul_Quran
 */

 // ===== Teacher Meta Box =====

function teacher_meta_box() {
    add_meta_box(
        'teacher_meta',
        __('Teacher Details', 'nqa'),
        'teacher_meta_callback',
        'teacher',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'teacher_meta_box' );

function teacher_meta_callback( $post ) {
    wp_nonce_field('nqa_save_teacher_meta', 'nqa_teacher_meta_nonce');

    $designation = get_post_meta( $post->ID, '_teacher_designation', true );
    $description = get_post_meta( $post->ID, '_teacher_description', true );
    ?>
    <p>
        <label><strong>Designation (পদবী):</strong></label><br>
        <input type="text" name="teacher_designation" style="width: 100%;" value="<?php echo esc_attr( $designation ); ?>" placeholder="e.g., কুরআন শরীফ শিক্ষক" required>
    </p>
    <p>
        <label><strong>Description (বিবরণ):</strong></label><br>
        <textarea name="teacher_description" rows="3" style="width: 100%;" placeholder="e.g., ২০ বছরের অভিজ্ঞতাসম্পন্ন হাফেজ ও তাজবিদ বিশেষজ্ঞ।"><?php echo esc_textarea( $description ); ?></textarea>
    </p>
    <?php
}

function save_teacher_meta( $post_id ) {
    // Check nonce
    if (!isset($_POST['nqa_teacher_meta_nonce']) || !wp_verify_nonce($_POST['nqa_teacher_meta_nonce'], 'nqa_save_teacher_meta')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save data
    if ( isset( $_POST['teacher_designation'] ) ) {
        update_post_meta( $post_id, '_teacher_designation', sanitize_text_field( $_POST['teacher_designation'] ) );
    }
    if ( isset( $_POST['teacher_description'] ) ) {
        update_post_meta( $post_id, '_teacher_description', sanitize_textarea_field( $_POST['teacher_description'] ) );
    }
}
add_action( 'save_post', 'save_teacher_meta' );

// ===== Course Step Meta Box =====

function course_step_meta_box() {
    add_meta_box(
        'course_step_meta',
        __('Course Step Details', 'nqa'),
        'course_step_meta_callback',
        'course_step',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'course_step_meta_box' );

function course_step_meta_callback( $post ) {
    wp_nonce_field('nqa_save_meta_box_data', 'nqa_meta_box_nonce');
    
    $button_text = get_post_meta( $post->ID, '_button_text', true );
    $button_url = get_post_meta( $post->ID, '_button_url', true );
    $step_number = get_post_meta( $post->ID, '_step_number', true );
    $bg_color = get_post_meta( $post->ID, '_bg_color', true );
    ?>
    <p>
        <label>Step Number:</label><br>
        <input type="text" name="step_number" value="<?php echo esc_attr( $step_number ); ?>">
    </p>
    <p>
        <label>Button Text:</label><br>
        <input type="text" name="button_text" value="<?php echo esc_attr( $button_text ); ?>">
    </p>
    <p>
        <label>Button URL:</label><br>
        <input type="text" name="button_url" value="<?php echo esc_attr( $button_url ); ?>">
    </p>
    <p>
        <label>Background Color:</label><br>
        <input type="text" name="bg_color" value="<?php echo esc_attr( $bg_color ); ?>">
    </p>
    <?php
}

function save_course_step_meta( $post_id ) {
    // Check nonce
    if (!isset($_POST['nqa_meta_box_nonce']) || !wp_verify_nonce($_POST['nqa_meta_box_nonce'], 'nqa_save_meta_box_data')) {
        return;
    }
    
    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save data
    if ( isset( $_POST['button_text'] ) ) {
        update_post_meta( $post_id, '_button_text', sanitize_text_field( $_POST['button_text'] ) );
    }
    if ( isset( $_POST['button_url'] ) ) {
        update_post_meta( $post_id, '_button_url', esc_url_raw( $_POST['button_url'] ) );
    }
    if ( isset( $_POST['step_number'] ) ) {
        update_post_meta( $post_id, '_step_number', sanitize_text_field( $_POST['step_number'] ) );
    }
    if ( isset( $_POST['bg_color'] ) ) {
        update_post_meta( $post_id, '_bg_color', sanitize_hex_color( $_POST['bg_color'] ) );
    }
}
add_action( 'save_post', 'save_course_step_meta' );