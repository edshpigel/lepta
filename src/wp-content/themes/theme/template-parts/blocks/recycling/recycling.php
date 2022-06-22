<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['recycling']) : ?>

    <section class="recycling paddings-hero-top" id="recycling">
        <div class="container">
            <div class="container-wrapper">
                <div class="recycling__wrapper">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                    <div class="recycling__headings">
                        <div class="recycling__content">
                            <h1><?php the_field('recycling_heading', $post_id); ?></h1>
                            <div class="recycling__subheading"><?php the_field('recycling_subheading', $post_id); ?></div>
                        </div>
                        <div class="recycling__img" style="background-image: url('<?php the_field('recycling_img_3', $post_id); ?>');"></div>
                    </div>
                    <div class="recycling__flex">
                        <div class="recycling__imgs">
                            <div class="recycling__imgs__img" style="background-image: url('<?php the_field('recycling_img_1', $post_id); ?>');"></div>
                            <div class="recycling__imgs__img" style="background-image: url('<?php the_field('recycling_img_2', $post_id); ?>');"></div>
                        </div>
                        <div class="recycling__nums">
                            <div class="recycling__nums__num h1"><?php the_field('recycling_num', $post_id); ?></div>
                            <div class="recycling__nums__num-after"><?php the_field('recycling_num_after', $post_id); ?></div>
                        </div>
                    </div>
                    <div class="recycling__figure">
                        <?php
                        $recycling_figure_color = get_field('recycling_figure_f_color', $post_id);
                        $recycling_figure_select = get_field('recycling_figure_f_select', $post_id);
                        echo wp_get_figures_svg($recycling_figure_select, $recycling_figure_color);
                        ?>
                    </div>
                    <?php $recycling_bg_color = get_field('recycling_bg_f_color', $post_id); ?>
                    <div class="recycling__bg" style="background-color: #<?php echo $recycling_bg_color; ?>"></div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>