<!-- Special Offer -->
<section class="py-4 px-8 md:px-6 lg:px-8 bg-white overflow-hidden" role="main">
    <div class="flex flex-col items-center gap-10 max-w-[1106px] mx-auto">
        <header
            class="flex items-center justify-center gap-3 flex-wrap text-h2">
            <h2 class="text-h2 text-black-heading m-0">স্পেশাল</h2>
            <h2 class="text-h2 text-gradient bg-clip-text text-transparent m-0">অফার</h2>
            <h2 class="text-h2 text-black-heading m-0">কোর্স সমূহ</h2>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-full justify-items-center">
            <!-- Course Card 1 -->
            <article
                class="w-full max-w-[342px] bg-white rounded-xl overflow-hidden border border-gray-200 flex flex-col transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="relative w-full h-[186px] overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(42deg,_#250210_0%,_#222477_49%,_#3f76eb_100%)]"></div>
                    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
                    <img class="absolute top-0 right-0 w-[189px] h-[186px] object-cover mix-blend-luminosity"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/course-4.png" alt="<?php esc_attr_e('প্রাথমিক দ্বীন শিক্ষা কোর্সের চিত্র', 'nqa'); ?>" />
                    <div class="absolute top-[34px] left-[31px] flex flex-col max-w-[172px] z-10">
                        <h2 class="text-h2 text-white m-0 leading-none">প্রাথমিক</h2>
                        <h2 class="text-h2 text-white m-0 leading-none">দ্বীন শিক্ষা</h2>
                    </div>
                    <div
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center py-2 px-3 rounded-full border border-white bg-gradient-primary z-10">
                        <span class="text-sm text-white font-normal">২৫% ছাড়</span>
                    </div>
                </div>

                <div class="flex flex-col p-4 gap-4 flex-1">
                    <div
                        class="flex items-center justify-between py-2 px-3 bg-white rounded-[23px] shadow-sm gap-2">
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('পাঠ আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                ২৫ টি লেসন
                            </span>
                        </div>
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('শিক্ষার্থী আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                ৫২ স্টুডেন্ট
                            </span>
                        </div>
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('ক্লাসের ধরন আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                রেকর্ডেড ক্লাস
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 flex-1">
                        <div class="flex flex-col gap-2 min-h-[108px]">
                            <a href="#"
                                class="text-h6 text-black font-bold m-0">
                                প্রাথমিক আরবীভাষা শিক্ষার মাধ্যমে শুরু করুন আপনার যাত্রা
                            </a>
                            <p
                                class="text-secondary m-0 flex-1">
                                এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা
                                জানতে পারবেন
                            </p>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-5">
                                <span class="text-h4 whitespace-nowrap m-0">২৫০৳</span>
                                <span
                                    class="text-h6 text-black-heading line-through whitespace-nowrap m-0">৮৫০৳</span>
                            </div>
                            <button
                                class="border-gradient-primary relative inline-flex h-10 items-center justify-center gap-2.5 py-2.5 px-4 bg-white rounded-full border-none cursor-pointer transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md focus-visible:outline-2 focus-visible:outline-blue-500 focus-visible:outline-offset-2"
                                type="button" aria-label="প্রাথমিক দ্বীন শিক্ষা কোর্সের বিস্তারিত দেখুন">
                                <span
                                    class="text-body whitespace-nowrap m-0">বিস্তারিত</span>
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow-right', 'nqa'); ?>" />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Course Card 2 -->
            <article
                class="w-full max-w-[342px] bg-white rounded-xl overflow-hidden border border-gray-200 flex flex-col transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="relative w-full h-[186px] overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(42deg,_#250210_0%,_#773c22_49%,_#eba93f_100%)]"></div>
                    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
                    <img class="absolute top-0 right-0 w-[189px] h-[186px] object-cover mix-blend-luminosity"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/course-7.png" alt="<?php esc_attr_e('ইসলামের দৃষ্টিতে গীবত কোর্সের চিত্র', 'nqa'); ?>" />
                    <div class="absolute top-[34px] left-[31px] flex flex-col max-w-[172px] z-10">
                        <h2 class="text-h2 text-white m-0 leading-none">ইসলামের</h2>
                        <h2 class="text-h2 text-white m-0 leading-none">দৃষ্টিতে গীবত</h2>
                    </div>
                    <div
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center py-2 px-3 rounded-full border border-white bg-gradient-primary z-10">
                        <span class="text-sm text-white font-normal">২২% ছাড়</span>
                    </div>
                </div>

                <div class="flex flex-col p-4 gap-4 flex-1">
                    <div
                        class="flex items-center justify-between py-2 px-3 bg-white rounded-[23px] shadow-sm gap-2">
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('পাঠ আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                ২৫ টি লেসন
                            </span>
                        </div>
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('শিক্ষার্থী আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                ৫২ স্টুডেন্ট</span>
                        </div>
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('ক্লাসের ধরন আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                লাইভ ক্লাস
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 flex-1">
                        <div class="flex flex-col gap-2 min-h-[108px]">
                            <a href="#"
                                class="text-h6 text-black font-bold m-0">
                                ইসলামের দৃষ্টিতে গীবত ও তার অপকারিতা সম্পর্কে জানুন
                            </a>
                            <p
                                class="text-secondary m-0 flex-1">
                                এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা
                                জানতে পারবেন
                            </p>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-5">
                                <span class="text-h4 whitespace-nowrap m-0">২৫০৳</span>
                                <span
                                    class="text-h6 line-through whitespace-nowrap m-0">৮৫০৳</span>
                            </div>
                            <button
                                class="border-gradient-primary relative inline-flex h-10 items-center justify-center gap-2.5 py-2.5 px-4 bg-white rounded-full border-none cursor-pointer transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md focus-visible:outline-2 focus-visible:outline-blue-500 focus-visible:outline-offset-2"
                                type="button" aria-label="ইসলামের দৃষ্টিতে গীবত কোর্সের বিস্তারিত দেখুন">
                                <span
                                    class="text-body whitespace-nowrap m-0">বিস্তারিত</span>
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow right', 'nqa'); ?>" />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Course Card 3 -->
            <article
                class="w-full max-w-[342px] bg-white rounded-xl overflow-hidden border border-gray-200 flex flex-col transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="relative w-full h-[186px] overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(42deg,_#250210_0%,_#5f2277_49%,_#eb3fc6_100%)]"></div>
                    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
                    <img class="absolute top-0 right-0 w-[189px] h-[186px] object-cover mix-blend-luminosity"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/course-8.png" alt="<?php esc_attr_e('আম্মাপারার তরজমা কোর্সের চিত্র', 'nqa'); ?>" />
                    <div class="absolute top-[34px] left-[31px] flex flex-col max-w-[172px] z-10">
                        <h2 class="text-h2 text-white m-0 leading-none">আম্মাপারার</h2>
                        <h2 class="text-h2 text-white m-0 leading-none">তরজমা</h2>
                    </div>
                    <div
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center py-2 px-3 rounded-full border border-white bg-gradient-primary z-10">
                        <span class="text-sm text-white font-normal">৫২% ছাড়</span>
                    </div>
                </div>

                <div class="flex flex-col p-4 gap-4 flex-1">
                    <div
                        class="flex items-center justify-between py-2 px-3 bg-white rounded-[23px] shadow-sm gap-2">
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('পাঠ আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                ২৫ টি লেসন
                            </span>
                        </div>
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('শিক্ষার্থী আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                ৫২ স্টুডেন্ট
                            </span>
                        </div>
                        <div class="flex items-center gap-1.5 flex-1 justify-center">
                            <img class="w-3.5 h-3.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('ক্লাসের ধরন আইকন', 'nqa'); ?>" />
                            <span
                                class="text-secondary text-xs whitespace-nowrap">
                                লাইভ ক্লাস
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 flex-1">
                        <div class="flex flex-col gap-2 min-h-[108px]">
                            <a href="#"
                                class="text-h6 text-black font-bold m-0">
                                প্রাথমিক আরবীভাষা শিক্ষার  মাধ্যমে শুরু করুন আপনার যাত্রা
                            </a>
                            <p
                                class="text-secondary m-0 flex-1">
                                এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা
                                জানতে পারবেন
                            </p>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-5">
                                <span class="text-h4 text-black-heading whitespace-nowrap m-0">৪৫০৳</span>
                                <span
                                    class="text-h6 line-through whitespace-nowrap m-0">৮৫০৳</span>
                            </div>
                            <button
                                class="border-gradient-primary relative inline-flex h-10 items-center justify-center gap-2.5 py-2.5 px-4 bg-white rounded-full border-none cursor-pointer transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md focus-visible:outline-2 focus-visible:outline-blue-500 focus-visible:outline-offset-2"
                                type="button" aria-label="আম্মাপারার তরজমা কোর্সের বিস্তারিত দেখুন">
                                <span
                                    class="text-body whitespace-nowrap m-0">বিস্তারিত</span>
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow right', 'nqa'); ?>" />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>