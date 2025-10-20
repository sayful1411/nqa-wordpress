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
  <meta name="description" content="Explore a wide range of online courses to enhance your skills. Buy courses in various subjects and start learning today. Flexible learning at your own pace.">

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
<?php if (get_theme_mod('show_offer_banner', true)): ?>
<div class="w-full" role="banner" style="background-color:<?php echo esc_attr(get_theme_mod('offer_bg_color', '#9b1b40')); ?>">
	<div
		class="relative flex items-center justify-between min-h-[40px] px-4 gap-2 md:gap-4 sm:px-3 xs:px-2 xs:gap-1">
		<?php
            $left_image = get_theme_mod('offer_left_image');
		if ($left_image): ?>
			<img class="absolute left-4 flex-shrink-0 h-6 w-auto mix-blend-luminosity object-cover sm:h-8 md:h-10"
				src="<?php echo esc_url($left_image); ?>"
				alt="<?php esc_attr_e('Offer', 'nqa'); ?>" />
		<?php else: ?>
		<img class="absolute left-4 flex-shrink-0 h-6 w-auto mix-blend-luminosity object-cover sm:h-8 md:h-10"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-2.png"
                alt="<?php esc_attr_e('Offer', 'nqa'); ?>" />
        <?php endif; ?>
		<div class="flex-1 flex justify-center items-center mx-1 sm:mx-2 md:mx-4">
			<h6 class="font-normal m-0 text-body text-center leading-tight text-white">
				<?php echo esc_html_e(get_theme_mod('offer_text', 'ছোটদের কোরআন শিক্ষা কোর্সে')); ?>
			</h6>
		</div>

		<div class="flex items-center gap-1 flex-shrink-0 sm:gap-2 md:gap-4">
		<?php
            $right_image = get_theme_mod('offer_right_image');
			if ($right_image): ?>
				<img class="absolute right-4 h-6 w-auto mix-blend-luminosity object-cover sm:h-8 md:h-10"
					src="<?php echo esc_url($right_image); ?>"
					alt="<?php esc_attr_e('Offer', 'nqa'); ?>" />
			<?php else: ?>
				<img class="absolute right-4 h-6 w-auto mix-blend-luminosity object-cover sm:h-8 md:h-10"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-1.png"
					alt="<?php esc_attr_e('Offer', 'nqa'); ?>" />
			<?php endif; ?>
			<button
				class="w-5 h-5 z-10 cursor-pointer bg-transparent border-none p-0 flex items-center justify-center rounded transition-opacity duration-200 hover:opacity-80 focus:outline-2 focus:outline-offset-2 sm:w-6 sm:h-6"
				type="button" aria-label="<?php esc_attr_e('বন্ধ করুন', 'nqa'); ?>"
                onclick="this.closest('[role=banner]').remove()">
				<img class="w-4 h-4 sm:w-5 sm:h-5"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/x-circle.svg"
					alt="<?php esc_attr_e('x-circle', 'nqa'); ?>" />
			</button>
		</div>
	</div>
</div>
<?php endif; ?>

<!-- Header -->
<header class="flex w-full items-center justify-between px-10 py-4 bg-white box-border md:flex-col lg:flex-row"
	role="banner">
	<div class="flex items-center gap-0 flex-shrink-0 md:gap-12">
	<?php if (has_custom_logo()): ?>
		<?php the_custom_logo(); ?>
	<?php else: ?>
		<h1 class="text-2xl font-bold text-primary m-0">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline text-inherit">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
	<?php endif; ?>

		<nav class="relative hidden md:flex items-center gap-3 flex-shrink-0"
			role="navigation"
			aria-label="Main navigation"
			x-data="{ coursesOpen: false }"
			@click.outside="coursesOpen = false">

			<?php if ( get_theme_mod( 'special_offer', true ) ) : ?>
			<a href="<?php echo esc_url(get_theme_mod('special_offer_url', '#special-offer')); ?>"
				class="nav-link-special relative flex items-center justify-center gap-2 px-2 py-2.5 flex-shrink-0 rounded-lg border-none no-underline bg-transparent cursor-pointer transition-colors duration-200 hover:bg-black/5"
				aria-label="<?php echo esc_attr_e(get_theme_mod('special_offer_text', 'স্পেশাল অফার'), 'nqa') ?>">
				<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">
				<?php echo esc_html_e(get_theme_mod('special_offer_text', 'স্পেশাল অফার'), 'nqa'); ?>
				</span>
			</a>
			<?php endif; ?>

			<?php
			if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex items-center gap-3',
                    'fallback_cb'    => false,
                    'link_before'    => '<span class="w-fit text-body text-primary font-normal leading-6 whitespace-nowrap">',
                    'link_after'     => '</span>',
                    'walker'         => new Dropdown_Walker(),
                    'items_wrap'     => '%3$s', // Remove default <ul> wrapper
                ));
			}
            ?>
		</nav>
	</div>

	<div class="flex justify-end items-center gap-3 flex-shrink-0 md:gap-4">
		<?php if(get_theme_mod('show_login_button', true)): ?>
		<a href="<?php echo esc_url(get_theme_mod('login_button_url', '#login')); ?>"
			class="hidden md:flex items-center justify-center h-12 px-2 py-2.5 gap-2 rounded-[50px] border border-white bg-white text-body font-normal leading-6 cursor-pointer transition-colors duration-200 flex-shrink-0 hover:bg-black/5"
			type="button" aria-label="<?php echo esc_attr_e(get_theme_mod('login_button_text', 'লগ ইন'), 'nqa'); ?>">
			<span class="w-fit text-body text-primary whitespace-nowrap">
			<?php echo esc_html_e(get_theme_mod('login_button_text', 'লগ ইন'), 'nqa'); ?>
			</span>
			<div class="flex items-center justify-center">
				<img class="w-4 h-[10px]"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-active.svg"
					alt="<?php esc_attr_e('arrow-right-active', 'nqa'); ?>" />
			</div>
		</a>
		<?php endif; ?>

        <?php if(get_theme_mod('show_contact_button', true)): ?>
		<a href="<?php echo esc_url(get_theme_mod('contact_button_url', '#contact')); ?>"
			class="border-gradient-primary relative flex items-center justify-center h-12 px-6 py-2.5 gap-2.5 rounded-[50px] bg-white text-sm font-normal leading-6 cursor-pointer transition-colors duration-200 flex-shrink-0 hover:bg-black/5 md:text-body"
			type="button" aria-label="<?php echo esc_attr_e(get_theme_mod('contact_button_text', default_value: 'যোগাযোগ করুন'), 'nqa'); ?>">
			<span class="w-fit text-body text-primary whitespace-nowrap">
			<?php echo esc_html_e(get_theme_mod('contact_button_text', 'যোগাযোগ করুন'), 'nqa'); ?>
			</span>
		</a>
		<?php endif; ?>
	</div>
</header>

<!-- Mobile Navigation (shown only on mobile devices) -->
<nav class="fixed bottom-0 left-0 right-0 z-[1000] md:hidden block" role="navigation"
	aria-label="Mobile navigation">
	<div
		class="flex items-center justify-between p-4 bg-white max-w-[768px] mx-auto xs:p-3 xs:px-2 sm:p-2.5 sm:px-1">
		<?php
        wp_nav_menu( [
            'theme_location' => 'mobile',
            'container'      => false,
            'items_wrap'     => '%3$s', // no <ul>
            'walker'         => new Mobile_Menu_Walker(),
        ]);
        ?>
	</div>
</nav>