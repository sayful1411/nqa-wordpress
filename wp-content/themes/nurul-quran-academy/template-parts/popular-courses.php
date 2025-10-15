<!-- Popular Courses -->
<section class="w-full max-w-[1106px] mx-auto py-16 px-8 bg-[#fefefe] md:py-20 md:px-10">
    <div class="flex flex-col gap-10 md:gap-16 xl:gap-18">
    <!-- Header Section -->
    <div class="flex flex-col gap-8 md:gap-10">
        <div class="flex flex-col gap-8 md:gap-10">
        <!-- Title and View All Button -->
        <div class="flex items-center justify-center gap-4 md:gap-6">
            <h2 class="text-primary text-h2 font-bold m-0">
            <span class="text-gradient bg-clip-text text-transparent">জনপ্রিয়</span> কোর্স সমূহ
            </h2>
            <button
            class="border-gradient-primary relative h-12 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer md:px-6">
            <span class="text-primary text-sm leading-6 whitespace-nowrap md:text-base">সব কোর্স দেখুন</span>
            </button>
        </div>

        <!-- Category Filter -->
        <nav class="relative w-full max-w-[1106px] mx-auto" aria-label="Course categories">
            <ul class="hide-scrollbar flex items-center gap-3 flex-nowrap overflow-x-auto md:gap-[18px]">
            <!-- Popular Courses - Active -->
            <li
                class="gradient-border-active relative flex min-w-[160px] items-center gap-3 p-2.5 bg-white rounded-lg border-none shadow-sm flex-shrink-0 cursor-pointer transition-all duration-300 md:min-w-[180px] md:p-3 xl:min-w-[204px]">
                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heart.svg" alt="<?php esc_attr_e('popular-courses-item', 'nqa'); ?>" class="max-w-full max-h-full object-contain" />
                </div>
                <div class="flex flex-col flex-1">
                <h3 class="text-primary text-base leading-6 m-0">জনপ্রিয় কোর্স সমূহ</h3>
                <div class="flex items-center gap-1.5">
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">১১ টি কোর্স</span>
                    <div class="bg-[linear-gradient(103deg,rgba(41,160,182,1)0%,rgba(176,195,67,1)100%)] w-1 h-1 rounded-full flex-shrink-0"></div>
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">৫২ টি ক্লাস</span>
                </div>
                </div>
            </li>

            <!-- Arabic Language -->
            <li
                class="flex min-w-[160px] items-center gap-3 p-2.5 bg-white rounded-lg border border-muted shadow-sm flex-shrink-0 cursor-pointer transition-all duration-300 hover:shadow-lg md:min-w-[180px] md:p-3 xl:min-w-[204px]">
                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/game-icons_arabic-door.svg" alt="<?php esc_attr_e('language-icon', 'nqa'); ?>"
                    class="max-w-full max-h-full object-contain" />
                </div>
                <div class="flex flex-col flex-1">
                <h3 class="text-primary text-base leading-6 m-0">আরবি ভাষা</h3>
                <div class="flex items-center gap-1.5">
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">১২ টি কোর্স</span>
                    <div class="bg-[linear-gradient(103deg,rgba(41,160,182,1)0%,rgba(176,195,67,1)100%)] w-1 h-1 rounded-full flex-shrink-0"></div>
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">৫২ টি ক্লাস</span>
                </div>
                </div>
            </li>

            <!-- Quran Education -->
            <li
                class="flex min-w-[160px] items-center gap-3 p-2.5 bg-white rounded-lg border border-muted shadow-sm flex-shrink-0 cursor-pointer transition-all duration-300 hover:shadow-lg md:min-w-[180px] md:p-3 xl:min-w-[204px]">
                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BookBookmark.svg" alt="<?php esc_attr_e('education-icon', 'nqa'); ?>"
                    class="max-w-full max-h-full object-contain" />
                </div>
                <div class="flex flex-col flex-1">
                <h3 class="text-primary text-base leading-6 m-0">কুরআন শিক্ষা</h3>
                <div class="flex items-center gap-1.5">
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">৯ টি কোর্স</span>
                    <div class="bg-[linear-gradient(103deg,rgba(41,160,182,1)0%,rgba(176,195,67,1)100%)] w-1 h-1 rounded-full flex-shrink-0"></div>
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">৫২ টি ক্লাস</span>
                </div>
                </div>
            </li>

            <!-- Sirat -->
            <li
                class="flex min-w-[160px] items-center gap-3 p-2.5 bg-white rounded-lg border border-muted shadow-sm flex-shrink-0 cursor-pointer transition-all duration-300 hover:shadow-lg md:min-w-[180px] md:p-3 xl:min-w-[204px]">
                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MoonStars.svg" alt="<?php esc_attr_e('Serat-icon', 'nqa'); ?>" class="max-w-full max-h-full object-contain" />
                </div>
                <div class="flex flex-col flex-1">
                <h3 class="text-primary text-base leading-6 m-0">সীরাত</h3>
                <div class="flex items-center gap-1.5">
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">২ টি কোর্স</span>
                    <div class="bg-[linear-gradient(103deg,rgba(41,160,182,1)0%,rgba(176,195,67,1)100%)] w-1 h-1 rounded-full flex-shrink-0"></div>
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">৫ টি ক্লাস</span>
                </div>
                </div>
            </li>

            <!-- Pre-recorded Courses -->
            <li
                class="flex min-w-[160px] items-center gap-3 p-2.5 bg-white rounded-lg border border-muted shadow-sm flex-shrink-0 cursor-pointer transition-all duration-300 hover:shadow-lg md:min-w-[180px] md:p-3 xl:min-w-[204px]">
                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VideoCamera.svg" alt="<?php esc_attr_e('recorded class icon', 'nqa'); ?>"
                    class="max-w-full max-h-full object-contain" />
                </div>
                <div class="flex flex-col flex-1">
                <h3 class="text-primary text-base leading-6 m-0">প্রি-রেকর্ডেড কোর্স</h3>
                <div class="flex items-center gap-1.5">
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">৫ টি কোর্স</span>
                    <div class="bg-[linear-gradient(103deg,rgba(41,160,182,1)0%,rgba(176,195,67,1)100%)] w-1 h-1 rounded-full flex-shrink-0"></div>
                    <span class="text-secondary text-sm leading-6 whitespace-nowrap">২৫ টি ক্লাস</span>
                </div>
                </div>
            </li>
            </ul>

            <!-- Navigation Button -->
            <button
            class="absolute top-1/2 right-0 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-[#d9d9d9] rounded-full border-none cursor-pointer z-[2] hidden md:flex">
            <img class="w-5 h-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('nav-arrow', 'nqa'); ?>" />
            </button>
        </nav>
        </div>
    </div>

    <!-- Course Grid -->
    <section class="flex flex-col gap-8 md:gap-10 xl:gap-[41px]">
        <!-- First Row -->
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-[30px] xl:grid-cols-3 xl:gap-10">
        <!-- Course Card 1 -->
        <article
            class="w-full max-w-[342px] mx-auto bg-white rounded-xl overflow-hidden border border-[#e8e8e8] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)]">
            <header class="relative w-full h-[186px] overflow-hidden">
            <div class="bg-[linear-gradient(75deg,rgba(37,2,16,1)_0%,rgba(248,79,81,1)_52%,rgba(250,111,33,1)_100%)] absolute inset-0 bg-cover bg-center"></div>
            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
            <img class="absolute w-[189px] h-[186px] top-0 right-0 object-cover mix-blend-luminosity"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/course-1.png" alt="<?php esc_attr_e('arrow-right', 'nqa'); ?>" />
            <div class="absolute top-[34px] left-[31px] max-w-[172px]">
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">প্রাথমিক</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">আরবীভাষা</h3>
                <h3 class="text-white text-xl font-medium leading-[1.3] m-0">শিক্ষা</h3>
            </div>
            </header>
            <div class="p-3 flex flex-col gap-4 md:p-4">
            <!-- Stats -->
            <div
                class="flex justify-between items-center px-3 py-2 bg-white rounded-[23px] shadow-[0px_1px_5px_#00000029]">
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('lessons', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">২৫ টি লেসন</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('students', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">৫২ স্টুডেন্ট</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('live-class', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">লাইভ ক্লাস</span>
                </div>
            </div>
            <!-- Info -->
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                <h4 class="text-primary text-base font-semibold leading-[1.4] m-0">প্রাথমিক আরবীভাষা
                    শিক্ষার মাধ্যমে শুরু করুন আপনার যাত্রা</h4>
                <p class="text-secondary text-sm leading-6 m-0">
                    এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা জানতে পারবেন
                </p>
                </div>
                <footer class="flex items-center justify-between">
                <div class="flex items-center gap-5">
                    <span
                    class="text-primary text-xl font-medium leading-[1.3] whitespace-nowrap m-0">৪৫০৳</span>
                    <span class="text-primary text-lg font-normal leading-6 line-through">৮৫০৳</span>
                </div>
                <button
                    class="border-gradient-primary relative h-10 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer">
                    <span class="text-primary text-base leading-6 whitespace-nowrap">বিস্তারিত</span>
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow', 'nqa'); ?>" />
                </button>
                </footer>
            </div>
            </div>
        </article>

        <!-- Course Card 2 -->
        <article
            class="w-full max-w-[342px] mx-auto bg-white rounded-xl overflow-hidden border border-[#e8e8e8] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)]">
            <header class="relative w-full h-[186px] overflow-hidden">
            <div class="bg-[linear-gradient(77deg,rgba(37,2,16,1)0%,rgba(41,103,74,1)52%,rgba(46,175,204,1)100%)] absolute inset-0 bg-cover bg-center"></div>
            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
            <img class="absolute w-[189px] h-[186px] top-0 right-0 object-cover mix-blend-luminosity"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/course-2.png" alt="<?php esc_attr_e('course', 'nqa'); ?>" />
            <div class="absolute top-[34px] left-[31px] max-w-[172px]">
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">কুরআন</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">ও সালাত</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">অনুধাবন</h3>
            </div>
            </header>
            <div class="p-3 flex flex-col gap-4 md:p-4">
            <!-- Stats -->
            <div
                class="flex justify-between items-center px-3 py-2 bg-white rounded-[23px] shadow-[0px_1px_5px_#00000029]">
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('lessons', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">২৫ টি লেসন</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('students', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">৫২ স্টুডেন্ট</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('recorded class', 'nqa'); ?>"  />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">রেকর্ডেড ক্লাস</span>
                </div>
            </div>
            <!-- Info -->
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                <h4 class="text-primary text-base font-semibold leading-[1.4] m-0">কুরআন ও সালাত
                    অনুধাবন কোর্স করে হয়ে উঠুন আদর্শ মুসলিম</h4>
                <p class="text-secondary text-sm leading-6 m-0">
                    এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা জানতে পারবেন
                </p>
                </div>
                <footer class="flex items-center justify-between">
                <span class="text-[#1e7e43] text-[28px] font-normal leading-normal whitespace-nowrap m-0">ফ্রী
                    কোর্স</span>
                <button
                    class="border-gradient-primary relative h-10 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer">
                    <span class="text-primary text-base leading-6 whitespace-nowrap">বিস্তারিত</span>
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow', 'nqa'); ?>" " />
                </button>
                </footer>
            </div>
            </div>
        </article>

        <!-- Course Card 3 -->
        <article
            class="w-full max-w-[342px] mx-auto bg-white rounded-xl overflow-hidden border border-[#e8e8e8] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)]">
            <header class="relative w-full h-[186px] overflow-hidden">
            <div class="bg-[linear-gradient(77deg,rgba(37,2,16,1)0%,rgba(103,103,41,1)52%,rgba(204,172,46,1)100%)] absolute inset-0 bg-cover bg-center"></div>
            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
            <img class="absolute w-[189px] h-[186px] top-0 right-0 object-cover mix-blend-luminosity"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/course-3.png" alt="<?php esc_attr_e('আরবী হাতের লেখা কোর্স', 'nqa'); ?>" />
            <div class="absolute top-[34px] left-[31px] max-w-[172px]">
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">আরবী</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">হাতের</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">লেখা</h3>
            </div>
            </header>
            <div class="p-3 flex flex-col gap-4 md:p-4">
            <!-- Stats -->
            <div
                class="flex justify-between items-center px-3 py-2 bg-white rounded-[23px] shadow-[0px_1px_5px_#00000029]">
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('lessons', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">২৫ টি লেসন</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('students', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">৫২ স্টুডেন্ট</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('live-class', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">লাইভ ক্লাস</span>
                </div>
            </div>
            <!-- Info -->
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                <h4 class="text-primary text-base font-semibold leading-[1.4] m-0">প্রাথমিক আরবীভাষা
                    শিক্ষার মাধ্যমে শুরু করুন আপনার যাত্রা</h4>
                <p class="text-secondary text-sm leading-6 m-0">
                    এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা জানতে পারবেন
                </p>
                </div>
                <footer class="flex items-center justify-between">
                <div class="flex items-center gap-5">
                    <span
                    class="text-primary text-xl font-medium leading-[1.3] whitespace-nowrap m-0">৪৫০৳</span>
                    <span class="text-primary text-lg font-normal leading-6 line-through">৮৫০৳</span>
                </div>
                <button
                    class="border-gradient-primary relative h-10 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer">
                    <span class="text-primary text-base leading-6 whitespace-nowrap">বিস্তারিত</span>
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow', 'nqa'); ?>" />" />
                </button>
                </footer>
            </div>
            </div>
        </article>
        </div>

        <!-- Second Row -->
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-[30px] xl:grid-cols-3 xl:gap-10">
        <!-- Course Card 4 -->
        <article
            class="w-full max-w-[342px] mx-auto bg-white rounded-xl overflow-hidden border border-[#e8e8e8] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)]">
            <header class="relative w-full h-[186px] overflow-hidden">
            <div class="bg-[linear-gradient(42deg,rgba(37,2,16,1)0%,rgba(34,36,119,1)49%,rgba(63,118,235,1)100%)] absolute inset-0 bg-cover bg-center"></div>
            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
            <img class="absolute w-[189px] h-[186px] top-0 right-0 object-cover mix-blend-luminosity"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/course-4.png" alt="<?php esc_attr_e('প্রাথমিক দ্বীন শিক্ষা কোর্স', 'nqa'); ?>" />
            <div class="absolute top-[34px] left-[31px] max-w-[172px]">
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">প্রাথমিক</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">দ্বীন শিক্ষা</h3>
            </div>
            </header>
            <div class="p-3 flex flex-col gap-4 md:p-4">
            <!-- Stats -->
            <div
                class="flex justify-between items-center px-3 py-2 bg-white rounded-[23px] shadow-[0px_1px_5px_#00000029]">
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('lessons', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">২৫ টি লেসন</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('students', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">৫২ স্টুডেন্ট</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('recorded-class', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">রেকর্ডেড ক্লাস</span>
                </div>
            </div>
            <!-- Info -->
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                <h4 class="text-primary text-base font-semibold leading-[1.4] m-0">প্রাথমিক দ্বীন
                    শিক্ষা কোর্স করে শুরু করুন আপনার ইসলাম যত্রা</h4>
                <p class="text-secondary text-sm leading-6 m-0">
                    এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা জানতে পারবেন
                </p>
                </div>
                <footer class="flex items-center justify-between">
                <span class="text-[#1e7e43] text-[28px] font-normal leading-normal whitespace-nowrap m-0">ফ্রী
                    কোর্স</span>
                <button
                    class="border-gradient-primary relative h-10 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer">
                    <span class="text-primary text-base leading-6 whitespace-nowrap">বিস্তারিত</span>
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('recorded-class', 'nqa'); ?>" />
                </button>
                </footer>
            </div>
            </div>
        </article>

        <!-- Course Card 5 -->
        <article
            class="w-full max-w-[342px] mx-auto bg-white rounded-xl overflow-hidden border border-[#e8e8e8] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)]">
            <header class="relative w-full h-[186px] overflow-hidden">
            <div class="bg-[linear-gradient(65deg,rgba(37,2,16,1)0%,rgba(118,85,53,1)52%,rgba(168,113,65,1)100%)] absolute inset-0 bg-cover bg-center"></div>
            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
            <img class="absolute w-[189px] h-[186px] top-0 right-0 object-cover mix-blend-luminosity"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/course-5.png" alt="ব্যাসিক আকীদা শিক্ষা কোর্স" />
            <div class="absolute top-[34px] left-[31px] max-w-[172px]">
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">ব্যাসিক</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">আকীদা</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">শিক্ষা</h3>
            </div>
            </header>
            <div class="p-3 flex flex-col gap-4 md:p-4">
            <!-- Stats -->
            <div
                class="flex justify-between items-center px-3 py-2 bg-white rounded-[23px] shadow-[0px_1px_5px_#00000029]">
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('lessons', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">২৫ টি লেসন</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('students', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">৫২ স্টুডেন্ট</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('recorded-class', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">রেকর্ডেড ক্লাস</span>
                </div>
            </div>
            <!-- Info -->
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                <h4 class="text-primary text-base font-semibold leading-[1.4] m-0">ব্যাসিক আকীদা
                    কোর্স
                    করে সমৃদ্ধ করুন নিজের জ্ঞানের পরিধি</h4>
                <p class="text-secondary text-sm leading-6 m-0">
                    এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা জানতে পারবেন
                </p>
                </div>
                <footer class="flex items-center justify-between">
                <span
                    class="text-primary text-xl font-medium leading-[1.3] whitespace-nowrap m-0">৫০০৳</span>
                <button
                    class="border-gradient-primary relative h-10 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer">
                    <span class="text-primary text-base leading-6 whitespace-nowrap">বিস্তারিত</span>
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow', 'nqa'); ?>" />
                </button>
                </footer>
            </div>
            </div>
        </article>

        <!-- Course Card 6 -->
        <article
            class="w-full max-w-[342px] mx-auto bg-white rounded-xl overflow-hidden border border-[#e8e8e8] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)]">
            <header class="relative w-full h-[186px] overflow-hidden">
            <div class="bg-[linear-gradient(41deg,rgba(10,11,42,1)0%,rgba(37,79,141,1)55%,rgba(27,240,255,1)100%)] absolute inset-0 bg-cover bg-center"></div>
            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/course-bg-3.png')" class="bg-cover bg-center absolute inset-0"></div>
            <img class="absolute w-[189px] h-[186px] top-0 right-0 object-cover mix-blend-luminosity"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/course-6.png" alt="<?php esc_attr_e('৩০ নং পারা হিফজ কোর্স', 'nqa'); ?> "/>
            <div class="absolute top-[34px] left-[31px] max-w-[172px]">
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">৩০ নং পারা</h3>
                <h3 class="text-white text-2xl font-semibold leading-[1.3] m-0">হিফজ</h3>
            </div>
            </header>
            <div class="p-3 flex flex-col gap-4 md:p-4">
            <!-- Stats -->
            <div
                class="flex justify-between items-center px-3 py-2 bg-white rounded-[23px] shadow-[0px_1px_5px_#00000029]">
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/lesson.svg" alt="<?php esc_attr_e('lessons', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">২৫ টি লেসন</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/student-cap.svg" alt="<?php esc_attr_e('students', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">৫২ স্টুডেন্ট</span>
                </div>
                <div class="flex items-center gap-1.5">
                <img class="w-[14px] h-[14px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/live.svg" alt="<?php esc_attr_e('recorded-class', 'nqa'); ?>" />
                <span class="text-primary text-sm leading-6 whitespace-nowrap">রেকর্ডেড ক্লাস</span>
                </div>
            </div>
            <!-- Info -->
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                <h4 class="text-primary text-base font-semibold leading-[1.4] m-0">৩০ নং পারা হিফজ
                    কোর্স করার মাধ্যমে পবিত্র কোরআন আয়ত্ব করুন</h4>
                <p class="text-secondary text-sm leading-6 m-0">
                    এই কোর্সের মাধ্যমে আপনি একদম সহজে হাতে কলমে অভিজ্ঞ শিক্ষকের মাধ্যেমে আরবি ভাষা জানতে পারবেন
                </p>
                </div>
                <footer class="flex items-center justify-between">
                <span
                    class="text-primary text-xl font-medium leading-[1.3] whitespace-nowrap m-0">৮৫০৳</span>
                <button
                    class="border-gradient-primary relative h-10 px-4 py-2.5 inline-flex items-center justify-center gap-2.5 bg-white rounded-[50px] border-none cursor-pointer">
                    <span class="text-primary text-base leading-6 whitespace-nowrap">বিস্তারিত</span>
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="<?php esc_attr_e('arrow', 'nqa'); ?>" />
                </button>
                </footer>
            </div>
            </div>
        </article>
        </div>

        <!-- Pagination -->
        <nav class="flex items-center justify-center gap-4 md:gap-4" aria-label="Course pages">
        <button
            class="text-gradient bg-clip-text text-transparent text-base leading-6 px-2 py-2 border-none bg-none transition-all duration-300 cursor-pointer md:px-3">১</button>
        <button
            class="text-secondary text-base leading-6 px-2 py-2 border-none bg-none transition-all duration-300 cursor-pointer hover:bg-[#f5f5f5] md:px-3">২</button>
        <button
            class="text-secondary text-base leading-6 px-2 py-2 border-none bg-none transition-all duration-300 cursor-pointer hover:bg-[#f5f5f5] md:px-3">৩</button>
        <span class="text-secondary text-base leading-6 px-2 py-2 md:px-3">.</span>
        <span class="text-secondary text-base leading-6 px-2 py-2 md:px-3">.</span>
        <span class="text-secondary text-base leading-6 px-2 py-2 md:px-3">.</span>
        <button
            class="text-secondary text-base leading-6 px-2 py-2 border-none bg-none transition-all duration-300 cursor-pointer hover:bg-[#f5f5f5] md:px-3">৫</button>
        </nav>
    </section>
    </div>
</section>