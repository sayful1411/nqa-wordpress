<?php

class  Dropdown_walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            // Dropdown container
            $output .= '<div style="z-index: 999; top: 50px; right: -20px;" 
                            class="flex flex-col absolute bg-white border-0 rounded-b px-4 shadow-lg w-[200px]" 
                            x-show="open" 
                            x-transition
                            x-cloak
                            @click.away="open = false">';
        }
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '</div>';
        }
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $has_children = in_array( 'menu-item-has-children', $classes );
        
        // Top-level menu item
        if ( $depth === 0 ) {
            
            if ( $has_children ) {
                // Parent with dropdown
                $output .= '<div class="relative" x-data="{ open: false }">';
                $output .= '<button 
                                class="flex items-center justify-center gap-2 px-2 py-2.5 flex-shrink-0 rounded-lg border-none bg-transparent cursor-pointer transition-colors duration-200 hover:bg-black/5"
                                type="button"
                                aria-haspopup="true"
                                :aria-expanded="open"
                                @click="open = !open">';
                $output .= '<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">' . esc_html( $item->title ) . '</span>';
                $output .= '<div class="w-4 h-4 aspect-square flex items-center justify-center">
                                <img class="dropdown-arrow w-[11px] h-[6px] transition-transform duration-200" 
                                     src="' . get_template_directory_uri() . '/assets/images/arrow-down.svg" 
                                     alt="" 
                                     :class="{ \'rotate-180\': open }" />
                            </div>';
                $output .= '</button>';
            } else {
                // Regular top-level link
                $output .= '<a href="' . esc_url( $item->url ) . '" 
                               class="relative flex items-center justify-center gap-2 px-2 py-2.5 flex-shrink-0 rounded-lg border-none no-underline bg-transparent cursor-pointer transition-colors duration-200 hover:bg-black/5">';
                $output .= '<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">' . esc_html( $item->title ) . '</span>';
                $output .= '</a>';
            }
            
        } else {
            // Dropdown item (child)
            $icon_url = wp_kses_post(get_field( 'menu_icon', $item ));
            $title    = esc_html( $item->title );
            $url      = esc_url( $item->url );
        
            $output .= '<a style="margin: .5rem 0;" href="' . $url . '" class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">';
        
            if ( $icon_url ) {
                $output .= '<div class="flex items-center w-10 h-10" aria-hidden="true">
                                <img src="' . esc_url( $icon_url ) . '" alt="" style="width: 1.5rem; height: 1.5rem;"  class="object-contain" />
                            </div>';
            }
        
            $output .= '<div class="course-item__content">
                            <h3 class="text-primary text-sm font-medium">' . $title . '</h3>
                        </div>';
        
            $output .= '</a>';
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $has_children = in_array( 'menu-item-has-children', $classes );
            
            if ( $has_children ) {
                $output .= '</div>'; // Close the x-data wrapper
            }
        }
    }
}
