<?php
  $display  = get_theme_mod( 'nqa_teacher_section_display', true );
  if ( $display ) :

  $teachers = new WP_Query(array(
    'post_type' => 'teacher',
    'posts_per_page' => get_theme_mod('nqa_teacher_per_page', 6),
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ));
  $teacher_bg_color = get_theme_mod( 'nqa_teacher_bg_color', '#fffcf8' );
  $teacher_bg_image = get_theme_mod( 'nqa_teacher_bg_image', get_template_directory_uri() . '/assets/images/testimonial-bg.png' );
  $teacher_heading  = get_theme_mod( 'nqa_teacher_heading', 'আমাদের <span class="text-gradient bg-clip-text text-transparent">অভিজ্ঞ</span> শিক্ষকবৃন্দ' );
?>
<!-- Teacher -->
<section style="background-color: <?php echo esc_attr( $teacher_bg_color ); ?>; background-image: url('<?php echo esc_url( $teacher_bg_image ); ?>');"
    class="bg-cover bg-center py-8 lg:py-[100px] px-8 md:py-20 md:px-6 lg:px-8 min-h-[693px] flex flex-col items-center justify-center"
    role="main">
    <div class="flex flex-col items-center gap-10 max-w-[1107px] w-full mx-auto">
        <div class="flex flex-col items-center gap-[90px] md:gap-[60px] w-full">
            <div class="flex flex-col items-center gap-10 w-full">
                <header class="flex items-center justify-center gap-3 flex-wrap">
                    <h2 class="text-primary text-center m-0 text-h2">
                        <?php echo wp_kses_post( $teacher_heading ); ?>
                    </h2>
                </header>

                <!-- Teacher Carousel -->
                <div class="swiper teacherSwiper w-full max-w-[1107px]">
                    <div class="swiper-wrapper">
                    <?php
                        if ($teachers->have_posts()) :
                            while ($teachers->have_posts()) : $teachers->the_post();
                            $designation = get_post_meta(get_the_ID(), '_teacher_designation', true);
                            $description = get_post_meta(get_the_ID(), '_teacher_description', true);
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        ?>
                        <article
                            class="swiper-slide flex flex-col bg-white border border-[#e6e6e6] rounded-xl overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg max-w-[267]px]">
                            <?php if ($thumbnail) : ?>
                                <img class="w-full h-[214px] md:h-[180px] lg:h-[214px] object-cover block" 
                                    src="<?php echo esc_url($thumbnail); ?>"
                                    alt="<?php esc_attr_e(get_the_title(), 'nqa'); ?>" />
                            <?php else : ?>
                                <img class="w-full h-[214px] md:h-[180px] lg:h-[214px] object-cover block"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-1.png"
                                    alt="<?php echo esc_attr(get_the_title()); ?> এর ছবি" />
                            <?php endif; ?>
                            <div
                                class="flex flex-col gap-[34px] md:gap-5 lg:gap-[34px] p-4 md:py-2.5 md:px-3.5 lg:py-4 lg:px-5 flex-1">
                                <div class="flex flex-col gap-3 w-full">
                                    <div class="flex flex-col gap-1 w-full">
                                        <h2 class="text-primary m-0 text-h6"><?php the_title(); ?></h2>
                                        <?php if ($designation) : ?>
                                            <h3 class="bg-[linear-gradient(103deg,rgba(41,160,182,1)0%,rgba(176,195,67,1)100%)] bg-clip-text text-transparent text-body m-0">
                                                <?php echo esc_html($designation); ?>
                                            </h3>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($description) : ?>
                                        <p class="text-secondary text-small m-0 md:leading-6">
                                            <?php echo esc_html($description); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <nav class="flex items-center gap-4">
                    <button type="button" id="teacher-prev"
                        class="flex w-[51px] h-[51px] items-center justify-center border border-[#f0f0f0] bg-white rounded-full cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_8px_rgba(0,0,0,0.1)] active:translate-y-0"
                        aria-label="Previous teacher">
                        <img class="w-6 h-6 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="<?php esc_attr_e('arrow-left', 'nqa'); ?>" aria-hidden="true" />
                    </button>
                    <button type="button" id="teacher-next"
                        class="flex w-[51px] h-[51px] items-center justify-center border border-[#f0f0f0] bg-white rounded-full cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_8px_rgba(0,0,0,0.1)] active:translate-y-0"
                        aria-label="Next teacher">
                        <img class="w-6 h-6 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-active.svg" alt="<?php esc_attr_e('arrow-right-active', 'nqa'); ?>" aria-hidden="true" />
                    </button>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>