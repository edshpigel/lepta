<?php

/*
 * Template name: Страница Простая	
 */

get_header();

?>

<section class="form-page paddings-hero-top">
    <div class="container">
        <div class="container-wrapper">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
            <h2><?php the_title(); ?></h2>
            <div class="form-page__content"><?php the_content(); ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>