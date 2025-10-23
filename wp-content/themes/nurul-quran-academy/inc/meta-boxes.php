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