<?php
  $display = get_theme_mod('nqa_blog_display', true);
  if ($display):

      $blogs = new WP_Query([
          'post_type'      => 'post',
          'posts_per_page' => get_theme_mod('nqa_blog_posts_per_page', 6),
      ]);
      $heading  = get_theme_mod('nqa_blog_heading', 'পছন্দের <span class="text-gradient bg-clip-text text-transparent">ব্লগ</span> পড়ুন');
      $bg_image = get_theme_mod('nqa_blog_bg_image', get_template_directory_uri() . '/assets/images/testimonial-bg.png');
?>
<!-- Blog -->
<section class="bg-[#fffcf8] min-h-screen relative">
    <div style="background-image: url('<?php echo esc_url($bg_image); ?>')"
        class="container mx-auto bg-cover bg-center bg-no-repeat min-h-[693px] py-16 sm:py-20 lg:py-24">
        <div class="max-w-[1107px] mx-auto px-4 flex flex-col items-center gap-10">
            <div class="flex flex-col items-center gap-10 text-left w-full">
                <!-- Title -->
                <div class="flex items-start justify-start gap-3 flex-wrap">
                    <h2 class="text-h2 font-medium leading-normal text-primary mb-0"><?php echo wp_kses_post($heading); ?></h2>
                </div>

                <!-- Blog Cards Carousel -->
                <div class="swiper blogSwiper w-full max-w-[1107px]">
                    <div class="swiper-wrapper">
                        <?php if ($blogs->have_posts()): ?>
                        <?php while ($blogs->have_posts()): $blogs->the_post(); ?>
                        <!-- Blog Cards -->
                        <article
                            class="swiper-slide mb-5 flex flex-col bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.15)] overflow-hidden">
                            <?php if (has_post_thumbnail()): ?>
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')) ?>')" class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="<?php the_title_attribute(); ?>">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        <?php the_excerpt(); ?>
                                    </h2>
                                </div>
                            </header>
                            <?php else: ?>
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-01.png')"
                                class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="<?php the_title_attribute(); ?>">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        <?php the_excerpt(); ?>
                                    </h2>
                                </div>
                            </header>
                            <?php endif; ?>
                            <div class="p-4 sm:p-5 flex flex-col gap-3 flex-grow">
                                <div class="flex flex-col gap-3 text-left">
                                    <p class="text-[14px] font-normal text-primary leading-[150%] mb-0"><?php the_author(); ?></p>
                                    <h3 class="text-h6 font-semibold text-primary leading-[150%] mb-0"><?php the_title(); ?></h3>
                                    <div class="flex items-center gap-2 mt-auto">
                                        <time
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0"
                                            datetime="<?php echo esc_html(get_the_date()); ?>"><?php echo nqa_bangla_date(esc_html(get_the_date('j F Y'))); ?></time>
                                        <span class="w-1 h-1 bg-secondary rounded-full flex-shrink-0" aria-hidden="true"></span>
                                        <span
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0">
                                            <?php echo esc_html(nqa_reading_time(get_the_content())); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; wp_reset_postdata(); endif;?>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <nav class="flex items-center gap-4">
                    <button type="button" id="blog-prev"
                        class="flex w-[51px] h-[51px] items-center justify-center border border-[#f0f0f0] bg-white rounded-full cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_8px_rgba(0,0,0,0.1)] active:translate-y-0"
                        aria-label="Previous blog">
                        <img class="w-6 h-6 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="<?php esc_attr_e('arrow-left'); ?>" aria-hidden="true" />
                    </button>
                    <button type="button" id="blog-next"
                        class="flex w-[51px] h-[51px] items-center justify-center border border-[#f0f0f0] bg-white rounded-full cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_8px_rgba(0,0,0,0.1)] active:translate-y-0"
                        aria-label="Next blog">
                        <img class="w-6 h-6 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-active.svg" alt="<?php esc_attr_e('arrow-right'); ?>" aria-hidden="true" />
                    </button>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>