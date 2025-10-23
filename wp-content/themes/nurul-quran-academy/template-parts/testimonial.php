<?php
  $display  = get_theme_mod( 'nqa_testimonial_section_display', true );
  if ( $display ) :
  $heading = get_theme_mod('nqa_testimonial_heading', 'বিজ্ঞজন আমাদের কাজের <span class="text-gradient bg-clip-text text-transparent">প্রশংসা করেছেন !!</span>');
  $description = get_theme_mod('nqa_testimonial_description', 'আলহামদুলিল্লাহ, নুরুল কোরআন অ্যাকাডেমি ইমসলামের বর্তা সহীহভাবে পৌঁছে দেয়ার জন্য যা করছে তা খুবই প্রশংসনীয়, এবং এই ডিজিটাল যুগে আমাদেরকে ইসলামকে মানুষের কাছে পৌঁছাতে হবে ডিজিটালভাবে, যা এই প্রতিষ্ঠান সফলতার সাথে করে আসছে।');
  $video_image = get_theme_mod('nqa_testimonial_video_image', get_template_directory_uri() . '/assets/images/testimonial-1.png');
  $video_url = get_theme_mod('nqa_testimonial_video_url', '#');
  $author_image = get_theme_mod('nqa_testimonial_author_image', get_template_directory_uri() . '/assets/images/ahmudullah.png');
  $author_name = get_theme_mod('nqa_testimonial_author_name', 'শায়খ আহমাদুল্লাহ');
  $author_title = get_theme_mod('nqa_testimonial_author_title', 'চেয়ারম্যান, আস-সুন্নাহ ফাউন্ডেশন');
  $bg_color = get_theme_mod('nqa_testimonial_bg_color', '#f8fffc');
?>
<!-- Testimonial -->
<section style="background-color: <?php echo esc_attr($bg_color); ?>;"
    class="min-h-[558px] overflow-hidden relative flex items-center justify-center py-16 px-5 md:py-20 lg:py-25">
    <div class="max-w-[985px] w-full relative container">
        <!-- Mobile Header (visible only on mobile) -->
        <header class="block sm:hidden mb-12">
            <h2 class="text-primary text-h2 font-bold leading-[1.3] m-0">
                <?php echo wp_kses_post($heading); ?>
            </h2>
        </header>

        <div
            class="flex items-center gap-16 relative flex-col text-center md:flex-row md:text-left md:gap-10 lg:gap-16">
            <!-- Video Player -->
            <div
            class="testimonial-video-bg relative w-full max-w-[400px] h-[250px] flex-shrink-0 md:w-[400px] md:h-[275px] lg:w-[528px] lg:h-[363px]">
                <div class="relative w-full h-full">

                    <!-- Video Image -->
                    <img class="relative w-full h-full object-contain rounded-[28px] z-[2]" src="<?php echo esc_url($video_image); ?>"
                    alt="<?php esc_attr_e($author_name, 'nqa'); ?>" />

                    <!-- Play Button -->
                    <button
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-none border-none cursor-pointer z-[3] transition-transform duration-300 hover:scale-110"
                    aria-label="<?php esc_attr_e('play video', 'nqa'); ?>" <?php if($video_url) : ?>
                        onclick="window.open('<?php echo esc_url($video_url); ?>', '_blank')"
                        <?php endif; ?>>
                    <img class="w-full h-full object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/images/play.svg" alt="<?php esc_attr_e('play', 'nqa'); ?>" />
                    </button>
                </div>
            </div>

            <!-- Testimonial Content -->
            <article class="flex-1 max-w-[393px] w-full md:max-w-[320px] lg:max-w-[393px]">
                <!-- Desktop Header (hidden on mobile) -->
                <header class="flex flex-wrap items-start justify-center gap-3 mb-8 sm:block md:justify-start">
                    <h2 class="text-h2 font-bold leading-[1.3] m-0">
                        <?php echo wp_kses_post($heading); ?>
                    </h2>
                </header>

                <div class="flex flex-col gap-8 mt-5">
                    <!-- Quote -->
                    <blockquote
                    class="text-secondary text-base leading-6 m-0 text-left sm:text-sm sm:leading-[1.6]">
                        <?php echo wp_kses_post($description); ?>
                    </blockquote>

                    <!-- Author -->
                    <footer class="flex items-start gap-4 justify-center md:justify-start">
                        <img class="w-12 h-12 rounded-full object-cover flex-shrink-0" src="<?php echo esc_url($author_image); ?>"
                            alt="<?php esc_attr_e($author_name, 'nqa'); ?>" />
                        <div class="flex-1 flex flex-col">
                            <cite
                            class="text-primary text-lg font-semibold leading-[1.4] m-0 mb-1 text-left not-italic sm:text-base">
                                <?php echo esc_html_e($author_name, 'nqa'); ?>
                            </cite>
                            <p class="text-secondary text-sm leading-6 m-0 text-left">
                                <?php echo esc_html_e($author_title, 'nqa'); ?>
                            </p>
                        </div>
                    </footer>
                </div>
            </article>
        </div>
    </div>
</section>
<?php endif; ?>