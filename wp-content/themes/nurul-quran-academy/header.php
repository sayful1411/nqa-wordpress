<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package nurul_quran_academy
     */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php wp_head(); ?>

  <style>
    :root {
        /* Brand Color */
        --color-brand: <?php echo esc_html(get_theme_mod('nqa_color_brand', '#9e2447')); ?>;

        /* Text Colors */
        --color-primary: <?php echo esc_html(get_theme_mod('nqa_color_primary', '#121111')); ?>;
        --color-secondary: <?php echo esc_html(get_theme_mod('nqa_color_secondary', '#535966')); ?>;
        --color-muted: <?php echo esc_html(get_theme_mod('nqa_color_muted', '#f0f0f0')); ?>;

        /* Gradients */
        --gradient-title: <?php echo esc_html(get_theme_mod('nqa_gradient_title', 'linear-gradient(90deg, #df186a, #fa6f21)')); ?>;
        --gradient-border: <?php echo esc_html(get_theme_mod('nqa_gradient_border', 'linear-gradient(103deg, #29a0b6 0%, #b0c343 100%)')); ?>;

        /* Fonts */
        --font-bengali: <?php echo stripslashes(get_theme_mod('nqa_custom_font', 'Noto Serif Bengali, Helvetica')); ?>;

        /* Font Sizes */
        --font-size-xs: <?php echo esc_html(get_theme_mod('nqa_font_size_xs', '11px')); ?>;
        --font-size-sm: <?php echo esc_html(get_theme_mod('nqa_font_size_sm', '14px')); ?>;
        --font-size-base: <?php echo esc_html(get_theme_mod('nqa_font_size_base', '16px')); ?>;
        --font-size-lg: <?php echo esc_html(get_theme_mod('nqa_font_size_lg', '19px')); ?>;
        --font-size-xl: <?php echo esc_html(get_theme_mod('nqa_font_size_xl', '23px')); ?>;
        --font-size-2xl: <?php echo esc_html(get_theme_mod('nqa_font_size_2xl', '28px')); ?>;
        --font-size-3xl: <?php echo esc_html(get_theme_mod('nqa_font_size_3xl', '33px')); ?>;
        --font-size-4xl: <?php echo esc_html(get_theme_mod('nqa_font_size_4xl', '40px')); ?>;
        --font-size-5xl: <?php echo esc_html(get_theme_mod('nqa_font_size_5xl', '48px')); ?>;
    }
  </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Offer Banner -->
<div class="w-full bg-[#9b1b40]" role="banner">
	<div
		class="relative flex items-center justify-between min-h-[40px] px-4 gap-2 md:gap-4 sm:px-3 xs:px-2 xs:gap-1">
		<img class="absolute left-4 flex-shrink-0 h-6 w-auto mix-blend-luminosity object-cover sm:h-8 md:h-10"
			src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-2.png"
			alt="<?php esc_attr_e('Offer Image 1', 'nqa'); ?>" />

		<div class="flex-1 flex justify-center items-center mx-1 sm:mx-2 md:mx-4">
			<h6 class="font-normal m-0 text-body text-center leading-tight text-white">
				ছোটদের কোরআন শিক্ষা কোর্সে
			</h6>
		</div>

		<div class="flex items-center gap-1 flex-shrink-0 sm:gap-2 md:gap-4">
			<img class="absolute right-4 h-6 w-auto mix-blend-luminosity object-cover sm:h-8 md:h-10"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-1.png"
				alt="<?php esc_attr_e('Offer Image 2', 'nqa'); ?>" />
			<button
				class="w-5 h-5 cursor-pointer bg-transparent border-none p-0 flex items-center justify-center rounded transition-opacity duration-200 hover:opacity-80 focus:outline-2 focus:outline-offset-2 sm:w-6 sm:h-6"
				type="button" aria-label="বন্ধ করুন">
				<img class="w-4 h-4 sm:w-5 sm:h-5"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/x-circle.svg"
				alt="<?php esc_attr_e('x-circle', 'nqa'); ?>" />
			</button>
		</div>
	</div>
</div>

