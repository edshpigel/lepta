<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['about']) : ?>

    <section class="about paddings-hero-top" id="about">
        <div class="container">
            <div class="container-wrapper">
                <div class="about__wrapper">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                    <h1><?php the_field('about_heading', $post_id); ?></h1>
                    <div class="about__subheading"><?php the_field('about_subheading', $post_id); ?></div>
                    <div class="about__bg" style="background-color: #<?php $about_bg_color_color = get_field('about_bg_color_f_color', $post_id);
                                                                        echo $about_bg_color_color; ?>"></div>
                    <div class="about__imgs">
                        <div class="about__imgs__wrapper">
                            <div class="about__imgs__1">
                                <div class="about__imgs__1__img" style="background-image: url('<?php the_field('about_img_1', $post_id); ?>');"></div>
                            </div>
                            <div class="about__imgs__2">
                                <div class="about__imgs__2__img" style="background-image: url('<?php the_field('about_img_2', $post_id); ?>');"></div>
                            </div>
                            <div class="about__imgs__3">
                                <div class="about__imgs__3__img" style="background-image: url('<?php the_field('about_img_3', $post_id); ?>');"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about__figure__1">
                        <?php
                        $about_figure_1_color = get_field('about_figure_1_f_color', $post_id);
                        $about_figure_1_select = get_field('about_figure_1_f_select', $post_id);
                        echo wp_get_figures_svg($about_figure_1_select, $about_figure_1_color);
                        ?>
                    </div>
                    <div class="about__figure__2">
                        <?php
                        $about_figure_2_color = get_field('about_figure_2_f_color', $post_id);
                        $about_figure_2_select = get_field('about_figure_2_f_select', $post_id);
                        echo wp_get_figures_svg($about_figure_2_select, $about_figure_2_color);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>