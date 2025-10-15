<!-- Testimonial -->
<section
    class="bg-[#f8fffc] min-h-[558px] overflow-hidden relative flex items-center justify-center py-16 px-5 md:py-20 lg:py-25">
    <div class="max-w-[985px] w-full relative container">
    <!-- Mobile Header (visible only on mobile) -->
    <header class="block sm:hidden mb-12">
        <h2 class="text-primary text-h2 font-bold leading-[1.3] m-0">
        বিজ্ঞজন আমাদের কাজের <span class="text-gradient bg-clip-text text-transparent">প্রশংসা করেছেন !!</span>
        </h2>
    </header>

    <div
        class="flex items-center gap-16 relative flex-col text-center md:flex-row md:text-left md:gap-10 lg:gap-16">
        <!-- Video Player -->
        <div
        class="testimonial-video-bg relative w-full max-w-[400px] h-[250px] flex-shrink-0 md:w-[400px] md:h-[275px] lg:w-[528px] lg:h-[363px]">
        <div class="relative w-full h-full">

            <!-- Video Image -->
            <img class="relative w-full h-full object-contain rounded-[28px] z-[2]" src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.png"
            alt="<?php esc_attr_e('শায়খ আহমাদুল্লাহর প্রশংসাপত্র ভিডিও', 'nqa'); ?>" />

            <!-- Play Button -->
            <button
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-none border-none cursor-pointer z-[3] transition-transform duration-300 hover:scale-110"
            aria-label="<?php esc_attr_e('প্রশংসাপত্র ভিডিও চালান', 'nqa'); ?>">
            <img class="w-full h-full object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/images/play.svg" alt="<?php esc_attr_e('চালান', 'nqa'); ?>" />
            </button>
        </div>
        </div>

        <!-- Testimonial Content -->
        <article class="flex-1 max-w-[393px] w-full md:max-w-[320px] lg:max-w-[393px]">
        <!-- Desktop Header (hidden on mobile) -->
        <header class="flex flex-wrap items-start justify-center gap-3 mb-8 sm:block md:justify-start">
            <h2 class="text-h2 font-bold leading-[1.3] m-0">
            বিজ্ঞজন আমাদের কাজের <br><span class="text-gradient bg-clip-text text-transparent">প্রশংসা করেছেন !!</span>
            </h2>
        </header>

        <div class="flex flex-col gap-8 mt-5">
            <!-- Quote -->
            <blockquote
            class="text-secondary text-base leading-6 m-0 text-left sm:text-sm sm:leading-[1.6]">
            আলহামদুলিল্লাহ, নুরুল কোরআন অ্যাকাডেমি ইমসলামের বর্তা সহীহভাবে পৌঁছে দেয়ার জন্য যা করছে তা খুবই
            প্রশংসনীয়, এবং এই ডিজিটাল যুগে আমাদেরকে ইসলামকে মানুষের কাছে পৌঁছাতে হবে ডিজিটালভাবে, যা এই প্রতিষ্ঠান
            সফলতার সাথে করে আসছে।
            </blockquote>

            <!-- Author -->
            <footer class="flex items-start gap-4 justify-center md:justify-start">
            <img class="w-12 h-12 rounded-full object-cover flex-shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/ahmudullah.png"
                alt="<?php esc_attr_e('শায়খ আহমাদুল্লাহ', 'nqa'); ?>" />
            <div class="flex-1 flex flex-col">
                <cite
                class="text-primary text-lg font-semibold leading-[1.4] m-0 mb-1 text-left not-italic sm:text-base">
                শায়খ আহমাদুল্লাহ
                </cite>
                <p class="text-secondary text-sm leading-6 m-0 text-left">
                চেয়ারম্যান, আস-সুন্নাহ ফাউন্ডেশন
                </p>
            </div>
            </footer>
        </div>
        </article>
    </div>
    </div>
</section>