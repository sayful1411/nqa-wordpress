<?php 

// Bangla Number
function nqa_bangla_number( $english_number ) {
    $bangla_digits = array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
    $english_digits = range(0, 9);
    return str_replace($english_digits, $bangla_digits, $english_number);
}

// Bangla Date
function nqa_bangla_date( $date ) {
    $eng_months = array(
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    );
    $bn_months = array(
        'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন',
        'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'
    );

    $date_in_bn = str_replace($eng_months, $bn_months, $date);
    return nqa_bangla_number($date_in_bn);
}

// Dynamic Reading Time
function nqa_reading_time($content) {
    // $content = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( wp_strip_all_tags( $content ) );
    $minutes = ceil( $word_count / 200 ); // average reading speed
    return nqa_bangla_number( $minutes ) . ' মিনিট';
}