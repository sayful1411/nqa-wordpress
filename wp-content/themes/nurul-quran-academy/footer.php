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
	<div class="relative bg-[#f8f5ec] overflow-hidden pt-16 pb-20 md:pb-24 lg:pb-0 min-h-[631px]">
		<!-- Main Content -->
		<div
			class="grid grid-cols-1 lg:grid-cols-[1fr_1.8fr] gap-12 md:gap-20 lg:gap-30 max-w-[1112px] mx-auto px-4 md:px-6 lg:px-0 relative z-[2]">
			<!-- About Section -->
			<section class="flex flex-col gap-8 md:gap-12 lg:gap-12 max-w-[336px] text-left">
				<!-- Brand -->
				<div class="flex flex-col gap-6 md:gap-8 lg:gap-10">
					<img class="w-[163px] h-[62.24px] object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png"
						alt="<?php esc_attr_e('footer logo', 'nqa'); ?>" />
					<p class="text-body font-normal leading-[150%] mb-0 text-primary md:text-body">
						ইসলামী জ্ঞান অর্জনের অনলাইনভিত্তিক অনন্য একটি শিক্ষা প্রতিষ্ঠান। এতে আরবীভাষা ও সাহিত্যসহ
						কুরআন-হাদীস-ফিকহ-আকীদা ইত্যাদি শরীয়তের বিভিন্ন বিষয়ে রয়েছে পেইড ও ফ্রি কোর্সসমূহ।
					</p>
				</div>

				<!-- Auth Button -->
				<button
					class="flex w-full max-w-[299px] mx-auto h-10 md:h-11 items-center justify-center gap-2.5 px-4 py-2.5 rounded-full bg-gradient-to-r from-[#df186a] to-[#fa6f21] cursor-pointer transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(223,24,106,0.3)] focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2"
					type="button" aria-label="লগ ইন বা সাইন আপ করুন">
					<span class="text-white whitespace-nowrap text-body font-normal leading-[150%] mb-0">লগ ইন/ সাইন আপ</span>
					<span class="w-4 h-4 flex items-center justify-center" aria-hidden="true">
						<img class="w-3 h-2.5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" 
							alt="<?php esc_attr_e('arrow-right', 'nqa'); ?>" />
					</span>
				</button>
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
							আরও জানুন
						</h3>
						<ul class="flex flex-col gap-2 list-none m-0 p-0">
							<li class="px-2 py-1">
								<a href="#gallery"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									গ্যালারি
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#testimonials"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									শিক্ষার্থীদের মন্তব্য
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#teachers"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									শিক্ষক/শিক্ষিকা
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#e-campus"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									ই-ক্যাম্পাস
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#about"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									পরিচিতি
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#faq"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									সচরাচর জিজ্ঞাসা
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 2 -->
					<div class="flex flex-col gap-4 w-full">
						<h3
							class="text-brand text-body font-semibold leading-[150%] mb-0 px-2 py-1 md:text-body">
							ঘুরে আসুন
						</h3>
						<ul class="flex flex-col gap-2 list-none m-0 p-0">
							<li class="px-2 py-1">
								<a href="#home"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									মূলপাতা
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#free-courses"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									ফ্রি কোর্স
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#paid-courses"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									পেইড কোর্স
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#blog"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									ব্লগ
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#videos"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									ভিডিও
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#sadaqah"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									সাদাকাহ
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 3 - Contact -->
					<address class="flex flex-col gap-4 w-full not-italic">
						<h3
							class="text-brand text-body font-semibold leading-[150%] mb-0 px-2 py-1 md:text-body">
							যোগাযোগ
						</h3>
						<ul class="flex flex-col gap-2 list-none m-0 p-0">
							<li class="px-2 py-1">
								<span
									class="text-body font-normal leading-[150%] mb-0 md:text-body">
									ঠিকানা: বসিলা, মুহাম্মদপুর, ঢাকা।
								</span>
							</li>
							<li class="px-2 py-1">
								<a href="tel:+8801700946569"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									ফোন নং: +8801700946569
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="mailto:nurulquran887@gmail.com"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									ইমেইল: nurulquran887@gmail.com
								</a>
							</li>
							<li class="px-2 py-1">
								<a href="#complaints"
									class="no-underline text-body font-normal leading-[150%] transition-colors duration-200 block hover:text-brand focus-visible:outline-2 focus-visible:outline-brand focus-visible:outline-offset-2 focus-visible:rounded-sm md:text-body">
									অভিযোগ বাক্স
								</a>
							</li>
						</ul>
					</address>
				</div>

				<!-- Social Media -->
				<div class="flex items-center gap-4 justify-start mb-0 md:mb-24 lg:mb-0">
					<ul class="flex items-center gap-4 list-none m-0 p-0" role="list"
						aria-label="সামাজিক মাধ্যম লিংক">
						<li>
							<a href="#"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="আমাদের ফেসবুক পেজ দেখুন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_facebook-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="হোয়াটসঅ্যাপে যোগাযোগ করুন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_whatsapp-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="লিংকডইনে যুক্ত হন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_linkedin-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center justify-center w-9 h-9 md:w-10 md:h-10 bg-brand rounded-lg no-underline transition-all duration-200 hover:bg-[#7a1d36] hover:-translate-y-0.5"
								aria-label="আমাদের ইউটিউব চ্যানেল সাবস্ক্রাইব করুন">
								<span style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos_youtube-icon.svg')"
									class="w-5 h-5 md:w-6 md:h-6 bg-contain bg-no-repeat bg-center"></span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Decorative Background Images -->
		<div class="pt-8 pointer-events-none" aria-hidden="true">
			<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/footer-bg.svg')"
				class="w-full h-[200px] md:h-[250px] lg:h-[300px] bg-cover bg-bottom mix-blend-multiply">
			</div>
		</div>
	</div>
</footer>

</body>
</html>
