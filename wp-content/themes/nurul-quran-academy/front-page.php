<?php
/**
 * Template Name: Homepage
 * Description: Main homepage with all sections
 */

get_header(); ?>

<!-- Main -->
<main class="w-full">

<?php get_template_part('template-parts/hero'); ?>
<?php get_template_part('template-parts/popular-courses'); ?>
<?php get_template_part('template-parts/testimonial'); ?>
<?php get_template_part('template-parts/admission-banner'); ?>

</main>

<?php get_footer(); ?>