<!-- Header -->
<header class="flex w-full items-center justify-between px-10 py-4 bg-white box-border md:flex-col lg:flex-row"
	role="banner">
	<div class="flex items-center gap-0 flex-shrink-0 md:gap-12">
		<img class="w-[120px] h-auto aspect-[2.62] object-cover md:w-[163px]"
			src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
			alt="<?php esc_attr_e('Logo', 'nqa'); ?>" />

		<nav class="relative hidden md:flex items-center gap-3 flex-shrink-0"
			role="navigation"
			aria-label="Main navigation"
			x-data="{ coursesOpen: false }"
			@click.outside="coursesOpen = false">
			<a href="#special-offer"
				class="nav-link-special relative flex items-center justify-center gap-2 px-2 py-2.5 flex-shrink-0 rounded-lg border-none no-underline bg-transparent cursor-pointer transition-colors duration-200 hover:bg-black/5"
				aria-label="স্পেশাল অফার">
				<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">স্পেশাল অফার</span>
			</a>

			<a href="#free-courses"
				class="flex items-center justify-center gap-2 px-2 py-2.5 flex-shrink-0 rounded-lg border-none no-underline bg-transparent cursor-pointer transition-colors duration-200 hover:bg-black/5"
				aria-label="ফ্রী কোর্স">
				<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">ফ্রী কোর্স</span>
			</a>

			<div class="relative" x-data="{ open: false }">
				<button
					class="flex items-center justify-center gap-2 px-2 py-2.5 flex-shrink-0 rounded-lg border-none bg-transparent cursor-pointer transition-colors duration-200 hover:bg-black/5"
					type="button" aria-haspopup="true" :aria-expanded="open" @click="open = !open" aria-expanded="true">
					<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">সব কোর্স ক্যাটাগরি</span>
					<div class="w-4 h-4 aspect-square flex items-center justify-center">
						<img class="dropdown-arrow w-[11px] h-[6px] transition-transform duration-200 rotate-180"
							src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.svg" 
							alt="<?php esc_attr_e('arrow-down', 'nqa'); ?>"
							:class="{ 'rotate-180': open }">
					</div>
				</button>
				<div style="z-index: 999; top: 50px; right: -20px;"
					class="flex flex-col absolute bg-white border-0 rounded-b px-4 shadow-lg w-[200px]" 
					x-show="open"
					x-transition="" 
					x-cloak
					@click.away="open = false">
					<a style="margin: .5rem 0;" href="#"
						class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">
						<div class="flex items-center w-10 h-10" aria-hidden="true">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/heart.svg" 
								alt="<?php esc_attr_e('heart', 'nqa'); ?>"
								style="width: 1.5rem; height: 1.5rem;" 
								class="object-contain">
						</div>
						<div class="course-item__content">
							<h3 class="text-primary text-sm font-medium">জনপ্রিয় কোর্স সমূহ</h3>
						</div>
					</a>
					<a style="margin: .5rem 0;" href="#"
						class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">
						<div class="flex items-center w-10 h-10" aria-hidden="true">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arabic-door.svg" 
								alt="<?php esc_attr_e('arabic-door', 'nqa'); ?>"
								style="width: 1.5rem; height: 1.5rem;" 
								class="object-contain">
						</div>
						<div class="course-item__content">
							<h3 class="text-primary text-sm font-medium">আরবি ভাষা</h3>
						</div>
					</a>
					<a style="margin: .5rem 0;" href="#"
						class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">
						<div class="flex items-center w-10 h-10" aria-hidden="true">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/BookBookmark.svg" 
								alt=""
								style="width: 1.5rem; height: 1.5rem;" class="object-contain">
						</div>
						<div class="course-item__content">
							<h3 class="text-primary text-sm font-medium">কুরআন শিক্ষা</h3>
						</div>
					</a>
					<a style="margin: .5rem 0;" href="#"
						class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">
						<div class="flex items-center w-10 h-10" aria-hidden="true">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/MoonStars.svg" 
								alt="<?php esc_attr_e('moon-stars', 'nqa'); ?>"
								style="width: 1.5rem; height: 1.5rem;" 
								class="object-contain">
						</div>
						<div class="course-item__content">
							<h3 class="text-primary text-sm font-medium">সীরাত</h3>
						</div>
					</a>
					<a style="margin: .5rem 0;" href="#"
						class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">
						<div class="flex items-center w-10 h-10" aria-hidden="true">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/VideoCamera.svg" 
								alt="<?php esc_attr_e('video-camera', 'nqa'); ?>"
								style="width: 1.5rem; height: 1.5rem;" 
								class="object-contain">
						</div>
						<div class="course-item__content">
							<h3 class="text-primary text-sm font-medium">প্রি-রেকর্ডেড কোর্স</h3>
						</div>
					</a>
					<a style="margin: .5rem 0;" href="#"
						class="inline-flex items-center gap-4 px-2 border border-muted hover:bg-gray-50 rounded transition-colors">
						<div class="flex items-center w-10 h-10" aria-hidden="true">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/key.svg" 
								alt="<?php esc_attr_e('key', 'nqa'); ?>"
								style="width: 1.5rem; height: 1.5rem;" 
								class="object-contain">
						</div>
						<div class="course-item__content">
							<h3 class="text-primary text-sm font-medium">ফিকহ শিক্ষা</h3>
						</div>
					</a>
				</div>
			</div>
		</nav>
	</div>

	<div class="flex justify-end items-center gap-3 flex-shrink-0 md:gap-4">
		<button
			class="hidden md:flex items-center justify-center h-12 px-2 py-2.5 gap-2 rounded-[50px] border border-white bg-white text-body font-normal leading-6 cursor-pointer transition-colors duration-200 flex-shrink-0 hover:bg-black/5"
			type="button" aria-label="লগ ইন">
			<span class="w-fit text-body text-primary whitespace-nowrap">লগ ইন</span>
			<div class="flex items-center justify-center">
				<img class="w-4 h-[10px]"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-active.svg"
					alt="<?php esc_attr_e('arrow-right-active', 'nqa'); ?>" />
			</div>
		</button>

		<button
			class="border-gradient-primary relative flex items-center justify-center h-12 px-6 py-2.5 gap-2.5 rounded-[50px] bg-white text-sm font-normal leading-6 cursor-pointer transition-colors duration-200 flex-shrink-0 hover:bg-black/5 md:text-body"
			type="button" aria-label="যোগাযোগ করুন">
			<span class="w-fit text-body text-primary whitespace-nowrap">যোগাযোগ করুন</span>
		</button>
	</div>
