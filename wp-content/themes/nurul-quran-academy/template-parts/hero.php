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
            <span class="font-medium">ইসলামী জ্ঞানে <span class="font-li-hai">আলোকিত করুন নিজের ভবিষ্যৎ!</span></span>
          </h2>
          <p
            class="text-base leading-[1.6] text-white text-left m-0">
            ইসলামী জ্ঞান অর্জনের এক অনন্য অনলাইন উদ্যোগ। যেখানে আরবী ভাষা ও সাহিত্যসহ কুরআন, হাদীস, ফিকহ ও
            আকীদার উপর রয়েছে সুচিন্তিত পেইড ও ফ্রি কোর্সের আয়োজন।
          </p>
        </div>

        <!-- CTA Button -->
        <button
          class="bg-gradient-primary self-center inline-flex w-full h-12 items-center justify-center gap-2.5 px-6 py-2.5 border-none rounded-[50px] cursor-pointer transition-all duration-200 no-underline box-border hover:-translate-y-px hover:shadow-[0_4px_8px_rgba(0,0,0,0.2)] focus:outline-2 focus:outline-white focus:outline-offset-2 disabled:opacity-60 disabled:cursor-not-allowed md:self-start md:w-auto"
          type="button" aria-label="শেখা শুরু করুন - কোর্সে এনরোল করতে ক্লিক করুন">
          <span class="font-medium text-white text-base leading-6 whitespace-nowrap">শেখা শুরু করুন</span>
          <img class="w-4 h-4 flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="<?php esc_attr_e('arrow-right', 'nqa') ?>" aria-hidden="true" />
        </button>
      </div>

      <!-- Statistics section -->
      <div class="flex flex-col gap-4 mt-12" aria-labelledby="success-stats">
        <h2 class="text-base leading-6 text-white text-left m-0 md:text-left" id="success-stats">বিগত
          ৩ বছর ধরে আমাদের সাফল্য
        </h2>
        <div class="flex gap-4 items-center justify-start pb-8 md:flex-row md:gap-8 md:flex-wrap xl:gap-8"
          role="list">
          <div class="flex items-center gap-3 text-center" role="listitem">
            <img class="w-[38px] h-[38px] flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/student.svg" alt="শিক্ষার্থী আইকন" />
            <div class="flex flex-col items-start justify-center">
              <div class="text-lg leading-6 text-white m-0">১০,০০০</div>
              <div class="text-sm leading-6 text-white m-0">শিক্ষার্থী</div>
            </div>
          </div>
          <div class="flex items-center gap-3 text-center" role="listitem">
            <img class="w-[38px] h-[38px] flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher.svg" alt="শিক্ষক আইকন" />
            <div class="flex flex-col items-start justify-center">
              <div class="text-lg leading-6 text-white m-0">২৫+</div>
              <div class="text-sm leading-6 text-white m-0">শিক্ষক</div>
            </div>
          </div>
          <div class="flex items-center gap-3 text-center" role="listitem">
            <img class="w-[38px] h-[38px] flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/check.svg" alt="কোর্স সম্পূর্ণতার হার আইকন" />
            <div class="flex flex-col items-start justify-center">
              <div class="text-lg leading-6 text-white m-0">৮৯%</div>
              <div class="text-sm leading-6 text-white m-0">কোর্স কমপ্লিট রেট</div>
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