<?php
 $display  = get_theme_mod( 'nqa_learning_path_display', true );
 if ( $display ) :
 $title = get_theme_mod('learning_path_title', 'পর্যাক্রমে শিখুন আর এগিয়ে চলুন');
 $bg_color1 = get_theme_mod('learning_path_bg_color1', '#250210');
 $bg_color2 = get_theme_mod('learning_path_bg_color2', '#9e2447');
 $bg_image = get_theme_mod('learning_path_bg_image', get_template_directory_uri() . '/assets/images/bg-3.png');
?>
<!-- Learning Path -->
<section style="background: linear-gradient(11deg, <?php echo esc_attr($bg_color1); ?> 0%, <?php echo esc_attr($bg_color2); ?> 100%), url('<?php echo esc_url($bg_image); ?>'); background-size: contain; background-blend-mode: multiply;"
    class="bg-contain mix-blend-multiply relative py-8 lg:py-[100px] md:py-[50px]">
    <div class="max-w-[1106px] mx-auto relative z-10 flex flex-col gap-10 items-center px-4 md:px-5 lg:px-0">
        <header class="text-center">
            <h2 class="text-white m-0 text-h2"><?php echo esc_html_e($title, 'nqa'); ?></h2>
        </header>
        <div id="cardStack" class="flex flex-col w-full">
            <?php
            $args = array(
                'post_type'      => 'course_step',
                'posts_per_page' => -1,
                'orderby'        => 'meta_value_num',
                'meta_key'       => '_step_number',
                'order'          => 'ASC',
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $button_text = get_post_meta(get_the_ID(), '_button_text', true);
                    $button_url = get_post_meta(get_the_ID(), '_button_url', true);
                    $step_number = get_post_meta(get_the_ID(), '_step_number', true);
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $image = $image ? $image : get_template_directory_uri() . "/assets/images/course-thumb-1.png";
                    $bg_color = get_post_meta(get_the_ID(), '_bg_color', true);
                    $bg_color = $bg_color ? $bg_color : '#ffffff';
            ?>
            <!-- Steps -->
            <article style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-2.png'); background-color: <?php echo esc_attr($bg_color); ?>;"
                class="card-item rounded-2xl overflow-hidden bg-[length:100%_100%] min-h-[344px] flex items-center justify-between gap-12 bg-[#fff9e6] flex-col lg:flex-row md:text-center p-4 lg:p-12">
                <div class="flex-1 flex flex-col gap-8 max-w-[440px] lg:max-w-[440px] md:max-w-none">
                    <header class="flex items-center lg:justify-start md:justify-center">
                        <div class="bg-gradient-primary inline-flex items-center gap-2 py-1 px-2 rounded-[28px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check-2.svg" alt="<?php esc_attr_e('check', 'nqa'); ?>" aria-hidden="true" class="w-3.5 h-3.5">
                            <span class="text-white whitespace-nowrap"><?php echo esc_html_e($step_number, 'nqa'); ?></span>
                        </div>
                    </header>
                    <div class="flex flex-col gap-2.5 text-left md:text-center lg:text-left">
                        <h2 class="text-primary text-h4 m-0"><?php the_title(); ?></h2>
                        <p class="text-secondary text-body m-0"><?php the_content(); ?></p>

                        <?php if ($button_text && $button_url): ?>
                        <a href="<?php echo esc_url($button_url); ?>"
                            class="border-gradient-primary inline-flex w-[106px] h-10 items-center justify-center gap-2.5 py-2.5 px-4 bg-white rounded-full border-none cursor-pointer relative transition-transform duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-2 focus:outline-blue-500 focus:outline-offset-2"
                            type="button">
                            <span class="text-primary whitespace-nowrap relative z-10"><?php echo esc_html_e($button_text, 'nqa'); ?></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('right arrow', 'nqa'); ?>" aria-hidden="true" class="w-1.5 h-[11px] relative z-10">
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <figure
                    class="w-full h-[200px] sm:h-[248px] lg:w-[379px] lg:h-[248px] rounded-xl overflow-hidden relative flex-shrink-0 m-0 step-img-overlay step-img-primary max-w-[400px]">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e(the_title_attribute(), 'nqa'); ?>"
                    class="w-full h-full object-cover relative z-10">
                </figure>
            </article>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>