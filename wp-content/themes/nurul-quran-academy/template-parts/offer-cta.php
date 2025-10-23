<?php
  $display  = get_theme_mod( 'nqa_offer_cta_display', true );
  if ( $display ) :
  $offer_cta_title = get_theme_mod('nqa_offer_cta_title', 'ইসলামী জ্ঞান অর্জনের মাধ্যমে আলোকিত করুন নিজের ভবিষ্যৎ');
  $offer_cta_btn_text = get_theme_mod('nqa_offer_cta_button_text', 'শেখা শুরু করুন');
  $offer_cta_btn_link = get_theme_mod('nqa_offer_cta_button_link', '#');
  $offer_cta_bg_color = get_theme_mod('nqa_offer_cta_bg_color', '#fefefe');
  $offer_cta_bg_image = get_theme_mod('nqa_offer_cta_bg_image', get_template_directory_uri() . '/assets/images/cta-02.png');
  $offer_cta_image = get_theme_mod('nqa_offer_cta_mage', get_template_directory_uri() . '/assets/images/cta-01.png');
?>
<!-- Offer Call To Action -->
<section style="background-image: url('<?php echo esc_attr($offer_cta_bg_color); ?>')"
    class="bg-[#fefefe] py-8 px-4 sm:py-12 sm:px-8 lg:py-16 lg:px-32 flex items-center justify-center">
    <div
        class="w-full max-w-[1169px] bg-[#9b1b40] rounded-[32px] overflow-hidden relative min-h-[200px] flex items-center">
        <div style="background-image: url('<?php echo esc_url($offer_cta_bg_image); ?>')"
            class="w-full h-[200px] sm:h-[420px] bg-[length:100%_100%] relative p-8 sm:p-16 lg:p-24 flex items-center">
            <img class="w-[200px] h-[200px] sm:w-[389px] sm:h-[388px] object-cover mix-blend-hard-light flex-shrink-0 absolute top-[30%] sm:top-[7%] right-0"
                src="<?php echo esc_url($offer_cta_image) ?>" alt="<?php esc_attr_e('ইসলামী শিক্ষার প্রতীক', 'nqa') ?>" />
            <div class="flex items-end">
                <header class="flex flex-col gap-8 w-full max-w-[600px] order-2 sm:order-1">
                    <h1
                        class="font-medium text-white text-h2 leading-[110%] text-left mb-0">
                        <?php echo esc_html_e($offer_cta_title, 'nqa')?>
                    </h1>
                    <?php if($offer_cta_btn_text): ?>
                    <a href="<?php echo esc_url($offer_cta_btn_link); ?>"
                        class="inline-flex h-12 items-center justify-center gap-2.5 px-6 py-2.5 border-none rounded-full bg-gradient-primary cursor-pointer transition-all duration-200 w-fit hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(223,24,106,0.3)] active:translate-y-0"
                        type="button" aria-label="<?php echo esc_attr_e($offer_cta_btn_text, 'nqa'); ?>">
                        <span class="text-white text-body font-normal leading-[150%] whitespace-nowrap"><?php echo esc_html_e($offer_cta_btn_text, 'nqa'); ?></span>
                        <div class="w-4 h-4 flex items-center justify-center" aria-hidden="true">
                            <img class="w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="<?php esc_attr_e('arrow right', 'nqa') ?>" />
                        </div>
                    </a>
                    <?php endif;?>
                </header>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>