<?php
    $args = array (
        'post_type' => 'feedback',
        'posts_per_page' => get_theme_mod('nqa_feedback_per_page', 6),
    );

    $feedbacks =  new WP_Query($args);

    $display  = get_theme_mod( 'nqa_feedback_display', true );
    if ( $display ) :
    $heading = get_theme_mod('nqa_feedback_heading', 'আমাদের <span class="text-gradient bg-clip-text text-transparent">শিক্ষার্থীরা</span> কি বলছেন');
    $bg_image = get_theme_mod('nqa_feedback_bg_image', get_template_directory_uri() . '/assets/images/testimonial-bg.png');
?>
<!-- Feedback Section -->
<section style="background-image: url('<?php echo esc_url($bg_image); ?>')"
    class="bg-cover bg-center relative">
    <div class="container mx-auto py-16 px-4 md:px-8 sm:py-12 sm:px-4">
        <div class="flex flex-col items-center gap-10 px-4">
            <!-- Title -->
            <div class="flex items-start justify-start gap-3 flex-wrap">
                <h2 class="text-h2 font-medium leading-normal text-primary mb-0">
                    <?php echo wp_kses_post($heading);?>
                </h2>
            </div>

            <!-- Feedback slide -->
            <div class="swiper feedbackSwiper w-full max-w-[1107px]">
                <div class="swiper-wrapper">
                    <?php if($feedbacks->have_posts()) : while($feedbacks->have_posts()) : $feedbacks->the_post(); ?>
                    <!-- Feedback Card -->
                    <article class="swiper-slide" role="listitem">
                        <div class="flex flex-col bg-white rounded-xl overflow-hidden border border-[#f0f0f0] shadow-[0px_2px_4px_0px_rgba(0,0,0,0.05)] p-6 gap-4 hover:-translate-y-0.5 transition-transform duration-200 min-h-[240px] md:min-h-[285px] relative">
                            <img class="absolute bottom-4 right-4 w-[25px] h-[52px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/qutation.svg"
                                alt="<?php esc_attr_e('উদ্ধৃতি চিহ্ন', 'nqa'); ?>" aria-hidden="true" />
                            <blockquote class="text-primary text-body leading-[150%] font-normal m-0 flex-1">
                                <?php the_content(); ?>
                            </blockquote>
                            <div class="flex items-center gap-4 mt-auto">
                                <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'thumbnail', ['class' => 'w-full h-full object-cover'] ); ?>
                                <?php else : ?>
                                    <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-2.png" alt="<?php esc_attr_e(the_title(), 'nqa') ?>" />
                                <?php endif; ?>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <cite class="text-primary text-body font-semibold leading-[150%] m-0"><?php the_title(); ?></cite>
                                    <div class="text-secondary text-sm font-normal leading-[150%]">শিক্ষার্থী</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <nav class="flex items-center gap-4">
                <button type="button" id="feedback-prev"
                    class="flex w-[51px] h-[51px] items-center justify-center border border-[#f0f0f0] bg-white rounded-full cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_8px_rgba(0,0,0,0.1)] active:translate-y-0"
                    aria-label="Previous feedback">
                    <img class="w-6 h-6 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="<?php esc_attr_e('arrow-left', 'nqa'); ?>" aria-hidden="true" />
                </button>
                <button type="button" id="feedback-next"
                    class="flex w-[51px] h-[51px] items-center justify-center border border-[#f0f0f0] bg-white rounded-full cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_8px_rgba(0,0,0,0.1)] active:translate-y-0"
                    aria-label="Next feedback">
                    <img class="w-6 h-6 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-active.svg" alt="<?php esc_attr_e('arrow right active', 'nqa'); ?>" aria-hidden="true" />
                </button>
            </nav>
        </div>
    </div>
</section>
<?php endif; ?>