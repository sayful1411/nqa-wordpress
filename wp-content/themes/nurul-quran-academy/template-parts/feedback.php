<!-- Feedback Section -->
<section style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-bg.png')"
    class="bg-cover bg-center relative">
    <div class="container mx-auto py-16 px-4 md:px-8 sm:py-12 sm:px-4">
        <div class="flex flex-col items-center gap-10 px-4">
            <!-- Title -->
            <div class="flex items-start justify-start gap-3 flex-wrap">
                <h2 class="text-h2 font-medium leading-normal text-primary mb-0">আমাদের <span
                class="text-gradient bg-clip-text text-transparent">শিক্ষার্থীরা</span> কি বলছেন</h2>
            </div>

            <!-- Feedback slide -->
            <div class="swiper feedbackSwiper w-full max-w-[1107px]">
                <div class="swiper-wrapper">
                    <!-- Feedback Card 1 -->
                    <article
                        class="swiper-slide flex flex-col bg-white rounded-xl overflow-hidden border border-[#f0f0f0] shadow-[0px_2px_4px_0px_rgba(0,0,0,0.05)] p-6 gap-4 hover:-translate-y-0.5 transition-transform duration-200 min-h-[240px] md:min-h-[285px] relative"
                        role="listitem">
                        <img class="absolute bottom-4 right-4 w-[25px] h-[52px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/qutation.svg"
                            alt="<?php esc_attr_e('উদ্ধৃতি চিহ্ন', 'nqa'); ?>" aria-hidden="true" />
                        <blockquote class="text-primary text-body leading-[150%] font-normal m-0 flex-1">
                            আমি আগে দ্বীনের অনেক বিষয় বুঝতাম না। এই প্ল্যাটফর্মের কোর্সগুলো খুব সহজ ভাষায় এবং বাস্তব উদাহরণ
                            দিয়ে ইসলামিক জ্ঞান বুঝিয়ে দেয়। বিশেষ করে আকীদা ও ফিকহ কোর্স থেকে অনেক উপকার পেয়েছি। আলহামদুলিল্লাহ!
                        </blockquote>
                        <div class="flex items-center gap-4 mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-1.png"
                                    alt="<?php esc_attr_e('মো. ইমরান হোসেনের প্রোফাইল ছবি', 'nqa'); ?>" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <cite class="text-primary text-body font-semibold leading-[150%] m-0">মো. ইমরান হোসেন</cite>
                                <div class="text-secondary text-sm font-normal leading-[150%]">শিক্ষার্থী</div>
                            </div>
                        </div>
                    </article>

                    <!-- Feedback Card 2 -->
                    <article
                    class="swiper-slide flex flex-col bg-white rounded-xl overflow-hidden border border-[#f0f0f0] shadow-[0px_2px_4px_0px_rgba(0,0,0,0.05)] p-6 gap-4 hover:-translate-y-0.5 transition-transform duration-200 min-h-[240px] md:min-h-[285px] relative"
                    role="listitem">
                    <img class="absolute bottom-4 right-4 w-[25px] h-[52px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/qutation.svg"
                       alt="<?php esc_attr_e('উদ্ধৃতি চিহ্ন', 'nqa'); ?>" aria-hidden="true" />
                    <blockquote class="text-primary text-body leading-[150%] font-normal m-0 flex-1">
                        ঘরে বসেই বিশ্বস্ত ইসলামিক জ্ঞান লাভ করা যায় এই প্ল্যাটফর্ম থেকে। ইউজার ইন্টারফেস খুব সহজ, ভিডিওগুলো
                        মানসম্পন্ন এবং প্রতিটি কোর্স সুন্দরভাবে সাজানো। আমি আমার বন্ধুদেরও রেফার করছি।
                    </blockquote>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-2.png"
                                alt="<?php esc_attr_e('শামিমা আক্তারের প্রোফাইল ছবি', 'nqa'); ?>" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <cite class="text-primary text-body font-semibold leading-[150%] m-0">শামিমা আক্তার</cite>
                            <div class="text-secondary text-sm font-normal leading-[150%]">শিক্ষার্থী</div>
                        </div>
                    </div>
                    </article>

                    <!-- Feedback Card 3 -->
                    <article
                    class="swiper-slide flex flex-col bg-white rounded-xl overflow-hidden border border-[#f0f0f0] shadow-[0px_2px_4px_0px_rgba(0,0,0,0.05)] p-6 gap-4 hover:-translate-y-0.5 transition-transform duration-200 min-h-[240px] md:min-h-[285px] relative"
                    role="listitem">
                    <img class="absolute bottom-4 right-4 w-[25px] h-[52px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/qutation.svg"
                       alt="<?php esc_attr_e('উদ্ধৃতি চিহ্ন', 'nqa'); ?>" aria-hidden="true" />
                    <blockquote class="text-primary text-body leading-[150%] font-normal m-0 flex-1">
                        আমি চাকরির পাশাপাশি অনলাইনে সময় করে এই প্ল্যাটফর্ম থেকে পড়াশোনা করি। শিক্ষকরা খুবই আন্তরিক এবং
                        লাইভ সেশনে প্রশ্ন করলে সুন্দর করে উত্তর দেন। এটা একটা বরকতময় উদ্যোগ।
                    </blockquote>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-3.png"
                                alt="<?php esc_attr_e('মো. সাইফুল ইসলামের প্রোফাইল ছবি', 'nqa'); ?>" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <cite class="text-primary text-body font-semibold leading-[150%] m-0">মো. সাইফুল ইসলাম</cite>
                            <div class="text-secondary text-sm font-normal leading-[150%]">শিক্ষার্থী</div>
                        </div>
                    </div>
                    </article>

                    <!-- Feedback Card 4 -->
                    <article
                        class="swiper-slide flex flex-col bg-white rounded-xl overflow-hidden border border-[#f0f0f0] shadow-[0px_2px_4px_0px_rgba(0,0,0,0.05)] p-6 gap-4 hover:-translate-y-0.5 transition-transform duration-200 min-h-[240px] md:min-h-[285px] relative"
                        role="listitem">
                        <img class="absolute bottom-4 right-4 w-[25px] h-[52px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/qutation.svg"
                           alt="<?php esc_attr_e('উদ্ধৃতি চিহ্ন', 'nqa'); ?>" aria-hidden="true" />
                        <blockquote class="text-primary text-body leading-[150%] font-normal m-0 flex-1">
                            আমি আগে দ্বীনের অনেক বিষয় বুঝতাম না। এই প্ল্যাটফর্মের কোর্সগুলো খুব সহজ ভাষায় এবং বাস্তব উদাহরণ
                            দিয়ে ইসলামিক জ্ঞান বুঝিয়ে দেয়। বিশেষ করে আকীদা ও ফিকহ কোর্স থেকে অনেক উপকার পেয়েছি। আলহামদুলিল্লাহ!
                        </blockquote>
                        <div class="flex items-center gap-4 mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-1.png"
                                    alt="<?php esc_attr_e('মো. ইমরান হোসেনের প্রোফাইল ছবি', 'nqa'); ?>" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <cite class="text-primary text-body font-semibold leading-[150%] m-0">মো. ইমরান হোসেন</cite>
                                <div class="text-secondary text-sm font-normal leading-[150%]">শিক্ষার্থী</div>
                            </div>
                        </div>
                    </article>

                    <!-- Feedback Card 5 -->
                    <article
                    class="swiper-slide flex flex-col bg-white rounded-xl overflow-hidden border border-[#f0f0f0] shadow-[0px_2px_4px_0px_rgba(0,0,0,0.05)] p-6 gap-4 hover:-translate-y-0.5 transition-transform duration-200 min-h-[240px] md:min-h-[285px] relative"
                    role="listitem">
                    <img class="absolute bottom-4 right-4 w-[25px] h-[52px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/qutation.svg"
                       alt="<?php esc_attr_e('উদ্ধৃতি চিহ্ন', 'nqa'); ?>" aria-hidden="true" />
                    <blockquote class="text-primary text-body leading-[150%] font-normal m-0 flex-1">
                        ঘরে বসেই বিশ্বস্ত ইসলামিক জ্ঞান লাভ করা যায় এই প্ল্যাটফর্ম থেকে। ইউজার ইন্টারফেস খুব সহজ, ভিডিওগুলো
                        মানসম্পন্ন এবং প্রতিটি কোর্স সুন্দরভাবে সাজানো। আমি আমার বন্ধুদেরও রেফার করছি।
                    </blockquote>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-2.png"
                                alt="<?php esc_attr_e('শামিমা আক্তারের  প্রোফাইল ছবি', 'nqa'); ?>" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <cite class="text-primary text-body font-semibold leading-[150%] m-0">শামিমা আক্তার</cite>
                            <div class="text-secondary text-sm font-normal leading-[150%]">শিক্ষার্থী</div>
                        </div>
                    </div>
                    </article>
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