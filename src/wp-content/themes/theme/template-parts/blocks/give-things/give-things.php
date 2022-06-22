<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['give_things']) : ?>

    <section class="give-things paddings-hero-top" id="give-things">
        <div class="container">
            <div class="container-wrapper">
                <div class="give-things__wrapper">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                    <div class="give-things__flex">
                        <div class="give-things__headings">
                            <h1><?php the_field('give_things_heading', $post_id); ?></h1>
                            <div class="give-things__subheading"><?php the_field('give_things_subheading', $post_id); ?></div>
                        </div>
                        <div class="give-things__imgs">
                            <div class="give-things__imgs__1">
                                <div class="give-things__imgs__1__img" style="background-image: url('<?php the_field('give_things_img_2', $post_id); ?>');"></div>
                            </div>
                            <div class="give-things__imgs__2">
                                <div class="give-things__imgs__2__img" style="background-image: url('<?php the_field('give_things_img_3', $post_id); ?>');"></div>
                            </div>
                        </div>
                    </div>
                    <div class="give-things__imgs__3">
                        <div class="give-things__imgs__3__img" style="background-image: url('<?php the_field('give_things_img_1', $post_id); ?>');"></div>
                    </div>
                    <div class="give-things__figure">
                        <?php
                        $give_things_figure_color = get_field('give_things_figure_f_color', $post_id);
                        $give_things_figure_select = get_field('give_things_figure_f_select', $post_id);
                        echo wp_get_figures_svg($give_things_figure_select, $give_things_figure_color);
                        ?>
                    </div>
                    <?php $give_things_bg_color = get_field('give_things_bg_f_color', $post_id); ?>
                    <div class="give-things__bg" style="background-color: #<?php echo $give_things_bg_color; ?>"></div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>