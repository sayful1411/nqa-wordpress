<?php
class Mobile_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $icon_url = wp_kses_post(get_field('menu_icon', $item)); // from ACF field
        $is_active = ($item->current) ? 'mobile-nav-active text-primary' : 'text-[#afafaf]';

        $output .= '<a href="' . esc_url($item->url) . '" 
            class="mobile-nav-item flex flex-col items-center gap-1 px-2 no-underline transition-opacity duration-200 cursor-pointer hover:opacity-80">';

        if ($icon_url) {
            $output .= '<div class="w-5 h-5 flex items-center justify-center relative">
                <img src="' . esc_url($icon_url) . '" alt="" class="max-w-full max-h-full object-contain">
            </div>';
        }

        $output .= '<span class="text-center text-body leading-6 whitespace-nowrap ' . esc_attr($is_active) . '">'
            . esc_html($item->title) .
        '</span>';

        $output .= '</a>';
    }
}