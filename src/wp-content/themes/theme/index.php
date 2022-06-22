<?php

/**
 * Template name: Главная страница
 */

get_header(); ?>

<?php get_template_part('template-parts/blocks/home/hero'); ?>

<?php get_template_part('template-parts/blocks/home/who-is'); ?>

<?php get_template_part('template-parts/blocks/home/text-block'); ?>

<?php get_template_part('template-parts/blocks/home/how-work'); ?>

<?php get_template_part('template-parts/blocks/home/im-nums'); ?>

<?php get_template_part('template-parts/blocks/partners'); ?>


<?php
// $color_figure = get_field('who_is_figure');
// echo wp_get_figures_svg('circle_svg', $color_figure);

// $who_is_clone = get_field('who_is_clone');
// echo wp_get_figures_svg('circle_svg', $who_is_clone['f_color']); 
?>


<?php get_footer(); ?>