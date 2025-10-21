<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nurul_quran_academy
 */

?>

<!-- Footer -->
<footer class="w-full" role="contentinfo">
	<div style="background-color:  <?php echo esc_attr(get_theme_mod('footer_bg_color', '#f8f5ec')); ?>"
		class="relative overflow-hidden pt-16 pb-20 md:pb-24 lg:pb-0 min-h-[631px]">
		<!-- Main Content -->
		<div
			class="grid grid-cols-1 lg:grid-cols-[1fr_1.8fr] gap-12 md:gap-20 lg:gap-30 max-w-[1112px] mx-auto px-4 md:px-6 lg:px-0 relative z-[2]">
			<!-- About Section -->
			<section class="flex flex-col gap-8 md:gap-12 lg:gap-12 max-w-[336px] text-left">
				<!-- Brand -->
				<div class="flex flex-col gap-6 md:gap-8 lg:gap-10">
				<?php
                    $footer_logo = get_theme_mod('footer_logo');
					if ($footer_logo): ?>
						<img class="w-[163px] h-[62.24px] object-cover" src="<?php echo esc_url($footer_logo); ?>"
							alt="<?php esc_attr_e('footer logo', 'nqa'); ?>" />
					<?php else: ?>
                        <h1 class="text-2xl font-bold text-primary m-0">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline text-inherit">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                    <?php endif; ?>
					<p class="text-body font-normal leading-[150%] mb-0 text-primary md:text-body">
						<?php echo wp_kses_post(get_theme_mod('footer_description', 'ইসলামী জ্ঞান অর্জনের অনলাইনভিত্তিক অনন্য একটি শিক্ষা প্রতিষ্ঠান।')); ?>
					</p>
				</div>

				<!-- Auth Button -->
				<a href="<?php echo esc_url(get_theme_mod('footer_button_url', '#login')); ?>"
					class="flex w-full max-w-[299px] h-10 md:h-11 items-center justify-center gap-2.5 px-4 py-2.5 rounded-full bg-gradient-to-r from-[#df186a] to-[#fa6f21] cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(223,24,106,0.3)] focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2"
					type="button" aria-label="<?php echo esc_attr_e(get_theme_mod('footer_button_text', 'লগ ইন/ সাইন আপ'), 'nqa'); ?>">
					<span class="text-white whitespace-nowrap text-body font-normal leading-[150%] mb-0">
						<?php echo esc_html_e(get_theme_mod('footer_button_text', 'লগ ইন/ সাইন আপ'), 'nqa'); ?>
					</span>
					<span class="w-4 h-4 flex items-center justify-center" aria-hidden="true">
						<img class="w-3 h-2.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" 
							alt="<?php esc_attr_e('arrow-right', 'nqa'); ?>" />
					</span>
				</a>
			</section>

			<!-- Navigation Section -->
			<nav class="flex flex-col gap-8 md:gap-10 lg:gap-12 max-w-[599px]" role="navigation"
				aria-label="ফুটার নেভিগেশন">
				<!-- Navigation Links -->
				<div
					class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-8 lg:gap-8 justify-items-start text-left">
					<!-- Column 1 -->
					<div class="flex flex-col gap-4 w-full">
						<h3
							class="text-brand text-body font-semibold leading-[150%] mb-0 px-2 py-1 md:text-body">
							<?php echo esc_html_e( nqa_get_menu_name( 'footer-menu-1', 'Footer 1' ), 'nqa' ); ?>
						</h3>

						<?php
						if ( has_nav_menu( 'footer-menu-1' ) ) {
                            wp_nav_menu([
                                'theme_location' => 'footer-menu-1',
                                'container'      => false,
                                'menu_class'     => 'flex flex-col gap-2 list-none m-0 p-0',
                                'fallback_cb'    => 'mytheme_footer_menu_fallback_1',
                            ]);
						}
                        ?>
					</div>

					<!-- Column 2 -->
					<div class="flex flex-col gap-4 w-full">
						<h3
							class="text-brand text-body font-semibold leading-[150%] mb-0 px-2 py-1 md:text-body">
							<?php echo esc_html_e( nqa_get_menu_name( 'footer-menu-2', 'Footer 2' ), 'nqa' ); ?>
						</h3>

						<?php
						if ( has_nav_menu( 'footer-menu-2' ) ) {
                            wp_nav_menu([
                                'theme_location' => 'footer-menu-2',
                                'container'      => false,
                                'menu_class'     => 'flex flex-col gap-2 list-none m-0 p-0',
                                'fallback_cb'    => 'mytheme_footer_menu_fallback_2',
                            ]);
						}
                        ?>
					</div>

					<!-- Column 3 - Contact -->
					<address class="flex flex-col gap-4 w-full not-italic">
						<h3
							class="text-brand text-body font-semibold leading-[150%] mb-0 px-2 py-1 md:text-body">
							<?php echo esc_html_e( get_theme_mod( 'footer_contact_title', 'যোগাযোগ' ), 'nqa' ); ?>
						</h3>
						<ul class="flex flex-col gap-2 list-none m-0 p-0">
							<li class="px-2 py-1">
								<span
									class="text-body font-normal leading-[150%] mb-0 md:text-body">
									<?php echo esc_html_e( get_theme_mod( 'footer_address_label', 'ঠিকানা:' ), 'nqa'); ?>  
                                    <?php echo esc_html_e(get_theme_mod('footer_address', 'বসিলা, মুহাম্মদপুর, ঢাকা।'), 'nqa'); ?>
								</span>
							</li>
							<li class="px-2 py-1">
								<a href="tel:<?php echo esc_attr(get_theme_mod('footer_phone', '+8801700946569')); ?>"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									<?php echo esc_html_e( get_theme_mod( 'footer_phone_label', 'ফোন নং:' ), 'nqa'); ?>
                                    <?php echo esc_html(get_theme_mod('footer_phone', '+8801700946569')); ?>
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="mailto:<?php echo esc_html(get_theme_mod('footer_email', 'nurulquran887@gmail.com')); ?>"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									<?php echo esc_html_e( get_theme_mod( 'footer_email_label', 'ইমেইল:' ), 'nqa'); ?>
                                    <?php echo esc_html(get_theme_mod('footer_email', 'nurulquran887@gmail.com')); ?>
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="<?php echo esc_url(get_theme_mod('footer_complaint_url')) ?>"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									<?php echo esc_html_e( get_theme_mod( 'footer_complaint_text', 'অভিযোগ বাক্স' ), 'nqa'); ?>
								</a>
							</li>
						</ul>
					</address>
				</div>

				<!-- Social Media -->
				<div class="flex items-center gap-4 justify-start mb-0 md:mb-24 lg:mb-0">
					<ul class="flex items-center gap-4 list-none m-0 p-0" role="list"
						aria-label="সামাজিক মাধ্যম লিংক">

						<?php if (get_theme_mod('footer_facebook')): ?>
						<li>
							<a href="<?php echo esc_url(get_theme_mod('footer_facebook', 'https://facebook.com')); ?>"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="আমাদের ফেসবুক পেজ দেখুন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_facebook-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<?php endif; ?>

						<?php if (get_theme_mod('footer_whatsapp')): ?>
						<li>
							<a href="<?php echo esc_url(get_theme_mod('footer_whatsapp', 'https://web.whatsapp.com')); ?>"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="হোয়াটসঅ্যাপে যোগাযোগ করুন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_whatsapp-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<?php endif; ?>

						<?php if (get_theme_mod('footer_linkedin')): ?>
						<li>
							<a href="<?php echo esc_url(get_theme_mod('footer_linkedin', 'https://linkedin.com')); ?>"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="লিংকডইনে যুক্ত হন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_linkedin-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<?php endif; ?>

						<?php if (get_theme_mod('footer_youtube')): ?>
						<li>
							<a href="<?php echo esc_url(get_theme_mod('footer_youtube', 'https://youtube.com')); ?>"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="আমাদের ইউটিউব চ্যানেল সাবস্ক্রাইব করুন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_youtube-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Decorative Background Images -->
		<?php if ( get_theme_mod( 'show_footer_bottom_image', true ) ) : ?>
			<div class="pt-8 pointer-events-none" aria-hidden="true">
				<div style="background-image: url('<?php echo esc_url( get_theme_mod( 'footer_bottom_image', get_template_directory_uri() . '/assets/images/footer-bg.svg' ) ); ?>')"
					class="w-full h-[200px] bg-cover bg-bottom mix-blend-multiply">
				</div>
			</div>
		<?php endif; ?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
