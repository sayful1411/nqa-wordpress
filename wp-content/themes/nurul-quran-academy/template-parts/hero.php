<!-- Hero -->
<section style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.svg')"
     class="relative bg-primary bg-bottom bg-cover pt-0">
  <div class="relative grid grid-cols-1 lg:grid-cols-2 lg:pl-12">
    <div class="order-2 lg:order-1 px-6 pt-8 lg:pl-8 z-10">
      <!-- Text section -->
      <div class="flex flex-col gap-6">
        <!-- Heading group -->
        <div class="flex flex-col gap-3">
          <h2
            class="text-[clamp(24px,4vw,52px)] leading-[1.3] font-normal text-white m-0 text-left md:leading-[1.35]">
            <span class="font-medium"><?php echo wp_kses_post(get_field('hero_title')); ?></span>
          </h2>
          <p
            class="text-base leading-[1.6] text-white text-left m-0">
            <?php echo wp_kses_post(get_field('hero_description')); ?>
          </p>
        </div>

        <!-- CTA Button -->
        <?php if (get_field('hero_button_text')): ?>
        <a href="<?php echo esc_url(get_field('hero_button_link')); ?>"
          class="bg-gradient-primary self-center inline-flex w-full h-12 items-center justify-center gap-2.5 px-6 py-2.5 border-none rounded-[50px] cursor-pointer transition-all duration-200 no-underline box-border hover:-translate-y-px hover:shadow-[0_4px_8px_rgba(0,0,0,0.2)] focus:outline-2 focus:outline-white focus:outline-offset-2 disabled:opacity-60 disabled:cursor-not-allowed md:self-start md:w-auto"
          type="button" aria-label="শেখা শুরু করুন - কোর্সে এনরোল করতে ক্লিক করুন">
          <span class="font-medium text-white text-base leading-6 whitespace-nowrap"><?php echo the_field('hero_button_text'); ?></span>
          <img class="w-4 h-4 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="<?php esc_attr_e('arrow-right', 'nqa') ?>" aria-hidden="true" />
        </a>
        <?php endif?>
      </div>

      <!-- Statistics section -->
      <div class="flex flex-col gap-4 mt-12" aria-labelledby="success-stats">
        <h2 class="text-base leading-6 text-white text-left m-0 md:text-left" id="success-stats">
        <?php echo the_field('statistics_title'); ?>
        </h2>
        <div class="flex gap-4 items-center justify-start pb-8 md:flex-row md:gap-8 md:flex-wrap xl:gap-8"
          role="list">
          <div class="flex items-center gap-3 text-center" role="listitem">
            <?php 
              $icon1 = get_field('stat_1_icon');
              $icon1_url = $icon1 ? esc_url($icon1) : get_template_directory_uri() . '/assets/images/student.svg';
            ?>
            <img class="w-[38px] h-[38px] flex-shrink-0" src="<?php echo $icon1_url; ?>" alt="<?php esc_attr_e(the_field('stat_1_label'), 'nqa'); ?>" />
            <div class="flex flex-col items-start justify-center">
              <div class="text-lg leading-6 text-white m-0"><?php the_field('stat_1_number'); ?></div>
              <div class="text-sm leading-6 text-white m-0"><?php the_field('stat_1_label'); ?></div>
            </div>
          </div>
          <div class="flex items-center gap-3 text-center" role="listitem">
            <?php 
              $icon2 = get_field('stat_1_icon');
              $icon2_url = $icon2 ? esc_url($icon2) : get_template_directory_uri() . '/assets/images/student.svg';
            ?>
            <img class="w-[38px] h-[38px] flex-shrink-0" src="<?php echo $icon2_url; ?>" alt="<?php esc_attr_e(the_field('stat_2_label'), 'nqa'); ?>" />
            <div class="flex flex-col items-start justify-center">
              <div class="text-lg leading-6 text-white m-0"><?php the_field('stat_2_number'); ?></div>
              <div class="text-sm leading-6 text-white m-0"><?php the_field('stat_2_label'); ?></div>
            </div>
          </div>
          <div class="flex items-center gap-3 text-center" role="listitem">
            <?php 
              $icon3 = get_field('stat_1_icon');
              $icon3_url = $icon3 ? esc_url($icon3) : get_template_directory_uri() . '/assets/images/student.svg';
            ?>
            <img class="w-[38px] h-[38px] flex-shrink-0" src="<?php echo $icon3_url; ?>" alt="<?php esc_attr_e(the_field('stat_3_label'), 'nqa'); ?>" />
            <div class="flex flex-col items-start justify-center">
              <div class="text-lg leading-6 text-white m-0"><?php the_field('stat_3_number'); ?></div>
              <div class="text-sm leading-6 text-white m-0"><?php the_field('stat_3_label'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative order-1 lg:order-2">
      <img class="w-full h-auto lg:h-full object-cover relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png"
        alt="<?php esc_attr_e('Islamic scholars and students in a learning environment', 'nqa') ?>" />
      <img class="lg:hidden absolute bottom-0 w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-3.svg" alt="<?php esc_attr_e('rectangle 3', 'nqa') ?>">
      <img class="hidden lg:block absolute top-0 -left-[270px] w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-1.svg" alt="<?php esc_attr_e('rectangle 1', 'nqa') ?>">
    </div>
  </div>
</section>