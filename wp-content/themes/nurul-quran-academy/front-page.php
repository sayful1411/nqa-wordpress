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
<?php get_template_part('template-parts/feedback'); ?>
<?php get_template_part('template-parts/special-offer'); ?>
<?php get_template_part('template-parts/teacher'); ?>

</main>

<?php get_footer(); ?>
