<?php
    $display  = get_theme_mod( 'nqa_feature_display', true );
    if ( $display ) :

    $args = array (
        'post_type' => 'feature',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $features =  new WP_Query($args);
    $heading = get_theme_mod('nqa_feature_heading', 'নূরুল কুরআন একাডেমিতে <br/> <span class="text-gradient bg-clip-text text-transparent">আপনি যা পাচ্ছেন</span>');
    $image = get_theme_mod('nqa_feature_image', get_template_directory_uri() . '/assets/images/feature-frame-1.png');
?>
<!-- Feature -->
<section class="bg-white py-8 px-4 lg:px-8">
    <div class="container mx-auto">
        <!-- Mobile Header -->
        <header class="xl:hidden flex flex-col items-center mb-6 text-center">
            <h2 class="text-h2 font-medium leading-normal text-primary mb-0"><?php echo wp_kses_post($heading);?></h2>
        </header>

        <div class="px-4 grid xl:grid-cols-[520px_1fr] gap-10 xl:gap-16 items-center">
            <!-- Hero Image -->
            <figure style="background-image: url('<?php echo esc_url($image); ?>')"
                class="w-full xl:w-[520px] h-[400px] sm:h-[500px] xl:h-[904px] rounded-2xl overflow-hidden bg-cover bg-center xl:order-1"
                aria-hidden="true">
                <div class="h-full relative"></div>
            </figure>

            <!-- Content -->
            <div class="xl:order-2 flex flex-col gap-10">
                <!-- Desktop Header -->
                <header class="hidden xl:flex flex-col items-start">
                    <h2 class="text-h2 font-medium leading-normal text-primary mb-0"><?php echo wp_kses_post($heading);?></h2>
                </header>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 xl:gap-6">
                    <?php if($features->have_posts()) : while($features->have_posts()) : $features->the_post(); ?>
                    <article
                        class="flex flex-col gap-6 p-4 sm:p-5 xl:p-6 bg-white rounded-2xl border border-muted xl:h-[250px]">
                        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0" aria-hidden="true">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail', ['class' => 'w-full h-full object-contain'] ); ?>
                            <?php else : ?>
                                <img class="w-full h-full object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-1.svg" alt="<?php esc_attr_e(the_title(), 'nqa') ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-col gap-4 flex-1">
                            <h3 class="text-h6 leading-[150%] text-primary mb-0"><?php the_title(); ?></h3>
                            <p class="text-base font-normal leading-[150%] text-secondary mb-0"> <?php echo esc_html_e(get_the_content(), 'nqa'); ?></p>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>