</header>

<!-- Mobile Navigation (shown only on mobile devices) -->
<nav class="fixed bottom-0 left-0 right-0 z-[1000] md:hidden block" role="navigation"
	aria-label="Mobile navigation">
	<div
		class="flex items-center justify-between p-4 bg-white max-w-[768px] mx-auto xs:p-3 xs:px-2 sm:p-2.5 sm:px-1">
		<a href="#home"
			class="mobile-nav-item flex flex-col items-center gap-1 px-2 no-underline transition-opacity duration-200 cursor-pointer hover:opacity-80 xs:px-1 xs:gap-0.5 sm:px-0.5"
			aria-current="page">
			<div class="w-5 h-5 flex items-center justify-center relative xs:w-[18px] xs:h-[18px] sm:w-4 sm:h-4"
				aria-hidden="true">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-menu-active.svg" alt="<?php esc_attr_e('home', 'nqa'); ?>" class="max-w-full max-h-full object-contain">
			</div>
			<span
				class="mobile-nav-active text-center text-body text-primary leading-6 whitespace-nowrap transition-colors duration-200">হোম</span>
		</a>

		<a href="#special"
			class="mobile-nav-item flex flex-col items-center gap-1 px-2 no-underline transition-opacity duration-200 cursor-pointer hover:opacity-80 xs:px-1 xs:gap-0.5 sm:px-0.5">
			<div class="w-5 h-5 flex items-center justify-center relative xs:w-[18px] xs:h-[18px] sm:w-4 sm:h-4"
				aria-hidden="true">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gift-menu.svg" alt="<?php esc_attr_e('special', 'nqa'); ?>" class="max-w-full max-h-full object-contain">
			</div>
			<span
				class="text-center text-bodyleading-6 whitespace-nowrap text-[#afafaf] transition-colors duration-200">
				স্পেশাল
			</span>
		</a>

		<a href="#free-courses"
			class="mobile-nav-item flex flex-col items-center gap-1 px-2 no-underline transition-opacity duration-200 cursor-pointer hover:opacity-80 xs:px-1 xs:gap-0.5 sm:px-0.5">
			<div class="w-5 h-5 flex items-center justify-center relative xs:w-[18px] xs:h-[18px] sm:w-4 sm:h-4"
				aria-hidden="true">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-menu.svg" alt="<?php esc_attr_e('free course', 'nqa'); ?>" class="max-w-full max-h-full object-contain">
			</div>
			<span
				class="text-center text-body leading-6 whitespace-nowrap text-[#afafaf] transition-colors duration-200">
				ফ্রী কোর্স
			</span>
		</a>

		<a href="#all-courses"
			class="mobile-nav-item flex flex-col items-center gap-1 px-2 no-underline transition-opacity duration-200 cursor-pointer hover:opacity-80 xs:px-1 xs:gap-0.5 sm:px-0.5">
			<div class="w-5 h-5 flex items-center justify-center relative xs:w-[18px] xs:h-[18px] sm:w-4 sm:h-4"
				aria-hidden="true">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cap-menu.svg" alt="<?php esc_attr_e('all-courses', 'nqa'); ?>" class="max-w-full max-h-full object-contain">
			</div>
			<span
				class="text-center text-body leading-6 whitespace-nowrap text-[#afafaf] transition-colors duration-200">
				সব কোর্স
			</span>
		</a>

		<a href="#login"
			class="mobile-nav-item flex flex-col items-center gap-1 px-2 no-underline transition-opacity duration-200 cursor-pointer hover:opacity-80 xs:px-1 xs:gap-0.5 sm:px-0.5">
			<div class="w-5 h-5 flex items-center justify-center relative xs:w-[18px] xs:h-[18px] sm:w-4 sm:h-4"
				aria-hidden="true">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-menu.svg" alt="<?php esc_attr_e('login', 'nqa'); ?>" class="max-w-full max-h-full object-contain">
			</div>
			<span
				class="text-center text-xs leading-6 whitespace-nowrap text-[#afafaf] transition-colors duration-200">
				লগ ইন
			</span>
		</a>
	</div>
</nav>