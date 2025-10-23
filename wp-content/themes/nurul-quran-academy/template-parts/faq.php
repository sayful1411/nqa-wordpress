<?php
    $display  = get_theme_mod( 'nqa_faq_display', true );
    if ( $display ) :

    $faqs = new WP_Query(array(
    'post_type' => 'faq',
    'posts_per_page' => -1, // all lists
    'orderby' => 'menu_order',
    'order' => 'ASC',
    ));

    $heading = get_theme_mod('nqa_faq_heading', '<span class="text-gradient bg-clip-text text-transparent">প্রশ্নোত্তর</span> সবাই জানতে চান');

?>
<!-- FAQ -->
<section class="w-full py-16 px-8 lg:py-24 lg:px-8 bg-[#fefefe]" role="main" aria-label="প্রশ্নোত্তর বিভাগ">
  <div class="container mx-auto flex flex-col items-center gap-10 w-full">
    <header class="flex items-center justify-center gap-3 flex-wrap">
      <h2 class="text-h2 font-medium leading-normal text-primary text-center mb-0">
      <?php echo wp_kses_post($heading);?>
      </h2>
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 w-full px-0 md:px-8">
      <?php if ( $faqs->have_posts() ) :
            while ( $faqs->have_posts() ) : $faqs->the_post();
      ?>
      <details class="w-full max-w-[590px] border-b border-muted group">
        <summary
          class="flex items-center gap-3 lg:gap-4 p-3 lg:p-4 cursor-pointer transition-colors duration-200 w-full hover:bg-gray-50"
          aria-expanded="false">
          <img class="w-4 h-4 lg:w-5 lg:h-5 transition-transform duration-300 flex-shrink-0 rotate-0 group-open:rotate-[133deg]" src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.svg"
            alt="" />
          <h3 class="flex-1 text-h6 font-normal text-primary leading-[150%] mb-0"><?php the_title(); ?></h3>
        </summary>
        <div class="px-3 pb-3 lg:px-3 lg:pb-4">
          <p class="text-[calc(16px*0.9)] lg:text-base font-normal text-[#7a7a7a] leading-[150%] mb-0 p-0">
          <?php echo wp_kses_post( get_the_content() ); ?>
          </p>
        </div>
      </details>
      <?php
        endwhile;
          wp_reset_postdata();
        endif;
      ?>
    </div>
  </div>
</section>
<?php endif; ?>