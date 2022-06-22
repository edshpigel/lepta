<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['r_text_figure']) : ?>

    <section class="r-text-figure" id="r-text-figure">
        <div class="container">
            <div class="r-text-figure__wrapper">
                <h2><?php the_field('r_text_figure_heading', $post_id); ?></h2>
                <div class="r-text-figure__wrapper__figure">
                    <?php
                    $r_text_figure_figure_color = get_field('r_text_figure_figure_f_color', $post_id);
                    $r_text_figure_figure_select = get_field('r_text_figure_figure_f_select', $post_id);
                    echo wp_get_figures_svg($r_text_figure_figure_select, $r_text_figure_figure_color);
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>