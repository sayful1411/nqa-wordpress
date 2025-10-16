<!-- Blog -->
<section class="bg-[#fffcf8] min-h-screen relative">
    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-bg.png')"
        class="container mx-auto bg-cover bg-center bg-no-repeat min-h-[693px] py-16 sm:py-20 lg:py-24">
        <div class="max-w-[1107px] mx-auto px-4 flex flex-col items-center gap-10">
            <div class="flex flex-col items-center gap-10 text-left w-full">
                <!-- Title -->
                <div class="flex items-start justify-start gap-3 flex-wrap">
                    <h2 class="text-h2 font-medium leading-normal text-primary mb-0">পছন্দের <span
                            class="text-gradient bg-clip-text text-transparent">ব্লগ</span> পড়ুন</h2>
                </div>

                <!-- Blog Cards Carousel -->
                <div class="swiper blogSwiper w-full max-w-[1107px]">
                    <div class="swiper-wrapper">
                        <!-- Blog Card 1 -->
                        <article
                            class="swiper-slide mb-5 flex flex-col bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.15)] overflow-hidden">
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-01.png')" class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="একজন হাফেজা ছাত্রীর সাক্ষাৎকার">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        একজন হাফেজা ছাত্রীর সাক্ষাৎকার
                                    </h2>
                                </div>
                            </header>
                            <div class="p-4 sm:p-5 flex flex-col gap-3 flex-grow">
                                <div class="flex flex-col gap-3 text-left">
                                    <p class="text-[14px] font-normal text-primary leading-[150%] mb-0">হাফেজ
                                        সুলাইমান
                                        হাবিব</p>
                                    <h3 class="text-h6 font-semibold text-primary leading-[150%] mb-0">একজন
                                        হাফেজা
                                        ছাত্রীর সাক্ষাৎকার এবং আগামীর ভাবনা</h3>
                                    <div class="flex items-center gap-2 mt-auto">
                                        <time
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0"
                                            datetime="2025-03-14">১৪ মার্চ ২০২৫</time>
                                        <span class="w-1 h-1 bg-secondary rounded-full flex-shrink-0"
                                            aria-hidden="true"></span>
                                        <span
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0">৭
                                            মিনিট</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Card 2 -->
                        <article
                            class="swiper-slide mb-5 flex flex-col bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.15)] overflow-hidden">
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-02.png')" class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="আমার হিফজ-যাত্রা ও পরবর্তী গল্প">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        আমার হিফজ-যাত্রা ও পরবর্তী গল্প</h2>
                                </div>
                            </header>
                            <div class="p-4 sm:p-5 flex flex-col gap-3 flex-grow">
                                <div class="flex flex-col gap-3 text-left">
                                    <p class="text-[14px] font-normal text-primary leading-[150%] mb-0">হাফেজ
                                        সুলাইমান
                                        হাবিব</p>
                                    <h3
                                        class="text-h6 font-semibold text-primary leading-[150%] mb-0 min-h-[54px] line-clamp-2">
                                        আমার হিফজ-যাত্রা যেভাবে শুরু হয়েছিলো এবং পরবর্তী গল্প
                                    </h3>
                                    <div class="flex items-center gap-2 mt-auto">
                                        <time
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0"
                                            datetime="2025-03-14">১৪ মার্চ ২০২৫</time>
                                        <span class="w-1 h-1 bg-secondary rounded-full flex-shrink-0"
                                            aria-hidden="true"></span>
                                        <span
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0">৭
                                            মিনিট</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Card 3 -->
                        <article
                            class="swiper-slide mb-5 flex flex-col bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.15)] overflow-hidden">
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-03.png')" class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="সন্তানের আরবির চর্চা কীভাবে শুরু করবেন">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        সন্তানের আরবির চর্চা কীভাবে শুরু করবেন</h2>
                                </div>
                            </header>
                            <div class="p-4 sm:p-5 flex flex-col gap-3 flex-grow">
                                <div class="flex flex-col gap-3 text-left">
                                    <p class="text-[14px] font-normal text-primary leading-[150%] mb-0">হাফেজ
                                        সুলাইমান
                                        হাবিব</p>
                                    <h3
                                        class="text-h6 font-semibold text-primary leading-[150%] mb-0 min-h-[54px] line-clamp-2">
                                        আপনার সন্তানের আরবির চর্চা কীভাবে শুরু করবেন জানুন বিস্তারিত
                                    </h3>
                                    <div class="flex items-center gap-2 mt-auto">
                                        <time
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0"
                                            datetime="2025-03-14">১৪ মার্চ ২০২৫</time>
                                        <span class="w-1 h-1 bg-secondary rounded-full flex-shrink-0"
                                            aria-hidden="true"></span>
                                        <span
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0">৭
                                            মিনিট</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Card 4 -->
                        <article
                            class="swiper-slide mb-5 flex flex-col bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.15)] overflow-hidden">
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-01.png')" class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="কুরআন মুখস্থের উপকারিতা">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        কুরআন মুখস্থের উপকারিতা
                                    </h2>
                                </div>
                            </header>
                            <div class="p-4 sm:p-5 flex flex-col gap-3 flex-grow">
                                <div class="flex flex-col gap-3 text-left">
                                    <p class="text-[14px] font-normal text-primary leading-[150%] mb-0">হাফেজ
                                        সুলাইমান
                                        হাবিব</p>
                                    <h3
                                        class="text-h6 font-semibold text-primary leading-[150%] mb-0 min-h-[54px] line-clamp-2">
                                        কুরআন মুখস্থ করার মানসিক ও আধ্যাত্মিক উপকারিতা সম্পর্কে জানুন
                                    </h3>
                                    <div class="flex items-center gap-2 mt-auto">
                                        <time
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0"
                                            datetime="2025-03-15">১৫ মার্চ ২০২৫</time>
                                        <span class="w-1 h-1 bg-secondary rounded-full flex-shrink-0"
                                            aria-hidden="true"></span>
                                        <span
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0">৫
                                            মিনিট</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Card 5 -->
                        <article
                            class="swiper-slide mb-5 flex flex-col bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.15)] overflow-hidden">
                            <header class="relative h-[246px] bg-[#ededed] overflow-hidden">
                                <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-02.png')" class="w-full h-full bg-cover bg-center bg-no-repeat"
                                    role="img" aria-label="অনলাইন কুরআন শিক্ষা">
                                    <h2
                                        class="absolute bottom-7 left-7 right-7 w-[60%] text-white text-h6 font-normal leading-[120%] mb-0 line-clamp-2 text-left">
                                        অনলাইন কুরআন শিক্ষা
                                    </h2>
                                </div>
                            </header>
                            <div class="p-4 sm:p-5 flex flex-col gap-3 flex-grow">
                                <div class="flex flex-col gap-3 text-left">
                                    <p class="text-[14px] font-normal text-primary leading-[150%] mb-0">হাফেজ
                                        সুলাইমান
                                        হাবিব</p>
                                    <h3
                                        class="text-h6 font-semibold text-primary leading-[150%] mb-0 min-h-[54px] line-clamp-2">
                                        অনলাইনে কুরআন শিক্ষার সুবিধা এবং কীভাবে শুরু করবেন
                                    </h3>
                                    <div class="flex items-center gap-2 mt-auto">
                                        <time
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0"
                                            datetime="2025-03-16">১৬ মার্চ ২০২৫</time>
                                        <span class="w-1 h-1 bg-secondary rounded-full flex-shrink-0"
                                            aria-hidden="true"></span>
                                        <span
                                            class="text-[14px] font-normal text-secondary leading-[150%] whitespace-nowrap mb-0">৬
                                            মিনিট</span>
                                    </div>
                                </div>
                            </div>
                        </article>
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